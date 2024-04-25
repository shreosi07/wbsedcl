<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wbsedcl";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$consumer_Name = $_POST['consumer_name'];
$consumer_id = $_POST['consumer'];
$ph_no = $_POST['ph_no'];
$date=$_POST['date'];
$address = $_POST['address'];
$reason = $_POST['reason'];

if (isset($_FILES['fileToUpload'])) {
    $file = $_FILES['fileToUpload'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileType = $file['type'];

    $data = file_get_contents($fileTmpName);
    $data = mysqli_real_escape_string($conn, $data);

    $sql = "INSERT INTO complain (filename, image_data,consumer_Name,consumer_id, ph_no, date, address, reason) VALUES ('$fileName', '$data','$consumer_Name','$consumer_id', '$ph_no', '$date', '$address', '$reason')";

    if ($conn->query($sql) === TRUE) {
         echo "<h2><center>Complain Successfully Registered.</center></h2>";
    } else {
        echo "<h2><center>Not Submited.<br>Register Again.</center></h2>" . $conn->error;
    }
    
}

$conn->close();
?>
<center>
    <button onclick="history.back()">Go Back</button>
</center>
</html>

