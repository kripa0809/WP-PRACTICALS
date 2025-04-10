<?php
// Start the session
session_start();

// Set session variable
$_SESSION["username"] = "Rahul";

echo "<h3>Session Example</h3>";
echo "Session variable 'username' is set to: " . $_SESSION["username"];
?>