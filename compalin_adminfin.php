<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
        }
 table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100px;
            max-height: 100px;
        }

        .download-btn {
            padding: 6px 12px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Admin Page</h1>
    <table>
        <tr>
            <th>Consumer Name</th>
            <th>Consumer ID</th>
            <th>Phone No.</th>
            <th>Address</th>
            <th>Image</th>
            <th>Reason</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wbsedcl";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM complain";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . (isset($row['consumer_Name']) ? $row['consumer_Name'] : '') . "</td>";
                echo "<td>" . (isset($row['consumer_id']) ? $row['consumer_id'] : '') . "</td>";
                echo "<td>" . (isset($row['ph_no']) ? $row['ph_no'] : '') . "</td>";
                echo "<td>" . (isset($row['address']) ? $row['address'] : '') . "</td>";
                echo "<td><img src='data:image/jpeg;base64," . (isset($row['image_data']) ? base64_encode($row['image_data']) : '') . "' alt='Image'></td>";
                echo "<td>" . (isset($row['reason']) ? $row['reason'] : '') . "</td>";
                echo "<td>" . (isset($row['date']) ? date('d-m-Y', strtotime($row['date'])) : '') . "</td>";
                //echo "<td><a href='download.php?id=" . $row['id'] . "' class='download-btn'>Download</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No data found.</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>