<!DOCTYPE html>


<?php include'connection.php';

if(isset($_POST['submit']))
{
if(count($_POST)>0)
{ 

	
$storedata = "INSERT INTO user_login (name,fname,email,password,age,religion,country,profession,district,sex)
VALUES ('$name','$firstname','$Email','$password','$age','$religion','$country','$profession','$district','$sex')";

if($conn->query($storedata) == TRUE){
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

   

	}
else
{
	echo "fail";
}	
}

Print '<script>alert("You are successfully registered!!!");</script>';

}


mysql_close($conn);

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

<ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="index.html">About</a></li>
        <li><a href="gallery.html">Gallery</a></li>

         <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="userlogin.php">User Login</a></li>
                                                    <li><a href="admin.php">Admin Login</a></li>
                                                </ul>
                                            </li>


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
	
	 <!-- Country-->
	
	
	  <div class="control-group">
			    <form role="form" method="post" action="">
    <div class="form-group">
      <label for="country">Please Select your Country(present country you are living)</label>
      <select name="country" class="form-control" id="sel1">
	                <option>---Select country---</option>
                    <option value="0">Any Country</option>
                    <option value="1">Afghanistan</option>
                    <option value="2">Albania</option>
                    <option value="3">Algeria</option>
                    <option value="4">American Samoa</option>
                    <option value="5">Andorra</option>
                    <option value="6">Angola</option>
                    <option value="7">Anguilla</option>
                    <option value="8">Antarctica</option>
                    <option value="9">Antigua and Barbuda</option>
                    <option value="10">Argentina</option>
                    <option value="11">Armenia</option>
                    <option value="12">Aruba</option>
                    <option value="13">Australia</option>
                    <option value="14">Austria</option>
                    <option value="15">Azerbaijan</option>
                    <option value="16">Bahamas</option>
                    <option value="17">Bahrain</option>
                    <option value="18">Bangladesh</option>
                    <option value="19">Barbados</option>
                    <option value="20">Belarus</option>
                    <option value="21">Belgium</option>
                    <option value="22">Belize</option>
                    <option value="23">Benin</option>
                    <option value="24">Bermuda</option>
                    <option value="25">Bhutan</option>
                    <option value="26">Bolivia</option>
                    <option value="27">Bosnia and Herzegovina</option>
                    <option value="28">Botswana</option>
                    <option value="29">Bouvet Island</option>
                    <option value="30">Brazil</option>
                    <option value="31">British Indian Ocean Territory</option>
                    <option value="32">Brunei Darussalam</option>
                    <option value="33">Bulgaria</option>
                    <option value="34">Burkina Faso</option>
                    <option value="35">Burundi</option>
                    <option value="36">Cambodia</option>
                    <option value="37">Cameroon</option>
                    <option value="38">Canada</option>
                    <option value="39">Cape Verde</option>
                    <option value="40">Cayman Islands</option>
                    <option value="41">Central African Republic</option>
                    <option value="42">Chad</option>
                    <option value="43">Chile</option>
                    <option value="44">China</option>
                    <option value="45">Christmas Island</option>
                    <option value="46">Cocos (Keeling) Islands</option>
                    <option value="47">Colombia</option>
                    <option value="48">Comoros</option>
                    <option value="49">Congo</option>
                    <option value="50">Congo, the Democratic Republic of the</option>

                    <option value="51">Cook Islands</option><option value="52">Costa Rica</option><option value="53">Cote D'Ivoire</option><option value="54">Croatia</option><option value="55">Cuba</option><option value="56">Cyprus</option><option value="57">Czech Republic</option><option value="58">Denmark</option><option value="59">Djibouti</option><option value="60">Dominica</option><option value="61">Dominican Republic</option><option value="62">Ecuador</option><option value="63">Egypt</option><option value="64">El Salvador</option><option value="65">Equatorial Guinea</option><option value="66">Eritrea</option><option value="67">Estonia</option><option value="68">Ethiopia</option><option value="69">Falkland Islands (Malvinas)</option><option value="70">Faroe Islands</option><option value="71">Fiji</option><option value="72">Finland</option><option value="73">France</option><option value="74">French Guiana</option><option value="75">French Polynesia</option><option value="76">French Southern Territories</option><option value="77">Gabon</option><option value="78">Gambia</option><option value="79">Georgia</option><option value="80">Germany</option><option value="81">Ghana</option><option value="82">Gibraltar</option><option value="83">Greece</option><option value="84">Greenland</option><option value="85">Grenada</option><option value="86">Guadeloupe</option><option value="87">Guam</option><option value="88">Guatemala</option><option value="89">Guinea</option><option value="90">Guinea-Bissau</option><option value="91">Guyana</option><option value="92">Haiti</option><option value="93">Heard Island and Mcdonald Islands</option><option value="94">Holy See (Vatican City State)</option><option value="95">Honduras</option><option value="96">Hong Kong</option><option value="97">Hungary</option><option value="98">Iceland</option><option value="99">India</option><option value="100">Indonesia</option><option value="101">Iran, Islamic Republic of</option><option value="102">Iraq</option><option value="103">Ireland</option><option value="104">Israel</option><option value="105">Italy</option><option value="106">Jamaica</option><option value="107">Japan</option><option value="108">Jordan</option><option value="109">Kazakhstan</option><option value="110">Kenya</option><option value="111">Kiribati</option><option value="112">Korea, Democratic People's Republic of</option><option value="113">Korea, Republic of</option><option value="114">Kuwait</option><option value="115">Kyrgyzstan</option><option value="116">Lao People's Democratic Republic</option><option value="117">Latvia</option><option value="118">Lebanon</option><option value="119">Lesotho</option><option value="120">Liberia</option><option value="121">Libyan Arab Jamahiriya</option><option value="122">Liechtenstein</option><option value="123">Lithuania</option><option value="124">Luxembourg</option><option value="125">Macao</option><option value="126">Macedonia, the Former Yugoslav Republic of</option><option value="127">Madagascar</option><option value="128">Malawi</option><option value="129">Malaysia</option><option value="130">Maldives</option><option value="131">Mali</option><option value="132">Malta</option><option value="133">Marshall Islands</option><option value="134">Martinique</option><option value="135">Mauritania</option><option value="136">Mauritius</option><option value="137">Mayotte</option><option value="138">Mexico</option><option value="139">Micronesia, Federated States of</option><option value="140">Moldova, Republic of</option><option value="141">Monaco</option><option value="142">Mongolia</option><option value="143">Montserrat</option><option value="144">Morocco</option><option value="145">Mozambique</option><option value="146">Myanmar</option><option value="147">Namibia</option><option value="148">Nauru</option><option value="149">Nepal</option><option value="150">Netherlands</option><option value="151">Netherlands Antilles</option><option value="152">New Caledonia</option><option value="153">New Zealand</option><option value="154">Nicaragua</option><option value="155">Niger</option><option value="156">Nigeria</option><option value="157">Niue</option><option value="158">Norfolk Island</option><option value="159">Northern Mariana Islands</option><option value="160">Norway</option><option value="161">Oman</option><option value="162">Pakistan</option><option value="163">Palau</option><option value="164">Palestinian Territory, Occupied</option><option value="165">Panama</option><option value="166">Papua New Guinea</option><option value="167">Paraguay</option><option value="168">Peru</option><option value="169">Philippines</option><option value="170">Pitcairn</option><option value="171">Poland</option><option value="172">Portugal</option><option value="173">Puerto Rico</option><option value="174">Qatar</option><option value="175">Reunion</option><option value="176">Romania</option><option value="177">Russian Federation</option><option value="178">Rwanda</option><option value="179">Saint Helena</option><option value="180">Saint Kitts and Nevis</option><option value="181">Saint Lucia</option><option value="182">Saint Pierre and Miquelon</option><option value="183">Saint Vincent and the Grenadines</option><option value="184">Samoa</option><option value="185">San Marino</option><option value="186">Sao Tome and Principe</option><option value="187">Saudi Arabia</option><option value="188">Senegal</option><option value="189">Serbia and Montenegro</option><option value="190">Seychelles</option><option value="191">Sierra Leone</option><option value="192">Singapore</option><option value="193">Slovakia</option><option value="194">Slovenia</option><option value="195">Solomon Islands</option><option value="196">Somalia</option><option value="197">South Africa</option><option value="198">South Georgia and the South Sandwich Islands</option><option value="199">Spain</option><option value="200">Sri Lanka</option><option value="201">Sudan</option><option value="202">Suriname</option><option value="203">Svalbard and Jan Mayen</option><option value="204">Swaziland</option><option value="205">Sweden</option><option value="206">Switzerland</option><option value="207">Syrian Arab Republic</option><option value="208">Taiwan, Province of China</option><option value="209">Tajikistan</option><option value="210">Tanzania, United Republic of</option><option value="211">Thailand</option><option value="212">Timor-Leste</option><option value="213">Togo</option><option value="214">Tokelau</option><option value="215">Tonga</option><option value="216">Trinidad and Tobago</option><option value="217">Tunisia</option><option value="218">Turkey</option><option value="219">Turkmenistan</option><option value="220">Turks and Caicos Islands</option><option value="221">Tuvalu</option><option value="222">Uganda</option><option value="223">Ukraine</option><option value="224">United Arab Emirates</option><option value="225">United Kingdom</option><option value="226">United States</option><option value="227">United States Minor Outlying Islands</option><option value="228">Uruguay</option><option value="229">Uzbekistan</option><option value="230">Vanuatu</option><option value="231">Venezuela</option><option value="232">Viet Nam</option><option value="233">Virgin Islands, British</option><option value="234">Virgin Islands, U.s.</option><option value="235">Wallis and Futuna</option><option value="236">Western Sahara</option><option value="237">Yemen</option><option value="238">Zambia</option><option value="239">Zimbabwe</option><option value="240">Serbia</option><option value="241">Asia / Pacific Region</option><option value="242">Montenegro</option><option value="243">Aland Islands</option><option value="244">Bonaire, Sint Eustatius and Saba</option><option value="245">Curacao</option><option value="246">Guernsey</option><option value="247">Isle of Man</option><option value="248">Jersey</option><option value="249">Kosovo</option><option value="250">Saint Barthelemy</option><option value="251">Saint Martin</option><option value="252">Sint Maarten</option><option value="253">South Sudan</option>                </select> 
              
                                            
                </select>
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
                    <option value="1">Accounting, Banking &amp; Finance</option>
                    <option value="2">Administration &amp; HR</option>
                    <option value="3">Advertising, Media &amp; Entertainment</option>
                    <option value="4">Agriculture</option>
                    <option value="5">Airline &amp; Aviation</option>
                    <option value="6">Architecture &amp; Design</option><option value="7">Artists, Animators &amp; Web Designers</option><option value="34">Banker</option><option value="9">Beauty, Fashion &amp; Jewellery Designers</option><option value="8">BPO, KPO, &amp; Customer Support</option><option value="31">Business</option><option value="10">Civil Services / Law Enforcement</option><option value="11">Corporate Professionals</option><option value="12">Defense</option><option value="33">Doctor</option><option value="13">Education &amp; Training</option><option value="14">Engineering</option><option value="26">Govt. Service</option><option value="15">Hotel &amp; Hospitality</option><option value="16">IT &amp; Software Engineering</option><option value="17">Legal</option><option value="25">Maintain family</option><option value="18">Medical &amp; Healthcare</option><option value="19">Merchant Navy</option><option value="20">Non Working</option><option value="21">Others</option><option value="28">Politics</option><option value="29">Religious works</option><option value="22">Sales &amp; Marketing</option><option value="23">Scientist</option><option value="24">Student</option><option value="30">Tusion</option>                </select>
               
                                            
                </select>
			  </div>	  
			  

            <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>



			 <div class="control-group">
			  <!-- Button -->
			  <div class="controls">
				<button name="submit" class="btn btn-success">submit</button>
			  </div>
			</div>

		  </fieldset>
	</form>
   
   
   
     


   
   
   
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/clean-blog.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
</body>
	

</body>

</html>