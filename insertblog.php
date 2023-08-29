<?php
include("dbconnect.php");
$heading=$_REQUEST["title"];
$news=$_REQUEST["blogcontent"];
mysql_query("insert into blogs (blog_title,blog_content,blog_date) values('$heading','$news',now())") or die("querry error");
header("location:createblog.php?status=success");

?>