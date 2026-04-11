<?php
class SecondMiddleware implements MiddlewareInterface {
    public function handle(Request $request, callable $next) {
        echo "<li>[২] Second Middleware পার হলাম...</li>";
        return $next($request);
    }
}