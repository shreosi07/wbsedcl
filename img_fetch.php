<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wbsedcl";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$filename = $_GET['filename'];

$sql = "SELECT image_data FROM complain WHERE filename = '$filename'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $imageData = $row['image_data'];

    $image = imagecreatefromstring($imageData);

    // Generate the image with any modifications or overlays
    // For example, you can add text, draw shapes, or apply filters

    header("Content-Type: image/jpeg"); // Adjust the content type based on your image type

    imagejpeg($image);
    imagedestroy($image);
} else {
    echo "Image not found.";
}

$conn->close();
?>