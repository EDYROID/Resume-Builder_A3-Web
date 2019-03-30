<?php
error_reporting(0);
session_start();
include "connection.php";
include "session.php";
demo();
if(isset($_REQUEST['sub']))
{
	$user_id = $_REQUEST['user_id'];
	$obj = $_REQUEST['t1'];
	$dates = $_REQUEST['t2'];
	$months = $_REQUEST['t3'];
	$years = $_REQUEST['t4'];
	$lanpro = $_REQUEST['t5'];
	$hobbies = $_REQUEST['t6'];
	if($obj == "" || $obj == NULL)
	{
		header("location:others.php?msg=Career Objective must be filled out");
	}
	else if($dates == "" || $dates == NULL)
	{
		header("location:others.php?msg=Date must be filled out");
	}
	if($months == "" || $months == NULL)
	{
		header("location:others.php?msg=Month must be filled out");
	}
	else if($years == "" || $years == NULL)
	{
		header("location:others.php?msg=Year must be filled out");
	}
	else if($lanpro == "" || $lanpro == NULL)
	{
		header("location:others.php?msg=Proficient Languages must be filled out");
	}
	else if($hobbies == "" || $hobbies == NULL)
	{
		header("location:others.php?msg=Hobbies must be filled out");
	}
	else{
		$sql = "insert into otherinfo set user_id = '".$user_id."', objective = '".$obj."', din = '".$dates."', mahina = '".$months."', saal = '".$years."', lanpro = '".$lanpro."', hobbies = '".$hobbies."'";
		mysqli_query($con,$sql);
		header("location:ready.php?id=$user_id");
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Other Information</title>
<script type="text/javascript" src="js/checkothers.js"></script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/buttonlink.css" rel="stylesheet" type="text/css" />
<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" type="text/css" />
<link href="css/w3.css" rel="stylesheet" type="text/css">
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
  color: white; position:fixed;
}
.mdl-navigation__link{ color:black !important; font-size:20px !important; text-decoration:none !important; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; }
.mdl-navigation__link:hover{ color:white !important; background:black !important; }
.boton{ background:white; color:black; border:2px black solid; padding:10px 50px 10px 50px; font-size:20px; }
.boton:hover{ background:#ff4081; color:white; border:2px white solid; }
.img-thumbnail:hover{ background:rgba(0,198,255,0.5) !important; }
.mdl-button--colored:hover{ background:black !important; border:1px white solid !important; }
</style>
</head>

<body style="background:url(images/bg-01.jpg) center / cover;">
<div class="demo-layout-transparent mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row navbar-fixed-top">
      <!-- Title -->
      <span class="mdl-layout-title">
         	<img src="images/A3web.png" alt="Team Logo" title="A3 Web" class="img-responsive img-thumbnail" width="80" height="80" />
      </span>
      
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
    </div>
  </header>
  
  <div class="mdl-layout__drawer" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; position:fixed;">
    <span class="mdl-layout-title" style="color:#82ccdd;"><b>Resume Builder</b></span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="templates.php">Resume Templates</a>
      <a class="mdl-navigation__link" href="">Career Blog</a>
      <a class="mdl-navigation__link" href="">About Us</a>
      <a class="mdl-navigation__link" href="">Contact Us</a>
      <a class="mdl-navigation__link" href="logout.php">Logout</a>
    </nav>
  </div>

<div class="col-md-12" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">
        	<div class="col-md-3"></div>
            <div class="col-md-6">
            	<form method="post" name="form" onsubmit="return checkOthers(form);">
                    <fieldset style="background:rgba(0.0,0.0,0.0,0.5); border:white 3px solid; padding:20px; margin-top:70px;">
                        <h2 style="color:white; font-weight:bold; margin-bottom:10px;" align="center">Other Details</h2>
                        <?php
						$id = $_REQUEST['id'];
						?>
                        <input type="hidden" name="user_id" value="<?php echo $id; ?>" />
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Objective" style="color:white;">Career Objective</label>
                                <textarea class="form-control" name="t1" id="objective" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-bottom:20px;">
                        	<div class="form-group">
                            	<div class="col-md-12">
                                	<label for="exampleFormControlSelect" style="color:white;">Date of Birth</label>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="t2" id="exampleFormControlSelect1">
                                        <option selected="selected" disabled="disabled">Select Date</option>
                                        <?php
                                            for($i = 1; $i <= 31; $i++)
                                            {
                                        ?>
                                        <option><?php echo $i; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="t3" id="exampleFormControlSelect2">
                                        <option selected="selected" disabled="disabled">Select Month</option>
                                        <?php
											$months = array("January","February","March","April","May","June","July","August","September",
											"October","November","December");
                                            foreach($months as $mon)
                                            {
                                        ?>
                                        <option><?php echo $mon; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="t4" id="exampleFormControlSelect3">
                                        <option selected="selected" disabled="disabled">Select Year</option>
                                        <?php
                                            for($i = 1990; $i <= 2005; $i++)
                                            {
                                        ?>
                                        <option><?php echo $i; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                        	</div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	<label for="exampleInputText2" style="color:white;">Language Proficiency</label>
                                <input type="text" name="t5" class="form-control txt" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	<label for="exampleInputText4" style="color:white;">Hobbies</label>
                                <input type="text" name="t6" class="form-control txt" required />
                            </div>
                        </div>
                        <div class="form-group" align="center">
                            <input type="submit" name="sub" value="Next" class="btn btn-primary boton" style="font-weight:bold;" />
                        </div>
                        <div class="form-group" align="center">
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
            <div class="col-md-3"></div>
        </div>


<div class="col-md-12" align="right" style="padding:20px; position:fixed; margin-top:530px;">
	<a href="home1.php" class="circle" title="Home">
    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
    	<i class="material-icons">home</i>
    </button>
    </a>
</div>
  
</div>

</body>
</html>