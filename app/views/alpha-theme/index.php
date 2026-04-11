<?php

// Check if user is logged in
if (isset($_SESSION['userId'])) {
    echo "<h2>Welcome, " . htmlspecialchars($_SESSION['userAltName']) . "!</h2>";
    echo "<p>Your role: " . htmlspecialchars($_SESSION['userRole']) . "</p>";
    echo '<a href="'.ROOT.'/logout">Logout</a>';
} else {
    echo "<h2>Please log in</h2>";
    echo '<a href="'.ROOT.'/login">Login</a>';
}
?>
