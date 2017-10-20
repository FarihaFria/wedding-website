<?php
/*
session_start();
if ( isset( $_SESSION['user'] ) )

if(!session_is_registered(myusername)){
header("location:userlogin.php");
// }
*/
session_start();
if(!isset( $_SESSION['myusername'] )) // if the user is not the same user that logged in 
{                            // it redirects to the login page
    header("location:adminlogin.php");
}




?>

<html>
<body>
<a href="list of users.php">User List</a></li>
</body>
</html>