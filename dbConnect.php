<?php
$con=@mysql_connect("127.0.0.1","root","") or die("connection error");

@mysql_select_db("sensible",$con);

?>