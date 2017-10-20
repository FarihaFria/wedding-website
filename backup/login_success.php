<?php

session_start();
if(!isset( $_SESSION['myusername'] )) // if the user is not the same user that logged in 
{                            // it redirects to the login page
    header("location:userlogin.php");
}


?>

<html>
<body>
<a href="blog.html">About</a></li>
</body>
</html>