<?php

/**
 * ক্লাস AuthMiddleware
 * * ইউজার অথরাইজড কি না তা চেক করে।
 * [বাংলা] 'token' কি-টি চেক করার আগে সেটি সেট করা আছে কি না তা যাচাই করা হয়েছে।
 */
class AuthMiddleware implements MiddlewareInterface
{
    public function handle(Request $request, callable $next)
    {
        // 'token' কি-টি থাকলে সেটি নেবে, না থাকলে null সেট করবে (এরর আসবে না)
        $data = $request->getBody();
        $token = $data['token'] ?? null;

        // টোকেন যদি সঠিক (১২৩) না হয়
        if ($token !== '123') {
            
            // এপিআই রিকোয়েস্টের জন্য JSON এরর
            if (strpos($request->getPath(), '/api') === 0) {
                $response = new Response();
                return $response->json([
                    'success' => false,
                    'error' => 'Unauthorized Access! Please provide a valid token.'
                ], 401);
            }

            // ওয়েব রিকোয়েস্টের জন্য মেসেজ
            return "<h1>প্রবেশ নিষেধ!</h1><p>আপনার কাছে সঠিক সিকিউরিটি টোকেন নেই।</p>";
        }

        // সব ঠিক থাকলে পরবর্তী মিডলওয়্যার বা কন্ট্রোলারে পাঠাবে
        return $next($request);
    }
}