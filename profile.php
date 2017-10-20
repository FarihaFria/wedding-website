<?php
include('connection.php');
//$myusername=$_POST['name']; 
//$mypassword=$_POST['password'];
?>
<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <title>Profile of an user</title>
    </head>
    <body>
    	<div class="header">
        
        <div class="content">
<?php



//We check if the users ID is defined
if(isset($_GET['id']))
{
	$id = intval($_GET['id']);
	//We check if the user exists
	$dn = mysql_query('select name,email,age,sex,fname,address,religion,profession,country from user_login where id="'.$id.'"');
	if(mysql_num_rows($dn)>0)
	{
		$dnn = mysql_fetch_array($dn);
		//We display the user datas
?>
This is the profile of "<?php echo htmlentities($dnn['name']); ?>" :
<table style="width:500px;">
	<tr>
    	<td>
    	<?php
 /*   	
if($dnn['avatar']!='')
{
	echo '<img src="'.htmlentities($dnn['avatar'], ENT_QUOTES, 'UTF-8').'" alt="Avatar" style="max-width:100px;max-height:100px;" />';
}
else
{
	echo 'This user dont have an avatar.';
}
*/
?></td>
    	<td class="left"><h1><?php echo htmlentities($dnn['name'], ENT_QUOTES, 'UTF-8'); ?></h1>
    	Email: <?php echo htmlentities($dnn['email'], ENT_QUOTES, 'UTF-8'); ?><br />
    	Firstname: <?php echo htmlentities($dnn['fname'], ENT_QUOTES, 'UTF-8'); ?><br />
    	Age: <?php echo htmlentities($dnn['age'], ENT_QUOTES, 'UTF-8'); ?><br />
    	Sex: <?php echo htmlentities($dnn['sex'], ENT_QUOTES, 'UTF-8'); ?><br />
    	Religion: <?php echo htmlentities($dnn['religion'], ENT_QUOTES, 'UTF-8'); ?><br />
    	Country: <?php echo htmlentities($dnn['country'], ENT_QUOTES, 'UTF-8'); ?><br />
    	Profession: <?php echo htmlentities($dnn['profession'], ENT_QUOTES, 'UTF-8'); ?><br />
    	Address: <?php echo htmlentities($dnn['address'], ENT_QUOTES, 'UTF-8'); ?><br />
        <!--This user joined the website on <?php echo date('Y/m/d',$dnn['signup_date']); ?></td>-->
    </tr>
</table>
<?php
	}
	else
	{
		echo 'This user dont exists.';
	}
}
else
{
	echo 'The user ID is not defined.';
}
?>
		</div>
		<div class="foot"><a href="list of users.php">Go to the users list</a> </br> 
		<a href="adminprofileedit.php?id=<?php echo $dnn['id']; ?>"><?php echo htmlentities($dnn['name'], ENT_QUOTES, 'UTF-8'); ?>Click to edit profile</a></div>

	</body>
</html>