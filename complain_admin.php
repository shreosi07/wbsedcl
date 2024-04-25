<html>
    <title>Complain Admin</title>
<body>
<?php
$connect = mysqli_connect("localhost","root","","wbsedcl");
if ($connect === false) {
    die("Opps Unable to connect " . mysqli_connect_error());
}
$sql = "SELECT * FROM `complain`";
if ($result = mysqli_query($connect, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo '<table align="center" border="1" cellspacing="2" cellpadding="2">';
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Consumer Name</th>";
        echo "<th>Consumer ID</th>";
        // echo"<th></th>";
        
        echo "<th>Phone No.</th>";
        echo "<th> Date</th>";
        //echo "<th>Image</th>";
        echo "<th>Address</th>";
        echo "<th>Reasons</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['consumer_Name'] . "</td>";
            echo "<td>" . $row['consumer_id'] . "</td>";
            echo "<td>" . $row['ph_no'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
           // echo "<td><img src='data:image/jpeg;base64," . (isset($row['image_data']) ? base64_encode($row['image_data']) : '') . "' alt='Image'></td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['reason'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else {
        echo "No records found";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}
mysqli_close($connect);
?>

</body>
</html>