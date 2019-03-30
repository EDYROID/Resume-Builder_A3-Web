<?php
function demo()
{
 if(!isset($_SESSION['a']))
 {
	 header("location:index.php");
 }
}
?>