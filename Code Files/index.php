<?php
include "connection.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resume Builder</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="css/w3.css" rel="stylesheet" type="text/css">
<link href="css/video.css" rel="stylesheet" type="text/css" />
<link href="css/service.css" rel="stylesheet" type="text/css" />
<script src="js/material.min.js" type="text/javascript"></script>
<link href="css/min.css" rel="stylesheet" type="text/css" />
<link href="css/pinkmin.css" rel="stylesheet" type="text/css" />
<link href="css/icon2.css" rel="stylesheet" type="text/css" />
<link href="css/icon.css" rel="stylesheet" type="text/css" />
<link href="images/A3web.PNG" rel="shortcut icon" />
<style>
.demo-layout-transparent .mdl-layout__header,
.demo-layout-transparent .mdl-layout__drawer-button {
  /* This background is dark, so we set text to white. Use 87% black instead if
     your background is light. */
  color: black; position:fixed; background:rgba(130,204,221,0.5);
}
.mdl-navigation__link{ color:black !important; font-size:20px !important; text-decoration:none !important; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; }
.mdl-navigation__link:hover{ color:white !important; background:black !important; }
.boton{ background:white; color:black; border:2px black solid; padding:10px 50px 10px 50px; font-size:20px; }
.boton:hover{ background:#ff4081; color:white; border:2px white solid; }
.img-thumbnail:hover{ background:rgba(0,198,255,0.5) !important; }
.mdl-button--colored:hover{ background:black !important; border:1px white solid !important; }
</style>
</head>

<body>
<div class="demo-layout-transparent mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row navbar-fixed-top" style="padding-left:20px !important;">
      <!-- Title -->
      <span class="mdl-layout-title">
         	<img src="images/A3web.png" alt="Team Logo" title="A3 Web" class="img-responsive img-thumbnail" width="80" height="80" />
      </span>
      
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
      	<a class="mdl-navigation__link" href="">About Us</a>
        <a class="mdl-navigation__link" href="#services">Our Services</a>
        <a class="mdl-navigation__link" href="signup.php">Sign Up</a>
        <a class="mdl-navigation__link" href="login.php">Login</a>
      </nav>
    </div>
  </header>
  
<!--<div class="col-md-12">
    <video autoplay muted loop id="myVideo">
      <source src="images/Sanju (2018).mp4" type="video/mp4">
    </video>
    
    <div class="content">
      <button id="myBtn" onclick="myFunction()">Pause</button>
    </div>
    <script>
	// Get the video
	var video = document.getElementById("myVideo");
	
	// Get the button
	var btn = document.getElementById("myBtn");
	
	// Pause and play the video, and change the button text
	function myFunction() {
	  if (video.paused) {
		video.play();
		btn.innerHTML = "Pause";
	  } else {
		video.pause();
		btn.innerHTML = "Play";
	  }
	}
	</script>
</div>-->


<div class="w3-content w3-section" style="margin:0 !important; padding:0 !important;">
    <img class="mySlides w3-animate-fading" src="images/RB/RB1_Blue.png" style="width:100%; height:625px;">
    <img class="mySlides w3-animate-fading" src="images/RB/RB2.png" style="width:100%; height:625px;">
    <img class="mySlides w3-animate-fading" src="images/RB/RB3.png" style="width:100%; height:625px;">
    <img class="mySlides w3-animate-fading" src="images/lapoffice.jpg" style="width:100%; height:625px;">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000);    
}
</script>


<div class="col-md-12" align="right" style="padding:20px; position:fixed; margin-top:530px;">
	<a href="ContactForm/index.html" class="circle">
    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
    	<i class="material-icons">mail</i>
    </button>
    </a>
</div>
    
<div class="section2" id="services" style="background:url(images/services.png);">
    <div class="services-section">
    	<div class="inner-width">
        	<h1 class="section-title">Our Services</h1>
            <div class="border"></div>
            <div class="services-container">
            	<div class="col-md-12">
                	<div class="col-md-6">
                        <div class="service-box">
                            <div class="service-icon">
                                <i class="fas fa-paint-brush"></i>
                            </div>
                            <div class="service-title">Web Designing</div>
                            <div class="service-desc">To design web pages more attractively...</div>
                        </div>
               		</div>
                
                	<div class="col-md-6">
                    	<div class="service-box">
                            <div class="service-icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="service-title">Web Development</div>
                            <div class="service-desc">To develop web pages efficiently...</div>
                        </div>
                	</div>
                </div>
                
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="service-box">
                            <div class="service-icon">
                                <i class="fas fa-brush"></i>
                            </div>
                            <div class="service-title">Responsiveness</div>
                            <div class="service-desc">To design responsive web pages...</div>
                        </div>
                    </div>
                
                    <div class="col-md-6">
                        <div class="service-box">
                            <div class="service-icon">
                                <i class="fas fa-database"></i>
                            </div>
                            <div class="service-title">Databases</div>
                            <div class="service-desc">To make database connectivity...</div>
                        </div>
                    </div>
            	</div>
            </div>
        </div>
    </div>
</div>
  
</div>


<!--<div id="id01" class="modal">
        <div class="col-md-12">
			<form method="post" class="modal-content01 animate">
            	<fieldset style="border:pink 3px solid; border-radius:0px; padding:20px;">
                <div class="col-md-12">
                	<span onclick="document.getElementById('id01').style.display='none'" class="close01" title="Close Modal">&times;</span>
                </div>
                	<h2 style="color:white; font-weight:bold; margin-bottom:30px; font-family:'Times New Roman', Times, serif;">Login</h2>
                    <div class="form-group">
                    	<input type="email" name="tlog1" class="form-control" style="text-align:center; margin-bottom:30px;"
                        placeholder="Enter Your Email ID..." />
                    </div>
                    <div class="form-group">
                    	<input type="password" name="tlog2" class="form-control" style="text-align:center; margin-bottom:30px;"
                        placeholder="Enter Your Password..." />
                    </div>
                    <div class="form-group">
                    	<input type="submit" name="sublog" value="Login" class="btn btn-primary boton" />
                    </div>
                    <div class="form-group">
                    	<p style="font-size:18px; color:white;">
                        	<a href="" class="link">Forget Password?</a>
                        </p>
                    </div>
                    <div class="form-group">
                        <h4 style="color:red;">
                        <?php
                        if($_REQUEST['msg'])
                        {
                            echo $_REQUEST['msg'];
                        }
                        ?>
                        </h4>
                    </div>
                </fieldset>
            </form>
        </div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<div id="id02" class="modal">
	<div class="col-md-12">
    	<form method="post" name="myform" onsubmit="return validate()" class="modal-content02 animate">
            	<fieldset style="border:pink 3px solid; border-radius:0px; padding:20px;">
                	<div class="col-md-12">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close02" title="Close Modal">&times;</span>
                    </div>
                	<h3 style="color:white; font-weight:bold; margin-bottom:30px; font-family:'Times New Roman', Times, serif;">Sign Up</h3>
                	<div class="form-group">
                    	<input type="text" name="t1" class="form-control" style="text-align:center; margin-bottom:30px;"
                        placeholder="Enter Your Name..." />
                    </div>
                    <div class="form-group">
                    	<input type="text" name="t2" class="form-control" style="text-align:center; margin-bottom:30px;"
                        placeholder="Enter Your Email ID..." />
                    </div>
                    <div class="form-group">
                    	<input type="password" name="t3" class="form-control" style="text-align:center; margin-bottom:30px;"
                        placeholder="Enter Your Password..." />
                    </div>
                    <div class="form-group">
                    	<input type="password" name="t4" class="form-control" style="text-align:center; margin-bottom:30px;"
                        placeholder="Re-enter Your Password..." />
                    </div>
                    <div class="form-group">
                    	<input type="submit" name="sub" value="Sign Up" class="btn btn-primary boton" />
                    </div>
                    <div class="form-group">
                    <h4 style="color:red;">
                    <?php
					if($_REQUEST['msg02'])
					{
						echo $_REQUEST['msg02'];
					}
					?>
                    </h4>
                    </div>
                </fieldset>
    	</form>
    </div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>