<?php
include("header.php");
if(isset($_REQUEST["status"])==true)
{
	if($_REQUEST["status"]=="success")
	{
		echo("<div style='background-color:white;text-align:center'>");
		echo("<a href='showblogs.php' style='text-decoration:none;color:red'>BLOG PUBLISHED SUCESSFULLY</a>");
		echo("</div>");		
	}
}

echo("<table>");
echo("<form action='insertblog.php' method='post'>");
echo("<tr><td>Title</td>");
echo("<td><input type='text' name='title'></td></tr>");
echo("<tr><td>Blog content</td>");
echo("<td><input type='text' name='blogcontent'></td></tr>");
echo("<tr><td><input type='submit' value='Publish'>");
echo("<td><input type='reset' value='cancel'></td></tr></table>");
echo("</form>");
echo("</br>");echo("</br>");echo("</br>");echo("</br>");echo("</br>");

echo("</br>");echo("</br>");echo("</br>");echo("</br>");echo("</br>");echo("</br>");echo("</br>");echo("</br>");echo("</br>");echo("</br>");
include("footer.php");
?>