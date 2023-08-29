<?php
include("header.php");
?>
<?php

if(isset($_REQUEST["status"])==true)
{
	if($_REQUEST["status"]=="success")
	{
		echo("<div style='background-color:white;color:red;text-align:center'>");
		echo("Quiz Created Successfully");
		echo("</div>");		
	}
}
?>
<form action="createquiz.php" method="post">
<table>
<tr><td>COURSE</td><td>
<select name='crsid'>
<option value='0'>Select Any Course </option>
<?php
include("dbConnect.php");
$rsCor=mysql_query("select course_id,course_name from course order by course_name");
while($row=mysql_fetch_array($rsCor))
{
	$x=$row["course_id"];
	echo("<option value='$x'>");
	echo($row["course_name"]);
    echo("</option>");
}
?>
</select></td></tr>
<tr>
<td>Enter Number of questions </td><td><input type="text" name="noofquestions" /></td></tr>
<tr><td><input type="submit" value="OK"></td><td><input type="reset" value="CANCEL"></td></td></tr></table>
</form>