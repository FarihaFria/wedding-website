<?php
session_start();
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wedjourney";
$conn = new mysqli($servername, $username, $password, $dbname);
*/

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="wedjourney"; // Database name  

$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


?>