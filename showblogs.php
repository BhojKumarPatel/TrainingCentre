<style>
*
{
	padding:0px;
	margin:0px;
}
table
{
	text-align:justify;
	width:80%;
	padding-left:20px;
	

}
table tr 
{
	padding-left:20px;
}
</style>
<?php
include("header.php");
include("dbConnect.php");
$rsblog=mysql_query("select blog_title,blog_content,blog_date from blogs order by blog_date");
echo("<table>");


while($row=mysql_fetch_array($rsblog))
{
	echo("<tr><td></br></td></tr>");
	echo("<tr  ><td>date:");
	echo($row['blog_date']);
    echo("</td></tr>");
	echo("</tr><tr aling='justify'><td> <b><u>");
	echo($row['blog_title']);
	echo("</td></tr></b></u>");
	 
	echo("<tr align='justify' ><td text-aling:center>");
	echo($row["blog_content"]);
	echo("</td></tr>");

}
echo("</table>");
?>