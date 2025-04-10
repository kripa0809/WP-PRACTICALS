<!DOCTYPE html>
<html>
<body>

<h3>Check if Entered Year is a Leap Year</h3>
<form method="post">
    Enter Year: <input type="number" name="year">
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = $_POST["year"];
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo "$year is a Leap Year.";
    } else {
        echo "$year is Not a Leap Year.";
    }
}
?>

</body>
</html>