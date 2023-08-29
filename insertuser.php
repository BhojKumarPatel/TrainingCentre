<?php
include("header.php");
include("dbconnect.php");
$userid=$_REQUEST["txtid"];
$usertype=$_REQUEST["utype"];
$password=$_REQUEST["txtpass"];
$course=$_REQUEST["crsid"];
mysql_query("insert into user_detail(user_id,user_pass,user_type,course) values('$userid','$password','$usertype','$course')") or die ("query error");
header("location:useraddition.php?status=success");
?>
