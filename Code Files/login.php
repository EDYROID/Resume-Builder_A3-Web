<?php
error_reporting(0);
session_start();
include "connection.php";
if(isset($_REQUEST['sub']))
{
	$em = $_REQUEST['t1'];
	$pswd = $_REQUEST['t2'];
	$sql = "select * from signup where email = '".$em."' and password = '".$pswd."'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	$nums = mysqli_num_rows($result);
	if($em == "" || $em == NULL)
	{
		header("location:login.php?msg=Email ID must be filled out");
	}
	else if($pswd == "" || $pswd == NULL)
	{
		header("location:login.php?msg=Password must be filled out");
	}
	else if($nums > 0)
	{
		$_SESSION['a'] = $row['email'];
		$_SESSION['b'] = $row['password'];
		$_SESSION['c'] = $row['name'];
		$id = $row['id'];
		header("location:home1.php?id=$id");
	}
	else{
		header("location:login.php?msg=Email ID or Password must be Correct");
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<title>Resume Builder | Login</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="images/logo1.PNG" rel="shortcut icon" />
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
        <div class="col-md-4" style="margin-top:100px;">
        	<form method="post">
            	<fieldset style="border-radius:20px; padding:20px; background:white;">
                	<h2 style="color:black; font-weight:bold; margin-bottom:30px;" align="center">Login</h2>
                    <div class="form-group">
                    	<label for="exampleInputEmail1" style="color:black;">Email ID</label>
                    	<input type="email" name="t1" class="form-control" style="margin-bottom:30px; background:none; color:black;" required />
                    </div>
                    <div class="form-group">
                    	<label for="exampleInputPassword1" style="color:black;">Password</label>
                    	<input type="password" name="t2" class="form-control" style="margin-bottom:30px; background:none; color:black;" required />
                    </div>
                    <div class="form-group" align="center">
                    	<input type="submit" name="sub" value="Login" class="btn btn-primary boton" />
                    </div>
                    <div class="form-group" align="center">
                    	<p style="font-size:18px; color:black;">
                        	Don't have an account ? <a href="signup.php" class="link">Signup</a>
                        </p>
                    </div>
                    <div class="form-group" align="center">
                    	<p style="font-size:18px; color:black;">
                        	<a href="forget2.php" class="link">Forget Password?</a>
                        </p>
                    </div>
                    <!--<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
					<script>
                      function onSignIn(googleUser) {
                        // Useful data for your client-side scripts:
                        var profile = googleUser.getBasicProfile();
                        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
                        console.log('Full Name: ' + profile.getName());
                        console.log('Given Name: ' + profile.getGivenName());
                        console.log('Family Name: ' + profile.getFamilyName());
                        console.log("Image URL: " + profile.getImageUrl());
                        console.log("Email: " + profile.getEmail());
                
                        // The ID token you need to pass to your backend:
                        var id_token = googleUser.getAuthResponse().id_token;
                        console.log("ID Token: " + id_token);
                      }
                    </script>-->
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
</body>
</html>