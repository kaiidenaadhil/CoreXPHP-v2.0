<?php
class ThirdMiddleware implements MiddlewareInterface {
    public function handle(Request $request, callable $next) {
        echo "<li>[৩] Third Middleware পার হলাম...</li>";
        return $next($request);
    }
}