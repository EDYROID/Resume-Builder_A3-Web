<?php
error_reporting(0);
session_start();
include "connection.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resume Builder | Welcome</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/design.css" rel="stylesheet" type="text/css" />
<link href="css/welcome.css" rel="stylesheet" type="text/css" />
<style>
.link{ font-size:20px ;color:white; text-decoration:none; }
.link:hover{ color:black; text-decoration:none; }
</style>
</head>

<body style="background:url(images/bg-01.jpg) center /  cover;">
<div class="container-fluid" style="font-family:'Times New Roman', Times, serif; margin-top:150px;">
	<div class="col-md-12" align="center">
    	<h1 style="font-weight:bold; color:white; margin-bottom:50px;">
        	Welcome! 
			<?php if($_REQUEST['msg']) 
			{ 
				echo $_REQUEST['msg'];
			} 
			?><br/>
        </h1>
        <h4 style="color:white;">
        	<a class="link" style="cursor:pointer; text-transform:uppercase;" href="login.php">
        		Click to login
            </a>
        </h4>
    </div>
</div>
</body>
</html>