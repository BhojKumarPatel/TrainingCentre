<style>
table
{
	margin-left:250px;
	margin-top:100px;
}
</style>
<?php
include("header.php");
include("dbConnect.php");
$rsCrs=mysql_query("select r_id,r_name,r_email,r_mob,r_date from registrations order by r_id");
echo("<table border='1' bordercolor='#330099'>");
echo("<th height='100px'>Registration id</th>");
echo("<th height='100px'>Name</th>");echo("<th height='100px'>Email</th>");echo("<th height='100px'>Mobile Number</th>");echo("<th height='100px'>Registraion Date</th>");

while($row=mysql_fetch_array($rsCrs))
{
	echo("<tr height='50px' align='center'><td width='200px' text-aling:center>");
	echo($row["r_id"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["r_name"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["r_email"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["r_mob"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["r_date"]);
	echo("</td></tr>");
	
	
}
echo("</table>");
?>