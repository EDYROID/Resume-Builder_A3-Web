<?php
error_reporting(0);
session_start();
include "connection.php";
include "session.php";
demo();
if(isset($_REQUEST['sub']))
{
	$user_id = $_REQUEST['user_id'];
	$snm = $_REQUEST['t1'];
	$sloc = $_REQUEST['t2'];
	$deg = $_REQUEST['t3'];
	$field = $_REQUEST['t4'];
	$uniboard = $_REQUEST['t5'];
	$year = $_REQUEST['t6'];
	$aggregate = $_REQUEST['t7'];
	if($snm == "" || $snm == NULL)
	{
		header("location:educational.php?msg=School Name must be filled out");
	}
	else if(!preg_match("/^[\.\,a-zA-Z ]*$/",$snm))
	{
		header("location:educational.php?msg= School Name is Invalid");
	}
	else if($sloc == "" || $sloc == NULL)
	{
		header("location:educational.php?msg=School Location must be filled out");
	}
	else if($deg == "" || $deg == NULL)
	{
		header("location:educational.php?msg=Degree or Class must be filled out");
	}
	else if($field == "" || $field == NULL)
	{
		header("location:educational.php?msg=Field of Study must be filled out");
	}
	else if($uniboard == "" || $uniboard == NULL)
	{
		header("location:educational.php?msg=Uniboard or Board must be filled out");
	}
	else if($year == "" || $year == NULL)
	{
		header("location:educational.php?msg=Graduation Year must be filled out");
	}
	else if($aggregate == "" || $aggregate == NULL)
	{
		header("location:educational.php?msg=Aggregate Percentage % must be filled out");
	}
	else if(!preg_match("/^[0-9 ]*$/",$year))
	{
		header("location:educational.php?msg=Graduation Year is Invalid");
	}
	else{
		$sql = "insert into educational set user_id = '".$user_id."', sname = '".$snm."', slocation = '".$sloc."', degree = '".$deg."', field = '".$field."', uniboard = '".$uniboard."', year = '".$year."', aggregate = '".$aggregate."'";
		mysqli_query($con,$sql);
		header("location:projects.php?id=$user_id");
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resume Builder</title>
<script type="text/javascript" src="js/checkeducational.js"></script>
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
      <a class="mdl-navigation__link" href="">Career Blog</a>
      <a class="mdl-navigation__link" href="">About Us</a>
      <a class="mdl-navigation__link" href="ContactForm/index.html">Contact Us</a>
      <a class="mdl-navigation__link" href="logout.php">Logout</a>
    </nav>
  </div>

<div class="col-md-12" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">
        	<div class="col-md-3"></div>
            <div class="col-md-6">
            	<form method="post" name="form" onsubmit="return checkEducational(form);">
                    <fieldset style="background:rgba(0.0,0.0,0.0,0.5); border:white 3px solid; padding:20px; margin-top:30px;">
                        <h2 style="color:white; font-weight:bold; margin-bottom:10px;" align="center">Educational Information</h2>
                        <?php
						$id = $_REQUEST['id'];
						?>
                        <input type="hidden" name="user_id" value="<?php echo $id; ?>" />
                        <div class="col-md-12">
                            <div class="form-group">
                            	<label for="exampleInputText1" style="color:white;">School Name</label>
                                <input type="text" name="t1" class="form-control txt" required />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            	<label for="exampleInputText2" style="color:white;">School Location</label>
                                <input type="text" name="t2" class="form-control txt" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1" style="color:white;">Degree or Class</label>
                                <select class="form-control" name="t3" id="exampleFormControlSelect1" required>
                                	<option selected="selected" disabled="disabled">Select Degree or Class</option>
                                    <option>10th</option>
                                    <option>12th</option>
                                    <option>BA</option>
                                    <option>BBA</option>
                                    <option>BSc</option>
                                    <option>BCOM</option>
                                    <option>BCA</option>
                                    <option>BE</option>
                                    <option>BTech</option>
                                    <option>BEd</option>
                                </select>
                        	</div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect2" style="color:white;">Field of Study</label>
                                <select class="form-control" name="t4" id="exampleFormControlSelect2">
                                	<option selected="selected" disabled="disabled">Select Field</option>
                                    <option>Science</option>
                                    <option>Commerce</option>
                                    <option>Arts</option>
                                    <option>Computer Engineering</option>
                                    <option>Civil Engineering</option>
                                    <option>Electrical Engineering</option>
                                    <option>Electronics Engineering</option>
                                    <option>Mechanical Engineering</option>
                                    <option>Information Technology</option>
                                </select>
                        	</div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            	<label for="exampleInputText4" style="color:white;">University of Board Name</label>
                                <input type="text" name="t5" class="form-control txt" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect3" style="color:white;">Year of Passing</label>
                                <select class="form-control" name="t6" id="exampleFormControlSelect3">
                                	<option selected="selected" disabled="disabled">Select Year</option>
                                	<?php
										for($i = 2015; $i <= 2019; $i++)
										{
									?>
                                    <option><?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                        	</div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	<label for="exampleInputText5" style="color:white;">Aggregate Percentage %</label>
                                <input type="text" name="t7" class="form-control txt" required />
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