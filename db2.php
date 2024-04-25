<?php
$con=mysqli_connect("localhost","root","","wbsedcl");

$ccc_code=$_POST['ccc_code'];
$consumer_id=$_POST['consumer_id'];
$inst_no=$_POST['inst_no'];
$name=$_POST['name'];
$address=$_POST['eaddress'];
$conn_date=$_POST['con_date'];
$base_class=$_POST['base_class'];
$conn_stat=$_POST['conn_stat'];
$conn_load=$_POST['conn_load'];
$meter_no=$_POST['meter_no'];
$reg_mob=$_POST['reg_mob'];
$email=$_POST['email'];
$outstanding=$_POST['outstanding'];

$sql="INSERT INTO `consumer_details`(`CCC_CODE`, `CON_ID`, `INST_NO`, `NAME`, `ADDRESS`, `DATE_OF_CO`, `BASE_CLASS`, `CONN_STAT`, `CONN_]LOAD`, `METER NO`, `REG_MOB_NO`, `EMAIL`,`OUTSTANDING`) VALUES ('$ccc_code','$consumer_id','$inst_no','$name','$address','$conn_date','$base_class','$conn_stat','$conn_load','$meter_no','$reg_mob','$email','$outstanding')";
$db2=mysqli_query($con,$sql);
echo"Submitted Sucessfully";

?>