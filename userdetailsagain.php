<html>

 	<style>
/*
    body{
 
     
    background-image:url("doctor login page pic.jpg") ; 
  


     background-size: cover;


    
    background-position:full; 
    color: white;
    font-size: 150%;
    font-family: Arial,'Lucida Sans Unicode';
 	line-height: 2;
	text-align: center;



    

    
   padding: 18px 36px;
 
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: white;
   font-size: 24px;
   font-family: Georgia, serif;
   text-decoration: none;
   vertical-align: middle;
   }
  h1
  { 
  	color:black;
  	font-style:arial;
  	position: center;

  }

  h3
  {
  	color:black;
  }

*/
     </style>  

    </head>


 	<body>

 	<h1>Your Details Information : </h1>




<?php
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");


//select a database to work with
$selected = mysql_select_db("wedjourney",$dbhandle) 
  or die("Could not select examples");

  //data from
  
  if(isset($_POST['login']))
  {

	$user = $_POST['name'];
	
	$fai=$_POST['password'];

$result = mysql_query("SELECT name,age FROM user_login where name= '$user' AND password='$fai'");

//fetch tha data from the database 
$row = mysql_fetch_array($result); 
{
   echo "<h3>NAME:".$row{'name'}.
   " <br> Post:".$row{'age'}.


   /*
   " <br> Degree: ".$row{'Degree'}.
   "<br> Speciality: ".$row{'Speciality'}.
   "<br> Joindate: ".$row{'Joindate'}.
   "<br> Password: ".$row{'drc'}. 
   "<br> Username: ".$row{'username'}.
   "<br> Age: ".$row{'age'}.
   "<br> Sex: ".$row{'sex'}.
   "<br> Blood Group: ".$row{'Blood_group'}.
   "<br> Experienced: ".$row{'experienced'} .
   "<br> Email: ".$row{'email'} .
   "<br> Previous Hospital: ".$row{'previous_hospital'} . 
*/

   "<br></h3>";
}
//close the connection
mysql_close($dbhandle);
  }  
?>


<h3>For any inquiry contact Please contact MANAGER</h3>

</body>
</html>