<?php
include("header.php");
include("dbconnect.php");
$courseid=$_REQUEST["c_id"];
$coursename=$_REQUEST["c_name"];
$coursefees=$_REQUEST["c_fee"];
mysql_query("insert into course(course_name,course_id,course_fees) values('$coursename','$courseid','$coursefees')") or die ("query error");
header("location:createcourse.php?status=success");
?>
