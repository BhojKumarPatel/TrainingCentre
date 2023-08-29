<?php session_start(); ?>
<?php

$a=$_REQUEST["txtuserid"];
$b=$_REQUEST["txtpass"];
require_once("dbConnect.php");


$rsuser=mysql_query("select * from user_detail where user_id='$a'") or die("query error");

if(mysql_num_rows($rsuser)==0)
{
	echo("Invalid UserID or password");
}
else
{
	$row=mysql_fetch_array($rsuser);
	if($row["user_pass"]==$b)
	{
		 $_SESSION['uname']=$a;
		 
	     if($row["user_type"]=="admin")
		 {
		 $_SESSION['utype']="admin";
			 header("location:adminchoice.php");
		 }
		else if($row["user_type"]=="user")
		{
					 $_SESSION['utype']="user";
			header("location:userchoice.php");
		}
	}
	else
	{
		echo("Invalid Userid or Password");
	}
}
?>