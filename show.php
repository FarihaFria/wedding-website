<?php 

	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wedjourney";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	$sql = "select * from store";
		// die($sql);
	$res = $mysql_i->query($sql);

	while ($row = $res->fetch_assoc()) {
		
        echo "<img src='uploads/{$row['iname']}' /><br/>";
		echo  $row['name'];
    }

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <style>

   
   </style>
   </head>
   <body>
 </body>
 </html>
 

 