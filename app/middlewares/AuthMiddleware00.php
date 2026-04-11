<?php

class AuthMiddleware implements MiddlewareInterface
{
    public function handle($request, $next)
    {
        // Check if the session is not set
        if (!isset($_SESSION['userAltName'])) {
            // If cookies are set, restore session from cookies
            if (isset($_COOKIE['userAltName'])) {
                $_SESSION['userAltName'] = $_COOKIE['userAltName'];
                $_SESSION['userId'] = $_COOKIE['userId'];
                $_SESSION['userRole'] = $_COOKIE['userRole'];
            } else {
                // If no session or cookies, redirect to login
                header('Location: ' . ROOT . '/login');
                exit();
            }
        }

        // Pass the user data to the next middleware/controller
        return $next($request);
    }
}
