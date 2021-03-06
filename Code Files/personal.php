<?php
error_reporting(0);
session_start();
include "connection.php";
include "session.php";
demo();
if(isset($_REQUEST['sub']))
{
	$user_id = $_REQUEST['user_id'];
	$nm = $_REQUEST['t1'];
	$emid = $_REQUEST['t2'];
	$phone = $_REQUEST['t3'];
	$street = $_REQUEST['t4'];
	$city = $_REQUEST['t5'];
	$state = $_REQUEST['t6'];
	$code = $_REQUEST['t7'];
	if($nm == "" || $nm == NULL)
	{
		header("location:personal.php?msg=Name must be filled out");
	}
	else if(!preg_match("/^[a-zA-Z ]*$/",$nm))
	{
		header("location:personal.php?msg=Name is Invalid");
	}
	else if($emid == "" || $emid == NULL)
	{
		header("location:personal.php?msg=Email ID must be filled out");
	}
	else if(!filter_var($emid, FILTER_VALIDATE_EMAIL))
	{
		header("location:personal.php?msg=Email ID is Invalid");
	}
	else if($phone == "" || $phone == NULL)
	{
		header("location:personal.php?msg=Contact Number must be filled out");
	}
	else if(strlen($phone) != 10)
	{
		header("location:personal.php?msg=Contact Number must be valid");
	}
	else if($street == "" || $street == NULL)
	{
		header("location:personal.php?msg=Street Address must be filled out");
	}
	else if($city == "" || $city == NULL)
	{
		header("location:personal.php?msg=City must be filled out");
	}
	else if($state == "" || $state == NULL)
	{
		header("location:personal.php?msg=State must be filled out");
	}
	else if($code == "" || $code == NULL)
	{
		header("location:personal.php?msg=Zip Code must be filled out");
	}
	else{
		$sql = "insert into personal set user_id = '".$user_id."', name = '".$nm."', email = '".$emid."', contact = '".$phone."', street = '".$street."', city = '".$city."', state = '".$state."', pincode = '".$code."'";
		mysqli_query($con,$sql);
		header("location:educational.php?id=$user_id");
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Personal Information</title>
<script type="text/javascript" src="js/checkpersonal.js"></script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
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
            	<form method="post" name="form" onsubmit="return checkPersonal(form);">
                    <fieldset style="background:rgba(0.0,0.0,0.0,0.5); border:white 3px solid; padding:20px; margin-top:70px;">
                        <h2 style="color:white; font-weight:bold; margin-bottom:10px;" align="center">Personal Information</h2>
                        <?php
						$id = $_REQUEST['id'];
						$result = mysqli_query($con,"select * from signup where id = '".$id."'");
						$row = mysqli_fetch_array($result);
						?>
                        <input type="hidden" name="user_id" value="<?php echo $id; ?>" />
                        <div class="col-md-12">
                            <div class="form-group">
                            	<label for="exampleInputText1" style="color:white;">Name</label>
                                <input type="text" name="t1" class="form-control txt" value="<?php echo $row['name']; ?>" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	<label for="exampleInputEmail1" style="color:white;">Email ID</label>
                                <input type="email" name="t2" class="form-control txt" value="<?php echo $row['email']; ?>" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	<label for="exampleInputText1" style="color:white;">Contact Number</label>
                                <input type="text" name="t3" class="form-control txt" required />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            	<label for="exampleInputAddress1" style="color:white;">Street Address</label>
                                <input type="text" name="t4" class="form-control txt" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputCity1" style="color:white;">City</label>
                                <input type="text" name="t5" class="form-control txt" required />
                        	</div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleFormControlSelect2" style="color:white;">State</label>
                                <select class="form-control" name="t6" id="exampleFormControlSelect2">
                                	<option selected="selected" disabled="disabled">Select State</option>
                                    <?php
										$res = mysqli_query($con,"select * from states");
										while($row = mysqli_fetch_array($res)){
									?>
                                    <option><?php echo $row["name"]; ?></option>
                                    <?php } ?>
                                </select>
                        	</div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            	<label for="exampleInputZip1" style="color:white;">Zip Code</label>
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
  
</div>

</body>
</html>