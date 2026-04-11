<?php
class FirstMiddleware implements MiddlewareInterface {
    public function handle(Request $request, callable $next) {
        echo "<li>[১] First Middleware পার হলাম...</li>";
        return $next($request);
    }
}