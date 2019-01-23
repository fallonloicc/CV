<?php
	session_start();
	include("login.php");
		if (isset($_SESSION['email'])) 
		{	
			include("home.php");
		}
		else 
		{
			include ("formlogin.php");
		}
?>