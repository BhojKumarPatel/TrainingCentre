<style>
form
{
	margin-left:200px;
	margin-top:200px;
}
</style>
<?php
include("dbconnect.php");
include("header.php");

if(isset($_REQUEST["status"])==true)
{
	if($_REQUEST["status"]=="success")
	{
		echo("<div style='background-color:white;color:red;text-align:center'>");
		echo("NEW USER ADDED SUCESSFULLY");
		echo("</div>");		
	}
}

echo("<table>");
echo("<form action='insertuser.php' method=''");
echo("<tr height='30px'><td width='200px'>Enter userid</td>");
echo("<td> <input type='text' name='txtid'></tr>");
echo("<tr height='30px'><td width='200px'> Enter user type</td>");
echo("<td><select name='utype'>");
echo("<option value='0'>Select user type </option>");
echo("<option value='admin'>Admin </option>");
echo("<option value='user'>Student </option> </td></tr>");
echo("<tr height='30px'><td width='200px'>Enter user password</td>");
echo("<td> <input type='text' name='txtpass' value='sensible'></td></tr>");
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
echo("</select>");
echo("<tr><td><input type='submit' value='ADD'></td>");
echo("<td><input type='reset' value='CANCEL'></td>");
echo("</form>");
echo("</table>");
?>