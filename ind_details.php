<html>
    <head>
    <title>Consumer Details</title>
    </head>
<body>
<?php
$connect = mysqli_connect("localhost","root","","wbsedcl");
if ($connect === false) {
    die("Opps Unable to connect " . mysqli_connect_error());
}
$csid=$_POST['consumer'];
$phn_no=$_POST['ph_no'];
$sql = "SELECT * FROM `consumer_details` WHERE CON_ID=$csid AND REG_MOB_NO=$phn_no";
if ($result = mysqli_query($connect, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo '<table border="1" cellspacing="2" cellpadding="2">';
        echo "<tr>";
        echo "<th>CCC Code</th>";
        echo "<th>Consumer ID</th>";
        echo "<th>Installation No</th>";
        echo "<th>Name</th>";
        echo "<th>Address</th>";
        echo "<th>Connection Date</th>";
        echo "<th>Base Class</th>";
        echo "<th>Connection Status</th>";
        echo "<th>Connection Load</th>";
        echo "<th>Meter No</th>";
        echo "<th>Registered Mobile  No</th>";
        echo "<th>Email</th>";
        echo "<th>Outstanding</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['CCC_CODE'] . "</td>";
            echo "<td>" . $row['CON_ID'] . "</td>";
            echo "<td>" . $row['INST_NO'] . "</td>";
            echo "<td>" . $row['NAME'] . "</td>";
            echo "<td>" . $row['ADDRESS'] . "</td>";
            echo "<td>" . $row['DATE_OF_CO'] . "</td>";
            echo "<td>" . $row['BASE_CLASS'] . "</td>";
            echo "<td>" . $row['CONN_STAT'] . "</td>";
            echo "<td>" . $row['CONN_LOAD'] . "</td>";
            echo "<td>" . $row['METER_NO'] . "</td>";
            echo "<td>" . $row['REG_MOB_NO'] . "</td>";
            echo "<td>" . $row['EMAIL'] . "</td>";
            echo "<td>" . $row['OUTSTANDING'] . "</td>";
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