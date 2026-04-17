<?php

class AuthMiddleware
{
    /**
     * রাউটে ঢোকার আগে এই মেথডটি চেক করবে ইউজারের টোকেন ভ্যালিড কি না
     */
    public function handle(Request $request, callable $next)
    {
        // ১. রিকোয়েস্ট ক্লাস থেকে Authorization হেডার বের করা (আপনার কাস্টম মেথড ব্যবহার করে)
        $authHeader = $request->getHeader('Authorization', '');

        // ২. চেক করা টোকেনটি "Bearer <token>" ফরম্যাটে আছে কি না
        if (preg_match('/Bearer\s(\S+)/', $authHeader, $matches)) {
            $token = $matches[1];
            
            try {
                // ৩. JWT সার্ভিস ইনিশিয়ালাইজ করে টোকেন ভেরিফাই করা
                $jwtService = new JWTService(); 
                $decodedPayload = $jwtService->verifyToken($token);

                // ৪. 🔴 পরিবর্তন: সরাসরি আপনার Request ক্লাসের ডাইনামিক মেথড ব্যবহার করে ডেটা স্টোর করা হলো
                $request->setLocal('user', $decodedPayload);
                
                // ৫. ইউজারকে কন্ট্রোলারে (পরবর্তী ধাপে) যেতে দেওয়া
                return $next($request);

            } catch (Exception $e) {
                // টোকেন ভুল বা মেয়াদোত্তীর্ণ হলে
                $this->unauthorized($e->getMessage());
            }
        }

        // হেডারে টোকেন না থাকলে
        $this->unauthorized('Token is missing or Invalid format!');
    }

    /**
     * আনঅথোরাইজড ইউজারকে ব্লক করার মেথড
     */
    private function unauthorized($message)
    {
        http_response_code(401);
        echo json_encode([
            'success' => false, 
            'message' => 'Unauthorized Access! ' . $message
        ]);
        exit;
    }
}