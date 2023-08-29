<?php
$a=$_REQUEST["fname"];
$e=$_FILES["upfile"];

require_once("dbConnect.php");

if(isset($_FILES["upfile"])==true)
{
	move_uploaded_file($e["tmp_name"],".\\collection\\".$e["name"]);

}

mysql_query("insert into files(file_name,file) values('$a','".$e["name"]."')") or die("query error");

header("location:upload.php?status=success");

?>