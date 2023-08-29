<style>
form
{
	max-width:450px;
	background-color:#9F3;
	margin-left:300px;
	margin-top:100px;
}
table
{
	padding:20px;
	margin-left:20px;
}
</style>
<?php
include("dbconnect.php");
include("header.php");
echo("<form action='insertregistration.php' method='post'>");
echo("<table><tr>");
echo("<td>Enter Your Name</td>");
echo("<td><input type='text' name='txtname'></td></tr>");
echo("<tr><td>Enter Your email</td>");
echo("<td><input type='text' name='txtemail'></td></tr>");
echo("<tr><td>Enter Your Mobile Number</td>");
echo("<td><input type='text' name='txtmob'></td></tr>");
$rsCrs=mysql_query("select course_id,course_name from course order by course_name");
echo("<tr><td>COURSE</td><td>");
echo("<select name='crsid'>");
echo("<option value='0'>Select Any Course </option>");
$rsCor=mysql_query("select course_id,course_name from course order by course_name");
while($row=mysql_fetch_array($rsCor))
{
	$x=$row["course_id"];
	echo("<option value='$x'>");
	echo($row["course_name"]);
    echo("</option>");
}
echo("<tr><td><input type='submit' value='REGISTER'></td>");
echo(" <td><input type='reset' value='CANCEL'></td></tr></table></form>");	
?>