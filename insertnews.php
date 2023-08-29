<?php
include("dbconnect.php");
$heading=$_REQUEST["head"];
$news=$_REQUEST["newscontent"];
mysql_query("insert into news (news_head,news_content,news_date) values('$heading','$news',now())") or die("querry error");
header("location:createnews.php?status=success");

?>