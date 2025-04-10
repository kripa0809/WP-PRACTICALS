<?php
// Set a cookie named "user" with value "Gautam", expires in 1 hour
setcookie("user", "Jhon", time() + 3600, "/");

echo "<h3>Cookie Example</h3>";

// Check if cookie is set
if(isset($_COOKIE["user"])) {
    echo "Cookie 'user' is set!<br>";
    echo "Value is: " . $_COOKIE["user"];
} else {
    echo "Cookie 'user' is not set!";
}
?>