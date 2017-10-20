<!DOCTYPE html>
<html>

<?php
include 'connection.php';
/*
$myusername=$_POST['name']; 
$mypassword=$_POST['password']; 
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
*/
if(isset($_POST['login']))
{
$name=$_POST['name']; 
$password=$_POST['password']; 
$sql="SELECT * FROM user_login WHERE name='$name' and password='$password'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['name']= "name";
$_SESSION['password']= "password";    
header("location:userdetailsagain.php");
}
else {
echo "Wrong Username or Password";
}
}
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="s" content="c">

    <title>user login</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS --> 
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS 
    <link href="css/plugins/morris.css" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="css/changepass.css" rel="stylesheet">

</head>





<body>

<aside class="">   
</head>
<body>
<table cellspacing='5' align='center' >
</table>
<h1 id=login>Users's Login<h1>
<form action='userdetailsagain.php' method='post'>
<table cellspacing='5' align='center' >

<tr><td></td><td><input type='submit' name='login' value='login'/></td></tr>
</form>

</table>
</div>
</aside>





</body>
</html>





