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
$rsnews=mysql_query("select news_head,news_content,news_date from news order by news_date");
echo("<table>");


while($row=mysql_fetch_array($rsnews))
{
	echo("<tr><td></br></td></tr>");
	echo("<tr  ><td>date:");
	echo($row['news_date']);
    echo("</td></tr>");
	echo("</tr><tr aling='justify'><td> <b><u>");
	echo($row['news_head']);
	echo("</td></tr></b></u>");
	 
	echo("<tr align='justify' ><td text-aling:center>");
	echo($row["news_content"]);
	echo("</td></tr>");

}
echo("</table>");
?>