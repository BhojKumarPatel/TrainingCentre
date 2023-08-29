<?php

include("header.php");
if(isset($_REQUEST["status"])==true)
{
	if($_REQUEST["status"]=="success")
	{
		echo("<div style='background-color:white;color:red;text-align:center'>");
		echo("<a href='courses.php' style='text-decoration:none;color:red'>NEW COURSE ADDED SUCESSFULLY</a>");
		echo("</div>");		
	}
}


echo("<form action='insertcourse.php' method='post'>");
echo("<table> <tr><td>");
echo("Enter Course Name </td>");
echo("<td><input type='text' name='c_name'></td>");
echo("<tr><td> Enter Fees </td>");
echo("<td><input type='text' name='c_fee'></td></tr>");
echo("<tr><td> Enter Course id</td>");
echo("<td><input type='text' name='c_id'></td></tr>");
echo("<tr><td><input type='submit' value='CREATE'></td>");
echo("<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type='reset' value='CANCEL'</td></tr></table></form>");
?>