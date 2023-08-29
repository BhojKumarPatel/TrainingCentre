<?php
include("header.php");
include("dbconnect.php");
echo("<table>");
echo("<form action='uploadfile.php' method='post' enctype='multipart/form-data'");
echo("<tr><td>Enter Name For File</td>");
echo("<td><input type='text' name='fname'</td></tr>");
echo("<tr><td>Browse</td>");
echo("<td><input type='file' name='upfile'</td></tr>");
echo("<tr><td><input type='submit' value='upload'</td>");
echo("<td><input type='reset' value='cancel'</td></tr>");
echo("<table>");



?>