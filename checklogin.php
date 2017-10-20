
<?php

include "connection.php";


$myusername=$_POST['name']; 
$mypassword=$_POST['password']; 
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM user_login WHERE name='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

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







/*
session_start();
if(isset($_POST['submit']))
{
    $connect=mysql_connect("localhost","root","");
        mysql_select_db("wedjourney");
    $username=mysql_real_escape_string($_POST['name']);
    $password=mysql_real_escape_string($_POST['password']);


    if($username && $password){$connect=mysql_connect("localhost","root","");
        mysql_select_db("wedjourney");
        $login=mysql_query("SELECT * FROM user_login WHERE username='$name'");
        
        while($log=mysql_fetch_assoc($login))
        {
            $dbusername=$log['name'];
            $dbpassword=$log['password'];
            
        }
if($username==$dbusername && $password==$dbpassword)
{

$_SESSION['name']=$dbusername;
$_SESSION['password']=$dbpassword;

    echo "Login Successfully";
 
}
else
{
echo "Please login";
}


*/
        




?>
