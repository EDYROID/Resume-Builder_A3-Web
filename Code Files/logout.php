<?php
session_start();
include "connection.php";
unset($_SESSION['a']);
unset($_SESSION['b']);
unset($_SESSION['c']);
header("location:index.php");
?>