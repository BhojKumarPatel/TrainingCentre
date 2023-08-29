<?php
include("header.php");
if(session_id()=="")
session_start(); 

include("dbConnect.php");

$count=1;
$uname=$_SESSION["uname"];
$usr=$_SESSION["utype"];
if($usr=="user")
{
echo("<table>");
$rsquiz=mysql_query("select * from quizquestions");

while($row=mysql_fetch_array("$rsquiz"))
{
	 
	$ques=$row["question"];
	$a=$row["option_a"];
	$b=$row["option_b"];
	$c=$row["option_c"];
	$d=$row["option_d"];
	$ans=$row["question_answer"];
	echo("<th>$ques</th>");
	echo("<tr><td>A. <input type='radio' name='ans' value='$a'></td></tr>");
	echo("<tr><td>B. <input type='radio' name='ans'  value='$b'</th> </tr>");
	echo("<tr><td>C. <input type='radio' name='ans'  value='$c'</th> </tr>");
	echo("<tr><td>D. <input type='radio' name='ans'  value='$d'</th> </tr>");
	
	
	}}
echo("</table>");
?>