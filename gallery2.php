<!DOCTYPE HTML>
<html>
<head>
	<title>Gallery</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
</head>
<body>
	<div class="h-bg">
	<div class="container">
	<div class="header">
		<div class="logo">
	  		<a href="index.html"><img src="images/logo.png" title="logo" alt=""> </a>
	 	</div>


<div class="clear"></div>
</div>
<div class="nav-collapse nav-collapse_ collapse">
	<ul class="nav sf-menu clearfix sf-js-enabled">
		<li class="active color-1"><a href="index.html">Home</a></li>
		<li class="sub-menu color-2"><a href="about.html">About</a></li>
		<li class="color-3"><a href="blog.html">Login</a></li>
		<li class="color-4"><a href="gallary.php">Gallary</a></li>
		<li class="color-6"><a href="contact.html">Contact</a></li>
	</ul>
</div>
	<div class="drp-dwn">
	 	<select onchange="window.location=this.options[this.selectedIndex].value">
			<option value="http://192.168.2.8/murali/fotograph/high/index.html">Home</option>
			<option value="http://192.168.2.8/murali/fotograph/high/artists.html">Artists</option>
			<option value="http://192.168.2.8/murali/fotograph/high/favourites.html">Favourites</option>
			<option value="http://192.168.2.8/murali/fotograph/high/blog.html">Blog</option>
			<option value="http://192.168.2.8/murali/fotograph/high/contact.html">Contact</option>
		</select>
	</div>
<div class="clear"></div>
</div>              
</div>
<div class="clear"></div>
<div class="main-bg">
<div class="container">
<div class="main-wrp">
<div class="main-list">
	<div class="span4">
		<div class="css3gallery">
			<img src="images/pic13.jpg" alt="fotograph" title="" />
		</div>
	<div class="clear"></div>
	</div>
	<div class="span4">
		<div class="css3gallery">
			<img src="images/pic14.jpg"  alt="fotograph" title="" />
		</div>
	<div class="clear"></div>
	</div>
	<div class="span4">
		<div class="css3gallery">
			<img src="images/pic15.jpg"  alt="fotograph" title="" />
		</div>
	<div class="clear"></div>
	</div>
	<div class="span4">
		<div class="css3gallery">
			<img src="images/pic16.jpg"  alt="fotograph" title="" />
		</div>
	<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="main-list1">
	<div class="span4">
		<div class="css3gallery">
			<img src="images/pic17.jpg" alt="fotograph" title="" />
		</div>
	<div class="clear"></div>
	</div>
	<div class="span4">
		<div class="css3gallery">
			<img src="images/pic18.jpg"  alt="fotograph" title="" />
		</div>
	<div class="clear"></div>
	</div>
	<div class="span4">
		<div class="css3gallery">
			<img src="images/pic19.jpg"  alt="fotograph" title="" />
		</div>
	<div class="clear"></div>
	</div>
	<div class="span4">
		<div class="css3gallery">
			<img src="images/pic20.jpg"  alt="fotograph" title="" />
		</div>
	<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>
<div class="main-list1">
	<div class="span4">
		<div class="css3gallery">
			<img src="images/pic21.jpg" alt="fotograph" title="" />
		</div>
	<div class="clear"></div>
	</div>
	<div class="span4">
		<div class="css3gallery">
			<img src="images/pic22.jpg"  alt="fotograph" title="" />
		</div>
	<div class="clear"></div>
	</div>
	<div class="span4">
		<div class="css3gallery">
			<img src="images/pic23.jpg"  alt="fotograph" title="" />
		</div>
	<div class="clear"></div>
	</div>
	<div class="span4">
		<div class="css3gallery">
			<img src="images/pic24.jpg"  alt="fotograph" title="" />
		</div>
	<div class="clear"></div>
	</div>
	<div class="clear"></div>
	</div>
	<div class="clear"></div>
<div class="pagination">
  <ul>
    <li><a href="gallery.html">Prev</a></li>
    <li><a href="gallery.html">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">Next</a></li>
  </ul>
</div>







<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>


<div class="form-group">
<form action="" method="POST">

<label> Name: <br><input type="text" name="name"><br></label>

<label for "comment"> Comment: <br><textarea class="form-control" rows="5" name="mes"></textarea><br></label>

<input type="submit" name="post" value="Post">

</form>





<?php
if($_POST){
$name = $_POST["name"];
$mes = $_POST["mes"];
$post = $_POST["post"];
}
if($post){

     #WRITE DOWN COMMENTS#

    $write = fopen("com.txt", "a+");
    fwrite($write, "<b><u>$name</u></b><br>$mes<br>");
    fclose($write);


     #DISPLAY COMMENTS#

    $read = fopen("com.txt", "r+t");

    echo "All comments:";

    while(!feof($read)){
        echo fread($read, 1024);
    }

    fclose($read);

}
else {
     #DISPLAY COMMENTS#

    $read = fopen("com.txt", "r+t");

    echo "All comments:";

    while(!feof($read)){
        echo fread($read, 1024);
    }

    fclose($read);
}

?>







<div class="clear"></div>
<div class="footer">
	<div class="container">
		<div class="footer-nav1">
        	<ul>
        		<li id="twtr"><a href=""><img src="images/twitter.png" alt="" title="Twitter"></a></li>
            	<li id="fb"><a href=""><img src="images/fb.png" alt="" title="facebook"></a></li>
                <li id="mail"><a href=""><img src="images/mail.png" alt="" title="Mail"></a></li>
                <li id="feed"><a href=""><img src="images/feed.png" alt="" title="Feed"></a></li>
                <li id="plus"><a href=""><img src="images/plus.png" alt="" title="Plus"></a></li>
			</ul>
        </div>
	</div>
</div>
<div class="footer1">
<div class="container">
	<p class="w3-link"><span>© All rights Reserved | Designed by Fariha</span></p>
</div>
</div>
</body>
</html>