<?php
error_reporting(0);
include "connection.php";
$nm = $_REQUEST['msg'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="6;url=login.php">
<title>Resume Builder | Welcome</title>
<style>
	body{
		margin:0;
		padding:0;
		overflow:hidden;
		background:#82ccdd;
	}
	div{
		position:absolute;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%) scale(0);
		display:flex;
		justify-content:center;
		align-items:center;
		overflow:hidden;
		border-radius:50%;
		box-shadow:inset 0 50px 150px rgba(0,0,0,1);
		border-bottom:1px solid #fff;
		animation:animate 1s ease-in-out forwards;
	}
	@keyframes animate{
		0%{
			tranform:translate(-50%,-50%) scale(0);
		}
		100%{
			transform:translate(-50%,-50%) scale(1);
		}
	}
	div:nth-child(1){
		width:1500px;
		height:1500px;
		animation-delay:0s;
	}
	div:nth-child(2){
		width:1250px;
		height:1250px;
		animation-delay:0.5s;
	}
	div:nth-child(3){
		width:1000px;
		height:1000px;
		animation-delay:1s;
	}
	div:nth-child(4){
		width:750px;
		height:750px;
		animation-delay:1.5s;
	}
	div:nth-child(5){
		width:500px;
		height:500px;
		animation-delay:2s;
	}
	div:nth-child(5) img{
		max-width:250px;
		z-index:-1;
		transform:translateY(500px);
		animation:animateLogo 1s ease-in-out forwards;
		animation-delay:3s;
	}
	@keyframes animateLogo{
		0%{
			transform:translateY(500px);
		}
		100%{
			transform:translateY(0px);
		}
	}
</style>
</head>

<body>
	<div></div>
    <div></div>
    <div></div>
    <div></div>
    <div>
    	<img src="images/A3web.png" />
    </div>
</body>
</html>