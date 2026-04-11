<?php

/**
 * ইন্টারফেস MiddlewareInterface
 * * ফ্রেমওয়ার্কের প্রতিটি মিডলওয়্যারকে এই ইন্টারফেসটি ইমপ্লিমেন্ট করতে হবে।
 */
interface MiddlewareInterface
{
    /**
     * হ্যান্ডেল মেথড: এখানেই লজিক থাকবে (যেমন: লগইন চেক)।
     * * @param Request $request বর্তমান রিকোয়েস্ট অবজেক্ট
     * @param callable $next পরবর্তী মিডলওয়্যার বা কন্ট্রোলারের ফাংশন
     */
    public function handle(Request $request, callable $next);
}