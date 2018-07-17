<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title id="title">ADMIN</title>
</head>
<body>	
<?php
include('db.php');
echo "<br />
<input type='button' value='back' onclick='history.go(-1)' /><br />";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$id=$_SESSION["user"];
$pwd=$_POST['pwd'];
$mob=$_POST['mob'];
	//echo "$key : $values<br />";
	$sql="UPDATE login SET mob='$mob',pwd='$pwd' WHERE user='$id'";
	$conn->query($sql);
	if(mysqli_affected_rows($conn)>0)
	{ 
		echo "<script>alert('updated');history.go(-2);</script>";
	}
	else
	{
		echo "<script>alert('no changes');history.go(-1);</script>";
	}
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
				header('Location: login.php');
			}
?>
</body>
</html>