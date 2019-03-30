<?php
error_reporting(0);
include "connection.php";
if(isset($_REQUEST['sub']))
{
	$nm = $_REQUEST['t1'];
	$em = $_REQUEST['t2'];
	$pswd = $_REQUEST['t3'];
	$rpswd = $_REQUEST['t4'];
	$sql = "select * from signup where email = '".$em."'";
	$result = mysqli_query($con,$sql);
	$nums = mysqli_num_rows($result);
	if($nums > 0)
	{
		header("location:signup.php?msg=Email ID already exists");
	}
	else if($nm == "" || $nm == NULL)
	{
		header("location:signup.php?msg=Name must be filled out");
	}
	else if(!preg_match("/^[a-zA-Z ]*$/",$nm))
	{
		header("location:signup.php?msg=Name is Invalid");
	}
	else if($em == "" || $em == NULL)
	{
		header("location:signup.php?msg=Email ID must be filled out");
	}
	else if(!filter_var($em, FILTER_VALIDATE_EMAIL))
	{
		header("location:signup.php?msg=Email ID is Invalid");
	}
	else if($pswd == "" || $pswd == NULL)
	{
		header("location:signup.php?msg=Password must be filled out");
	}
	else if($rpswd == "" || $rpswd == NULL)
	{
		header("location:signup.php?msg=Password must be re-entered");
	}
	else if($rpswd != $pswd)
	{
		header("location:signup.php?msg=Password should be Matched");
	}
	else{
		$sql = "insert into signup set name = '".$nm."', email = '".$em."', password = '".$pswd."', repassword = '".$rpswd."'";
		mysqli_query($con,$sql);
		header("location:welcome1.php?msg=$nm");
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resume Builder | SignUp</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="images/A3web.png" rel="shortcut icon" />
<style>
.boton{ background:black; color:white; border:black 1px solid;border-radius:24px;font-size:18px;font-weight:bold;text-transform:uppercase; }
.boton:hover{ background:#82ccdd;color:black;border:white 1px solid;border-radius:24px; }
.link{ font-size:20px;color:#1670ff; text-decoration:none; }
.link:hover{ color:#82ccdd; text-decoration:none; }
</style>
</head>

<body style="background:url(images/bg-01.jpg) center / cover;">
<div class="container-fluid" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif">
	<div class="col-md-12">
    	<div class="col-md-4"></div>
        <div class="col-md-4" style="margin-top:70px;">
        	<form method="post" name="form" onsubmit="return checkSignupForm(form)">
            	<fieldset style="border-radius:20px; padding:20px; background:white;">
                	<h2 style="color:black;font-weight:bold; margin-top:0px;" align="center">Sign Up</h2>
                	<div class="form-group">
                    	<label for="exampleInputText1" style="color:black;">Name</label>
                    	<input type="text" name="t1" class="form-control box" style="margin-bottom:10px; background:none; color:black;" required />
                    </div>
                    <div class="form-group">
                    	<label for="exampleInputEmail1" style="color:black;">Email ID</label>
                    	<input type="text" name="t2" class="form-control box" style="margin-bottom:10px; background:none; color:black;"
                        placeholder="xyz@abc.com" required />
                    </div>
                    <div class="form-group">
                    	<label for="exampleInputPassword1" style="color:black;">Password</label>
                    	<input type="password" name="t3" id="t3" class="form-control box" style="margin-bottom:10px; background:none; color:black;"
                        required />
                    </div>
                    <div class="form-group">
                    	<label for="exampleInputPassword2" style="color:black;">Re-enter Password</label>
                    	<input type="password" name="t4" id="t4" class="form-control box" style="margin-bottom:10px; background:none; color:black;"
                        required />
                    </div>
                    <div class="form-group" align="center">
                    	<input type="submit" name="sub" value="Sign Up" class="btn btn-primary boton" />
                    </div>
                    <div class="form-group" align="center">
                    	<p style="font-size:18px; color:black;">
                        	Already have an account ? <a href="login.php" class="link">Login</a>
                        </p>
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
        <div class="col-md-4"></div>
    </div>
</div>
<script type="text/javascript" src="js/checksignup.js"></script>
</body>
</html>