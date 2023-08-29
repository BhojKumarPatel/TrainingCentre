<html>
<head>
<link href="style/formsetting.css" rel="stylesheet" type="text/css">
<?php
include("header.php");
?>

</head>

<body>

<form action="checkLogin.php" method="post" name="f1">
<table cellpadding="0" cellspacing="0" height="200px" width="700px">
<tr><td colspan="2" rowspan="3" bgcolor="#0000CC" align="center" bordercolor="#990000"> <b>Enter your UserID<div> and Password</div></b></td>
<td bgcolor="#0033CC">Enter your id </td><td bgcolor="#0033CC"> <input type="text" name="txtuserid" placeholder="email"/></td></tr>
<tr bgcolor="#0033CC"><td>Enter your password </td><td><input type="password" name="txtpass"  placeholder='password'/></td></tr>
<tr bgcolor="#0033CC"><td><input type="submit" value="LOGIN" onClick="check()"/></td><td><input type="reset" value="CANCEL" /></td></tr>
</table>
</form>
</body>
</html>
