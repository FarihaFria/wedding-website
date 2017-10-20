<?php






?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My webpage</title>
  
    <!-- Bootstrap -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <link href="css/formstyle.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style>
	label{
	color: #B4886B;
    font-weight: bold;
    display: block;
    width: 100px;
    /*float: left;*/}
	.input-group
	{
	font-size:60px;
	font-style:italic;
    box-sizing:border box;
    width:300px;	
	}
	.alert alert-success
	{
	padding-right:70px;;
	}
	body { 
 background-image: url("Wedding/0123_LOC_Mtndog.jpg");
  background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 
   }
   h1
   {
	   font-size:70px;
	   color:white;
	   font-style:italic;
	   font-weight:bold;
	   padding-left:80px;
   }
	</style>
</head>
<body>
<h1>Personal Info</h1>
<div class="container">
    <div class="row">
        <form role="form" action="form.php" method="POST" enctype="multipart/form-data">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="First Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				<div class="form-group">
                    <label for="age">Age</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="age" id="age" placeholder="Last Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="loc">Location of the captured photo</label>
                    <div class="input-group">
                        <input type="loc" class="form-control" id="loc" name="loc" placeholder="Email Address" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="share">Share your thought behind this photo</label>
                    <div class="input-group">
                        <input type="share" class="form-control" id="share" name="share" placeholder="Give ur password" required>
                       <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
						
                    </div>
                </div>
				<div class="form-group">
                    <label for="iname">Image</label>
                    <div class="input-group">
                        <input type="file" name="image" class="form-control"   placeholder="Give ur image" required>
                       <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
						
                    </div>
                </div>
				 
				
  </br>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-left">
            </div>
        </form>
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
/*error_reporting(E_Error);*/
if(count($_POST)>0){

	$fname = $_POST['name'];
	$lname = $_POST['age'];
	$address =  $_POST['loc'];
	$add =  $_POST['share'];
	
	/*$cam = $_POST['camname'];
	$seat =  $_POST['availableseat'];*/
	
/*$sql = "INSERT INTO store(name,age,loc,share)
VALUES ('$fname','$lname','$address','$add')";*/


}
	

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
	//print_r($_FILES);
	//die('inside submit ');
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
// $target_file = $target_dir . 'myImage.jpg';
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["image"]["tmp_name"]);
	
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
	
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
	
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        include_once 'db_connect.php';
        $file_name = basename( $_FILES["image"]["name"]);
        //die($file_name);
		$sql = "INSERT INTO store (id,name,age,loc,share,iname) VALUES(NULL,'$fname','$lname','$address','$add','{$file_name}')";
        // die($sql);
        $res = $mysql_i->query($sql);

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
	

	}
}


	//include 'show.php';
	
?>
        </div>
	
    
</div>
<a href="show.php">About</a></li>
</body>
</html>