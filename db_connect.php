<?php
$mysql_i = new mysqli("localhost","root","","wedjourney");
if($mysql_i->connect_errno){

	echo "Failed to connect to MySQL: (" . $mysql_i->connect_errno.") ";
}

?>