<!DOCTYPE html>
<html>
<body>

<h3>Check if Number is Odd or Even</h3>
<form method="post">
    Enter Number: <input type="number" name="num">
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];
    if ($num % 2 == 0) {
        echo "$num is an Even Number.";
    } else {
        echo "$num is an Odd Number.";
    }
}
?>

</body>
</html>