<?php session_start(); ?>
<?php
include("header.php");
include("dbConnect.php");

echo("<h2>Courses We Offer</h2>");


$rsCrs=mysql_query("select course_id,course_name,course_fees from course order by course_id");
echo("<table border='1' bordercolor='#330099'>");
echo("<th height='100px'>COURSE ID</th>");
echo("<th height='100px'>COURSE NAME</th>");echo("<th height='100px'>COURSE FEES</th>");
echo("<th>REGISTER</th>");

while($row=mysql_fetch_array($rsCrs))
{
	echo("<tr height='50px' align='center'><td width='200px' text-aling:center>");
	echo($row["course_id"]);
	$x=$row["course_id"];
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["course_name"]);
	echo("</td>");
	echo("<td width='200px'>");
	echo($row["course_fees"]);
	echo("</td>");
	echo("<td width='200px'><a href='registration.php'>Register</a></td>");
		if(isset($_SESSION["uname"])==true)
{
}

}
echo("</table>");

?>