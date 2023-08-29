<?php session_start();
include("dbConnect.php");
include("header.php");
?>
<html>
<body>
<?php

$_SESSION["noq"]=$_REQUEST["noofquestions"];
$_SESSION["cor"]=$_REQUEST["crsid"];
$n=$_SESSION["noq"];
for($i=1;$i<=$n;$i++)
{

echo("<form action='insertquiz.php' method='get'>");
echo("<table>");
echo("<tr><td>Enter question &nbsp;$i </td><td><input type='text' name='q$i' /></td><td>A. <input type='text' name='a$i' /></td><td>B. <input type='text' name='b$i' /></td><td>C. <input type='text' name='c$i' /></td><td>D. <input type='text' name='d$i'/></td><td> Ans <input type'text' name='ans$i'></td></tr></table>");
}
?>
<input type='submit' value='SAVE' />
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;

<input type='reset' value='cancel' />
<?php include("footer.php") ?>
</body>
</html>