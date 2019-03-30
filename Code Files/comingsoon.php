<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Coming Soon</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/buttonlink.css" rel="stylesheet" type="text/css" />
</head>

<body style="background:url(images/bg-01.jpg) center / cover;">
<div class="container">
	<div class="col-md-12" style="margin-top:200px;" align="center">
    	<h1 align="center" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; color:white;">Coming Soon...</h1>
        <?php
		error_reporting(0);
		include "connection.php";
		$id = $_REQUEST['id'];
		?>
        <a href="templates.php?id=<?php echo $id; ?>" class="buttonbody"
        style="border-radius:0px; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">
        	<span></span>
            <span></span>
            <span></span>
            <span></span>
        	Back to Templates
        </a>
    </div>
</div>
</body>
</html>