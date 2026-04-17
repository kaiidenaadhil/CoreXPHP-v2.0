<?php

class AuthModel extends Model
{
    protected $table = 'users';

    // আগের হেল্পার মেথডটি থাকবে
    public function findUserByEmailOrPhone($loginId)
    {
        if (filter_var($loginId, FILTER_VALIDATE_EMAIL)) {
            $users = $this->query()->where('email', '=', $loginId)->get();
        } else {
            $users = $this->query()->where('phone', '=', $loginId)->get();
        }
        return !empty($users) ? $users[0] : null; 
    }

    /**
     * নতুন: Registration Logic in Model
     */
    public function registerUser(array $data)
    {
        if (empty($data['name']) || empty($data['password']) || (empty($data['email']) && empty($data['phone']))) {
            return ['success' => false, 'message' => 'Name, Password and (Email or Phone) are required!', 'status' => 400];
        }

        $email = !empty($data['email']) ? $data['email'] : null;
        $phone = !empty($data['phone']) ? $data['phone'] : null;

        if ($email && $this->findUserByEmailOrPhone($email)) {
            return ['success' => false, 'message' => 'Email already registered!', 'status' => 409];
        }
        if ($phone && $this->findUserByEmailOrPhone($phone)) {
            return ['success' => false, 'message' => 'Phone number already registered!', 'status' => 409];
        }

        try {
            $this->query()->insert([
                'name' => $data['name'],
                'email' => $email,
                'phone' => $phone,
                'password' => password_hash($data['password'], PASSWORD_BCRYPT),
                'role' => 'customer',
                'status' => 'active'
            ]);
            return ['success' => true, 'message' => 'Registration successful! You can now login.', 'status' => 201];
        } catch (Exception $e) {
            return ['success' => false, 'message' => 'Server Error: ' . $e->getMessage(), 'status' => 500];
        }
    }

    /**
     * নতুন: Login Logic in Model
     */
    public function loginUser($loginId, $password, $jwtService)
    {
        if (empty($loginId) || empty($password)) {
            return ['success' => false, 'message' => 'Email/Phone and Password are required!', 'status' => 400];
        }

        $user = $this->findUserByEmailOrPhone($loginId);

        if ($user && password_verify($password, $user->password)) {
            
            // টোকেন জেনারেট
            $token = $jwtService->generateToken([
                'id' => $user->id,
                'email' => $user->email,
                'phone' => $user->phone,
                'role' => $user->role
            ], 86400);

            return [
                'success' => true,
                'message' => 'Login successful!',
                'token' => $token,
                'user' => [
                    'name' => $user->name,
                    'email' => $user->email,
                    'phone' => $user->phone
                ],
                'status' => 200
            ];
        }

        return ['success' => false, 'message' => 'Invalid credentials!', 'status' => 401];
    }

    /**
     * Forgot Password: টোকেন তৈরি করা এবং ডাটাবেসে সেভ করা (Email or Phone)
     */
    public function generatePasswordResetToken($loginId)
    {
        // ১. চেক করা ইউজার আছে কি না (ইমেইল বা ফোন দিয়ে)
        $user = $this->findUserByEmailOrPhone($loginId);
        
        if (!$user) {
            return ['success' => false, 'message' => 'No account found with this Email or Phone!', 'status' => 404];
        }

        // ২. একটি সিকিউর র‍্যান্ডম টোকেন তৈরি করা
        $token = bin2hex(random_bytes(31));

        try {
            // ৩. ডাটাবেসের reset_token কলামে টোকেনটি সেভ করা (ইউজারের ID দিয়ে)
            $this->query()->where('id', '=', $user->id)->update([
                'reset_token' => $token
            ]);

            // ৪. রেসপন্সে টোকেন পাঠানো (যাতে আপনি টেস্ট করতে পারেন)
            return [
                'success' => true, 
                'message' => 'Password reset token generated successfully. Please check your email/phone.', 
                'reset_token' => $token, // ⚠️ প্রোডাকশনে এটি শুধু মেইলে যাবে, রেসপন্সে নয়!
                'status' => 200
            ];

        } catch (Exception $e) {
            return ['success' => false, 'message' => 'Database error: ' . $e->getMessage(), 'status' => 500];
        }
    }

    /**
     * Reset Password: টোকেন ভেরিফাই করে নতুন পাসওয়ার্ড সেট করা
     */
    public function resetPassword($token, $newPassword)
    {
        // ১. টোকেন দিয়ে ইউজার খোঁজা
        $users = $this->query()->where('reset_token', '=', $token)->get();
        $user = !empty($users) ? $users[0] : null;

        if (!$user) {
            return ['success' => false, 'message' => 'Invalid or expired reset token!', 'status' => 400];
        }

        try {
            // ২. নতুন পাসওয়ার্ড এনক্রিপ্ট/হ্যাশ করা
            $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);

            // ৩. পাসওয়ার্ড আপডেট করা এবং টোকেন মুছে ফেলা (যাতে ২ বার ব্যবহার করা না যায়)
            $this->query()->where('id', '=', $user->id)->update([
                'password' => $hashedPassword,
                'reset_token' => null
            ]);

            return ['success' => true, 'message' => 'Password has been successfully reset! You can now login.', 'status' => 200];

        } catch (Exception $e) {
            return ['success' => false, 'message' => 'Error updating password: ' . $e->getMessage(), 'status' => 500];
        }
    }

    /**
     * লগিন করা ইউজারের প্রোফাইল (Email, Phone, বা Password) আপডেট করার মেথড
     * * @param int $userId ইউজারের আইডি
     * @param array $data ফ্রন্টএন্ড থেকে আসা নতুন ডেটা
     * @return array
     */
    public function updateProfileCredentials($userId, $data)
    {
        $updateFields = [];

        // ১. যদি ইউজার তার ইমেইল আপডেট করতে চায়
        if (!empty($data['email'])) {
            // চেক করুন এই নতুন ইমেইলটি অন্য কোনো ইউজারের অ্যাকাউন্টে আছে কি না
            $existingEmail = $this->query()->where('email', '=', $data['email'])->where('id', '!=', $userId)->get();
            if (!empty($existingEmail)) {
                return ['success' => false, 'message' => 'This email is already taken by another user!', 'status' => 409];
            }
            // সব ঠিক থাকলে আপডেট লিস্টে ইমেইলটি যোগ করুন
            $updateFields['email'] = $data['email'];
        }

        // ২. যদি ইউজার তার ফোন নম্বর আপডেট করতে চায়
        if (!empty($data['phone'])) {
            // চেক করুন এই ফোন নম্বরটি অন্য কারও আছে কি না
            $existingPhone = $this->query()->where('phone', '=', $data['phone'])->where('id', '!=', $userId)->get();
            if (!empty($existingPhone)) {
                return ['success' => false, 'message' => 'This phone number is already taken!', 'status' => 409];
            }
            // সব ঠিক থাকলে আপডেট লিস্টে ফোন নম্বরটি যোগ করুন
            $updateFields['phone'] = $data['phone'];
        }

        // ৩. যদি ইউজার নতুন পাসওয়ার্ড সেট করতে চায়
        if (!empty($data['password'])) {
            // পাসওয়ার্ডটি এনক্রিপ্ট (Hash) করে আপডেট লিস্টে যোগ করুন
            $updateFields['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        }

        // ৪. যদি ইউজার কোনো ডেটাই না পাঠায় (ফাঁকা রিকোয়েস্ট)
        if (empty($updateFields)) {
            return ['success' => false, 'message' => 'No data provided to update!', 'status' => 400];
        }

        try {
            // ৫. ডাটাবেসে ইউজারের তথ্য আপডেট করা
            $this->query()->where('id', '=', $userId)->update($updateFields);

            return [
                'success' => true, 
                'message' => 'Profile updated successfully!', 
                'updated_data' => array_keys($updateFields), // কোন কোন ফিল্ড আপডেট হলো তার লিস্ট
                'status' => 200
            ];

        } catch (Exception $e) {
            // ডাটাবেসে কোনো এরর হলে
            return ['success' => false, 'message' => 'Database error: ' . $e->getMessage(), 'status' => 500];
        }
    }
}