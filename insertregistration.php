<?php
include("header.php");
include("dbconnect.php");
$name=$_REQUEST["txtname"];
$email=$_REQUEST["txtemail"];
$mob=$_REQUEST["txtmob"];
$courseid=$_REQUEST["crsid"];
mysql_query("insert into registrations(r_name,r_email,r_mob,r_course,r_date) values('$name','$email','$mob','$courseid',curdate())") or die ("query error");
echo("DATA INSERTED");
?>
