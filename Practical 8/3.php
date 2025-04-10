<!DOCTYPE html>
<html>
<head>
    <title>Image Upload (Max 2MB)</title>
</head>
<body>

<h2>Upload Image (Max Size: 2MB)</h2>

<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <br><br>
    <input type="file" name="image">
    <br><br>
    <input type="submit" name="submit" value="Upload">
</form>

<?php
if (isset($_POST['submit'])) {
    // Directory to save file
    $target_dir = "./";
    
    // File details
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $file_size = $_FILES["image"]["size"];
    $check = getimagesize($_FILES["image"]["tmp_name"]);

    // Validate if image
    if ($check === false) {
        echo "<p style='color:red;'>Error: File is not an image.</p>";
    } elseif ($file_size > 2 * 1024 * 1024) {
        echo "<p style='color:red;'>Error: File is larger than 2MB.</p>";
    } elseif (!in_array($file_type, ["jpg", "jpeg", "png", "gif"])) {
        echo "<p style='color:red;'>Error: Only JPG, JPEG, PNG, GIF files are allowed.</p>";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "<p style='color:green;'>Success: File uploaded.</p>";
            echo "<img src='$target_file' width='200'>";
        } else {
            echo "<p style='color:red;'>Error: Failed to upload file.</p>";
        }
    }
}
?>

</body>
</html>