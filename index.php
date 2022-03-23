<?php
session_start();
if (!isset($_SESSION["nik"])) 
{
	header("Location:home.php");
}
else
{
	header("Location:login.php");
}
?>