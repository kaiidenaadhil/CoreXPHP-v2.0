<?php

class CheckMiddleware
{
    public function handle(Request $request, callable $next)
    {
        // Require ?pass=true in the URL to proceed
        if (!isset($_GET['pass']) || $_GET['pass'] !== 'true') {
            http_response_code(403);
            header('Content-Type: application/json');
            echo json_encode(['error' => 'Blocked by CheckMiddleware! Add ?pass=true to URL']);
            exit;
        }

        return $next($request);
    }
}