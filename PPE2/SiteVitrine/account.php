<?php 
session_start();
if (isset($_SESSION['email'])) 
{
	echo 'Je te connais toujours ! Tu es ' . $_SESSION['email'];
}
else
{
	echo "non";
}
?>