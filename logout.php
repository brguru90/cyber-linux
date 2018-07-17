<?php
session_start();
		$log=$_POST["logout"];
		if($log=="Logout")
		{
			if(isset($_SESSION["file_opened"]))
			{
				unset($_SESSION['file_opened']);
			}
			if(isset($_SESSION["type"]))
			{
				unset($_SESSION['type']);
			}
			if (isset($_SESSION['user']))
			{
				// destroy the session
				//session_destroy();
				unset($_SESSION['user']);
				//set the cookie value as already expired
				setcookie('user', '', time() - 3600, '/');
				setcookie('type', '', time() - 3600, '/');
				//setcookie('admin', '', time() - 3600, '/');
				echo "<script>alert('logout');</script>";
				
				// Login pager deirect to home
				header('Location: home.php');
			}
		}
?>