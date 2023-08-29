<?php
include("header.php");
if(isset($_REQUEST["status"])==true)
{
	if($_REQUEST["status"]=="success")
	{
		echo("<div style='background-color:white;color:red;text-align:center'>");
		echo("<a href='shownews.php' style='text-decoration:none;color:red'>NEWS SPREADED SUCESSFULLY</a>");
		echo("</div>");		
	}
}

echo("<table>");
echo("<form action='insertnews.php' method='post'>");
echo("<tr><td>Headline</td>");
echo("<td><input type='text' name='head'></td></tr>");
echo("<tr><td>News content</td>");
echo("<td><input type='text' name='newscontent'></td></tr>");
echo("<tr><td><input type='submit' value='spread'>");
echo("<td><input type='reset' value='cancel'></td></tr></table>");
echo("</form>");
echo("</br>");echo("</br>");echo("</br>");echo("</br>");echo("</br>");
echo("News is the best media to update your customes.");
echo("</br>");echo("</br>");echo("</br>");echo("</br>");echo("</br>");echo("</br>");echo("</br>");echo("</br>");echo("</br>");echo("</br>");
include("footer.php");
?>