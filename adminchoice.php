<?php session_start();?>
<?php
include("header.php")
?>
<style>

</style>
<link href="style/style.css" type="text/css" rel="stylesheet" />

<div id="adminsidemenu">
<ul>
<li> <a href="createcourse.php"> Create Course </a> </li>
<li> <a href="courses.php">Show Courses</a></li>
<li> <a href="quizsetting.php"> Create quiz</a> </li>
<li> <a href="useraddition.php"> Add User </a> </li>
<li> <a href="showresgistrations.php"> View Registrations</a> </li>
<li> <a href="createnews.php">Create News</a></li>
<li> <a href="createblog.php">Create Blog</a></li>
<li><a href="upload.php">Upload a file</a></li>

<li> <a href="">See quiz results</a> </li>
</ul>
</div> <!--closing of adminside menu-->
<?php
include("footer.php")
?>