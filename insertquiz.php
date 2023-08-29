<?php session_start(); ?>
<?php
include("header.php");
include("dbconnect.php");
$d=$_SESSION["cor"];
$n=$_SESSION["noq"];
for($i=1;$i<=$n;$i++)
{
	$question=$_REQUEST["q$i"];
	$option_a=$_REQUEST["a$i"];
	$option_b=$_REQUEST["b$i"];
	$option_c=$_REQUEST["c$i"];
	$option_d=$_REQUEST["d$i"];
	$answer=$_REQUEST["ans$i"];
	mysql_query("insert into quizquestions(question,option_a,option_b,option_c,option_d,question_answer,courseid) values('$question','$option_a','$option_b','$option_c','$option_d','$answer','$d')") or die ("query error");
}
header("location:quizsetting.php?status=success");
?>