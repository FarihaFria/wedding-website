<!DOCTYPE html>


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

if(isset($_POST['submit']))
{
if(count($_POST)>0)
{ 

    $name = $_POST['name'];
    $firstname = $_POST['fname'];
    $Email =$_POST['email'];
    $password =$_POST['password'];
    $age=$_POST["age"];
    $religion=$_POST['religion'];
    $country=$_POST['country'];
    $profession=$_POST['profession'];
    $district=$_POST['district'];
    $sex=$_POST['sex'];
	$address=$_POST['address'];

 
$str = "INSERT INTO user_login (name,fname,email,password,age,religion,country,profession,district,sex,address)
VALUES ('$name','$firstname','$Email','$password','$age','$religion','$country','$profession','$district','$sex','$address')";

if($conn->query($str) === TRUE){


	}
else
{
	echo "fail";
}	



}

Print '<script>alert("You are successfully registered!!!");</script>';

}

$conn->close();

?>






<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <title>Registration</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <link href="css/clean-blog.min.css" rel="stylesheet">

    
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Wedding Journey</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="gallery.html">Gallery</a></li>
		<li><a href="userlogin.php">User Login</a></li>
         <!--
         <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="userlogin.php">User Login</a></li>
                                                    <li><a href="adminlogin.php">Admin Login</a></li>
                                                    <li><a href="Registration page.php">Registration</a></li>
                                                </ul>
                                            </li>

-->
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>









    <div class="container"> 
		  <form class="form-horizontal" action="" method="POST">
		  <fieldset>
			<div id="legend">
			  <br><legend class="">Please Register</legend></br>
			</div>
			<!-- Name-->
			<div class="control-group">	
			  <label class="control-label"  for="name">Name</label>
			  <div class="controls">
				<input type="text" id="username" name="name" placeholder="Name..." class="input-xlarge" required>
				<p class="help-block">Give your name</p>
			  </div>
			  
			  
			</div>
			<div class="control-group">			  
			  <!-- First name -->
			  <label class="control-label"  for="fname">First name</label>
			  <div class="controls">
				<input type="text" id="username" name="fname" placeholder="First name..." class="input-xlarge" required>
				<p class="help-block">Give Your First name</p>
			  </div>
			 	
       
	   

            <div class="control-group">			  
			  <!-- Email -->
			  <label class="control-label"  for="email">Email</label>
			  <div class="controls">
				<input type="text" id="username" name="email" placeholder="Email..." class="input-xlarge" required>
				<p class="help-block">Give Your Email Address</p>
			  </div>
			  

            <div class="control-group">			  
			  <!-- password -->
			  <label class="control-label"  for="password">Password</label>
			  <div class="controls">
				<input type="password" id="username" name="password" placeholder="Password..." class="input-xlarge" required>
				<p class="help-block">Give Your Password</p>
			  </div>


			
 <!-- AGE -->
			
	  <div class="control-group">
			    <form role="form" method="post" action="">
    <div class="form-group">
      <label for="age">Select your age please</label>
      <select name="age" class="form-control" id="sel1">
	                <option>---Select age---</option>
                    <option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
					<option value="32">32</option>
					<option value="33">33</option>
					<option value="34">34</option>
					<option value="35">35</option>
					<option value="36">36</option>
					<option value="37">37</option>
					<option value="38">38</option>
					<option value="39">39</option>
					<option value="40">40</option>
					<option value="41">41</option>
					<option value="42">42</option>
					<option value="43">43</option>
					<option value="44">44</option>
					<option value="45">45</option>
					<option value="46">46</option>
					<option value="47">47</option>
					<option value="48">48</option>
					<option value="49">49</option>
					<option value="50">50</option>					
					<option value="51">51</option>
					<option value="52">52</option>
					<option value="53">53</option>
					<option value="54">54</option>
					<option value="55">55</option>
					<option value="56">56</option>
					<option value="57">57</option>
					<option value="58">58</option>
					<option value="59">59</option>
					<option value="60">60</option>                                            
                </select>
			  </div>
			  


			  <!-- Sex-->

	  <div class="control-group">
			    <form role="form" method="post" action="">
    <div class="form-group">
      <label for="sex">Select your sex please</label>
      <select name="sex" class="form-control" id="sel1">
	                <option>---Select---</option>
                    <option value="male">Male</option>
					<option value="female">Female</option>   
                                            
                </select>
			  </div>
			  </div>
			  </div>
			  
			  
			  
			  
 <!-- REligion -->

	  <div class="control-group">
			    <form role="form" method="post" action="">
    <div class="form-group">
      <label for="religion">Select your Religion please</label>
      <select name="religion" class="form-control" id="sel1">
	                <option>---Select religion---</option>
					<option value="Muslim">Muslim</option>
					<option value="Christian">Christian</option>
					<option value="Hindu">Hindu</option>
					<option value="Buddhist">Buddhist</option>
					<option value="Other">Other</option>
					<option value="Non-religion">Non-religion</option>    
                                            
                </select>
			  </div>
			  </div>
			  </div>
	
	 <!-- Country-->
	
	
	  <div class="control-group">
			    <form role="form" method="post" action="">
    <div class="form-group">
      <label for="country">Please Select your Country(present country you are living)</label>
      <select name="country" class="form-control" id="sel1">
	                <option>---Select country---</option>
                    <option value="Any Country">Any Country</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Bouvet Island</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>

                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                   <option value="Denmark">Denmark</option>
                   <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
            
                    <option value="Egypt">Egypt</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Territories">French Southern Territories</option>
                   <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                   <option value="Greenland">Greenland</option>
                
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
               
                 
                              </select> 
              
                                            
                </select>
			  </div>
			  </div>
	
	
	
	
	
	 <div class="control-group">			  
			  <!-- district -->
			  <label class="control-label"  for="district">District</label>
			  <div class="controls">
				<input type="text" id="username" name="district" placeholder="District..." class="input-xlarge" required>
				<p class="help-block">If you are bangladeshi,give district</p>
			  </div>
			  
			  
		 <!-- Profession-->
	
	
	  <div class="control-group">
			    <form role="form" method="post" action="">
    <div class="form-group">
      <label for="profession">Select your profession please</label>
      <select name="profession" class="form-control" id="sel1">
                   <option>---Select profession---</option>
                    <option value="Accounting,Banking,Finance">Accounting, Banking &amp; Finance</option>
                    <option value="Administration,HR">Administration &amp; HR</option>
                    <option value="Advertising, Media,Entertainment">Advertising, Media &amp; Entertainment</option>
                    <option value="Agriculture">Agriculture</option>
                    <option value="Airline,Aviation">Airline &amp; Aviation</option>
                    <option value="Architecture,Design">Architecture &amp; Design</option>
                    <option value="Artists, Animators,Web Designers">Artists, Animators &amp; Web Designers</option>
                    <option value="Banker">Banker</option>
                    <option value="Beauty, Fashion,Jewellery Designers">Beauty, Fashion &amp; Jewellery Designers</option>
                    <option value="BPO, KPO,Customer Support">BPO, KPO, &amp; Customer Support</option>
                    <option value="Business">Business</option>
                    <option value="Civil Services / Law Enforcement">Civil Services / Law Enforcement</option>
                    <option value="Corporate Professionals">Corporate Professionals</option>
                    <option value="Defense">Defense</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Education,Training">Education &amp; Training</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Govt. Service">Govt. Service</option>
                    <option value="Hotel &amp; Hospitality">Hotel &amp; Hospitality</option>
                    <option value="IT,Software Engineering">IT &amp; Software Engineering</option>
                    <option value="Legal">Legal</option>
                    <option value="Maintain family">Maintain family</option>
                    <option value="Medical,Healthcare">Medical &amp; Healthcare</option>
                    <option value="Merchant Navy">Merchant Navy</option>
                    <option value="Non Working">Non Working</option>
                    <option value="Others">Others</option>
                    <option value="Politics">Politics</option>
                    <option value="Religious works">Religious works</option>
                    <option value="Sales &amp; Marketing">Sales &amp; Marketing</option>
                    <option value="Scientist">Scientist</option>
                    <option value="Student">Student</option>
                    <option value="Tusion">Tusion</option>              
                      </select>
               
                                            
                </select>
			  </div>	  
			  
			  
			  <div class="form-group">
  <label for="address">Address:</label>
  
  <textarea type="text" id="username" name="address" class="form-control" rows="5" id="comment"></textarea>
  <!--<input type="text" id="username" name="address" placeholder="" class="input-xlarge" required>-->
</div>
			  
			  
			  
			  	 <div class="control-group">			  
			  <!-- district -->
			  <label class="control-label"  for="district">District</label>
			  <div class="controls">
				<input type="text" id="username" name="district" placeholder="District..." class="input-xlarge" required>
				<p class="help-block">If you are bangladeshi,give district</p>
			  </div>
			  
			  
			  
				
  </br>

			  
			  
			  
			  
			  
			  
			  
			  



			 <div class="control-group">
			  <!-- Button -->
			  <div class="controls">
				<button name="submit" class="btn btn-success">submit</button>
			  </div>
			</div>

			</br>
			
		  </fieldset>
	</form>
   </div>
   
   </div>
     

 



   
   
   
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/clean-blog.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
</body>
	


</html>