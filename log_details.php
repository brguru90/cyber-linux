<?php
	session_start();
	if (isset($_COOKIE['user']) && isset($_COOKIE['type']))
	{
		$_SESSION['user']=$_COOKIE['user'];
		$_SESSION['type']=$_COOKIE['type'];
	}
	if (!isset($_SESSION['user']))
	{
		$_SESSION['location']= 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];//go to current page after login
		header('Location:login.php');
	}
	//print_r($_SESSION);
?>