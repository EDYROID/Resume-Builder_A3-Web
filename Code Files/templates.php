<?php
error_reporting(0);
session_start();
include "connection.php";
include "session.php";
demo();
$id = $_REQUEST['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resume Builder | Templates</title>
<script type="text/javascript" src="js/material.min.js"></script>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="css/min.css" rel="stylesheet" type="text/css" />
<link href="css/icon.css" rel="stylesheet" type="text/css" />
<link href="css/pinkmin.css" rel="stylesheet" type="text/css" />
<link href="images/A3web.PNG" rel="shortcut icon" />
<style>
.demo-layout-transparent .mdl-layout__header,
.demo-layout-transparent .mdl-layout__drawer-button {
  /* This background is dark, so we set text to white. Use 87% black instead if
     your background is light. */
  color: white; position:fixed;
}
.mdl-navigation__link{ color:black !important; font-size:20px !important; text-decoration:none !important; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; }
.mdl-navigation__link:hover{ color:white !important; background:black !important; }
.boton{ background:white; color:black; border:2px black solid; padding:10px 50px 10px 50px; font-size:20px; }
.boton:hover{ background:#ff4081; color:white; border:2px white solid; }
.img-thumbnail:hover{ background:rgba(0,198,255,0.5) !important; }
.mdl-button--colored:hover{ background:black !important; border:1px white solid !important; }
.thumbnail:hover{ background:#00ffff; border:2px black solid; }
</style>
</head>

<body style="background:url(../Resume_Builder/images/bg-01.jpg) center / cover; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">
<div class="demo-layout-transparent mdl-layout mdl-js-layout">
	<header class="mdl-layout__header mdl-layout__header--transparent">
    	<div class="mdl-layout__header-row navbar-fixed-top">
      <!-- Title -->
     		<span class="mdl-layout-title">
            	<img src="images/Resume Builder Logo.PNG" title="Resume Builder" class="img-responsive img-circle" width="80" height="80" />
            </span>
      <!-- Add spacer, to align navigation to the right -->
          	<div class="mdl-layout-spacer"></div>
          <!-- Navigation -->
      	</div>
  	</header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title" style="color:#82ccdd;"><b>Resume Builder</b></span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="">Careeer Blog</a>
          <a class="mdl-navigation__link" href="">About Us</a>
          <a class="mdl-navigation__link" href="ContactForm/index.html">Contact Us</a>
          <a class="mdl-navigation__link" href="logout.php">Logout</a>
        </nav>
	</div>
</div>
<div class="col-md-12" style="margin-top:50px; color:white; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;" align="center">
	<h1 style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Resume Templates</h1>
    <p style="font-size:20px; margin-bottom:50px;">Different types of Resumes with different types of Looking and Attractiveness.</p>
</div>
<div class="container-fluid" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">
    <div class="col-md-12">
    	<div class="col-md-4"></div>
        <div class="col-md-4">
        	<div class="thumbnail">
            	<a href="personal.php?id=<?php echo $id; ?>" style="font-size:24px;">
                	<img src="images/resume_preview.png" alt="T1" style="width:100%;" />
                    <div class="caption" align="center">
                    	A3W_RB
                    </div>
                </a>
            </div>
    	</div>
        <div class="col-md-4"></div>
    </div>
</div>
<div class="col-md-12" align="center">
	<a href="comingsoon.php?id=<?php echo $id; ?>" class="circle" title="Templates">
    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
    	<i class="material-icons">add</i>
    </button>
    </a>
</div>
</body>
</html>