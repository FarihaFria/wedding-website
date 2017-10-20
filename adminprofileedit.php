<?php
include('config.php');
?>
<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <title>Edit Users Information</title>
    </head>
    <body>
   
<?php
//We check if the user is logged
if(isset($_SESSION['myusername']))
{
	//We check if the form has been sent
	if(isset($_POST['username'], $_POST['password'], $_POST['sex'], $_POST['email'], $_POST['age']))
	{
		//We remove slashes depending on the configuration
		if(get_magic_quotes_gpc())
		{
			$_POST['username'] = stripslashes($_POST['username']);
			$_POST['password'] = stripslashes($_POST['password']);
			$_POST['sex'] = stripslashes($_POST['sex']);
			$_POST['email'] = stripslashes($_POST['email']);
			$_POST['avatar'] = stripslashes($_POST['age']);
		}
		//We check if the two passwords are identical
		if($_POST['password']==$_POST['password'])
		{
			//We check if the password has 0 or more characters
			if(strlen($_POST['password'])>=0)
			{
				//We check if the email form is valid
				//if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$_POST['email']))
				
					//We protect the variables
					$username = mysql_real_escape_string($_POST['name']);
					$password = mysql_real_escape_string($_POST['password']);
					$email = mysql_real_escape_string($_POST['email']);
					$avatar = mysql_real_escape_string($_POST['age']);
					//We check if there is no other user using the same username
					$dn = mysql_fetch_array(mysql_query('select count(*) as nb from user_login where name="'.$username.'"'));
					//We check if the username changed and if it is available
					if($dn['nb']==0 or $_POST['name']==$_SESSION['myusername'])
					{
						//We edit the user informations
						if(mysql_query('update users set name="'.$username.'", password="'.$password.'", email="'.$email.'", age="'.$age.'" where password="'.mysql_real_escape_string($_SESSION['mypassword']).'"'))
						{
							//We dont display the form
							$form = false;
							//We delete the old sessions so the user need to log again
							unset($_SESSION['myusername'], $_SESSION['mypassword']);
?>
<div class="message">Your informations have successfuly been updated. You need to log again.<br />
<!--<a href="connexion.php">Log in</a>--></div>
<?php
						}
						else
						{
							//Otherwise, we say that an error occured
							$form = true;
							$message = 'An error occurred while updating your informations.';
						}
					}
					else
					{
						//Otherwise, we say the username is not available
						$form = true;
						$message = 'The username you want to use is not available, please choose another one.';
					}
				
				//else
				//{
					//Otherwise, we say the email is not valid
				//	$form = true;
				//	$message = 'The email you entered is not valid.';
				//}
			}
			else
			{
				//Otherwise, we say the password is too short
				$form = true;
				$message = 'Your password must contain at least 6 characters.';
			}
		}
		else
		{
			//Otherwise, we say the passwords are not identical
			$form = true;
			$message = 'The passwords you entered are not identical.';
		}
	}
	else
	{
		$form = true;
	}
	if($form)
	{
		//We display a message if necessary
		if(isset($message))
		{
			echo '<strong>'.$message.'</strong>';
		}
		//If the form has already been sent, we display the same values
		if(isset($_POST['name'],$_POST['password'],$_POST['email']))
		{
			$pseudo = htmlentities($_POST['name'], ENT_QUOTES, 'UTF-8');
			if($_POST['password']==$_POST['password'])
			{
				$password = htmlentities($_POST['password'], ENT_QUOTES, 'UTF-8');
			}
			else
			{
				$password = '';
			}
			$email = htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');
			$avatar = htmlentities($_POST['age'], ENT_QUOTES, 'UTF-8');
		}
		else
		{
			//otherwise, we display the values of the database
			$dnn = mysql_fetch_array(mysql_query('select name,password,email,age from user_login where name="'.$_SESSION['myusername'].'"'));
			$username = htmlentities($dnn['name'], ENT_QUOTES, 'UTF-8');
			$password = htmlentities($dnn['password'], ENT_QUOTES, 'UTF-8');
			$email = htmlentities($dnn['email'], ENT_QUOTES, 'UTF-8');
			$avatar = htmlentities($dnn['age'], ENT_QUOTES, 'UTF-8');
		}
		//We display the form
?>
<div class="content">
    <form action="edit_infos.php" method="post">
        You can edit your informations:<br />
        <div class="center">
            <label for="username">Username</label></br><input type="text" name="name" id="name" value="<?php echo $username; ?>" /><br />
            <label for="password">Password<span class="small">(6 characters min.)</span></label></br><input type="password" name="password" id="password" value="<?php echo $password; ?>" /><br />
            <label for="passverif">Password<span class="small">(verification)</span></label></br><input type="password" name="password" id="password" value="<?php echo $password; ?>" /><br />
            <label for="email">Email</label></br><input type="text" name="email" id="email" value="<?php echo $email; ?>" /><br />
            <label for="age">Sex<span class="small">(optional)</span></label></br><input type="text" name="age" id="age" value="<?php echo $avatar; ?>" /><br />
            <input type="submit" value="Send" />
        </div>
    </form>
</div>
<?php
	}
}
else
{
?>
<a href="list of users.php">List of users</a></div>
<?php
}
?>
		<div class="foot"><a href="<?php echo $url_home; ?>">Go Home</a></div>
	</body>
</html>