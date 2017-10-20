	<html>

 	<style>

/*
    body{
    
  


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
/*
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");


//select a database to work with
$selected = mysql_select_db("wedjourney",$dbhandle) 
  or die("Could not select examples");

  //data from contact form

  if(count($_POST)>0)
{ 

  
  $user = $_POST['name'];
  
  $fai=$_POST['password'];



  $id = mysql_query("SELECT  FROM userlogin where name= '$user' AND password='$fai'");

 // $id=$_POST['id'];
  
 // if(count($id)>0){

	//$user = $_POST['name'];
	
	//$fai=$_POST['password'];


 if($id!=0){
//execute the SQL query and return records
$result = mysql_query("SELECT name,fname,email,age,sex,religion,country,district,profession FROM userlogin where name= '$user' AND password='$fai'");

//fetch tha data from the database 
$row = mysql_fetch_array($result); {
   echo "<h3>NAME:".$row{'name'}." <br> Post:".$row{'fname'}." <br> Degree: ".$row{'email'}."<br> Speciality: ".$row{'age'}."<br> Joindate: ".$row{'sex'}."<br> Password: ".$row{'religion'} //display the results
         ."<br> Username: ".$row{'country'}."<br> Age: ".$row{'age'}."<br> Sex: ".$row{'sex'}."<br> Blood Group: ".$row{'religion'}."<br> Experienced: ".$row{'country'} ."<br> Email: ".$row{'district'} ."<br> Previous Hospital: ".$row{'profession'} . "<br></h3>";
}
}
//close the connection
mysql_close($dbhandle);
  }

*/


include 'connection.php';

  //data from contact form
 

/*

  if(isset($_POST['Submit'])>0){

  $user = $_POST['name'];
  
  $fai=$_POST['password'];


 
//execute the SQL query and return records
$result = mysql_query("SELECT name,fname,email,age,sex,religion,country,district,profession FROM userlogin where name= '$user' AND password='$fai'");

//fetch tha data from the database 
$row = mysql_fetch_array($result); {
   echo "<h3>NAME:".$row{'name'}." <br> Post:".$row{'fname'}." <br> Degree: ".$row{'email'}."<br> Speciality: ".$row{'age'}."<br> Joindate: ".$row{'sex'}."<br> Password: ".$row{'religion'} //display the results
         ."<br> Username: ".$row{'country'}."<br> Age: ".$row{'age'}."<br> Sex: ".$row{'sex'}."<br> Blood Group: ".$row{'religion'}."<br> Experienced: ".$row{'country'} ."<br> Email: ".$row{'district'} ."<br> Previous Hospital: ".$row{'profession'} . "<br></h3>";
}
}



*/


if(isset($_POST["submit"])){
  $sql = "SELECT * FROM user_login WHERE name=" . $_POST["name"];
}

$result=mysql_query($sql);   /*  execute the query  */  

while($row=mysql_fetch_array($result)){
  echo "<h4> Name: " . $row["name"] . ', ' . $row["fname"]."</h4> \n";
  echo "<h5> ID: " . $row["age"] . "<br/> Email: " . $row["email"] . "<br/> Group: " . $row["religion"] . "<br/> Posted: " . $row["country"] . "</h5> \n";
}
mysql_close();
?>








?>















<h3>For any inquiry contact Please contact MANAGER</h3>

</body>
</html>