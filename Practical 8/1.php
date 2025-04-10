<?php
// Creating an associative array
$student = array(
    "name" => "Rahul",
    "age" => 21,
    "course" => "Computer Engineering",
    "city" => "Ahmedabad"
);

// Accessing values
echo "<h1>Student Details</h1>";
echo "Name: " . $student["name"] . "<br>";
echo "Age: " . $student["age"] . "<br>";
echo "Course: " . $student["course"] . "<br>";
echo "City: " . $student["city"] . "<br>";

// Looping through the array
echo "<h2>All details using foreach loop:</h2>";
foreach ($student as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br>";
}
?>