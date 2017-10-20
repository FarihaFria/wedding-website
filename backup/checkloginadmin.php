
<?php

include "connection.php";


// username and password sent from form 
$myusername=$_POST['name']; 
$mypassword=$_POST['password']; 




$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM admin WHERE name='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['myusername']= "myusername";
$_SESSION['mypassword']= "mypassword";    
header("location:login_success_admin.php");
}
else {
echo "Wrong Username or Password";
}


     




?>
