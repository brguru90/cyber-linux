<?php
session_start();
	if (isset($_COOKIE['user']))
	{
		$_SESSION['user']=$_COOKIE['user'];
	}
	if (isset($_SESSION['user']))
	{
		header('Location:admin_service.php');
	}
include('db.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
//---------first time login table creation----------
$sql = "create table login
(
user VARCHAR(20) UNIQUE,
pwd VARCHAR(20) NOT NULL,
type VARCHAR(20) NOT NULL,
mob DECIMAL(10) NOT NULL UNIQUE
);";
$conn->query($sql);
$sql="insert into login values('admin','12345','Administrator','9482399078')";
$conn->query($sql);
$sql="insert into login values('guru','9611','client','9480473372')";
$conn->query($sql);
$user=$_POST["user"];
$pwd=$_POST["pwd"];
$sql="select * from login where user='".$user."';";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
        $passwd=$row["pwd"];
		$type=$row["type"];
		if($pwd==$passwd)
		{
			if(isset($_POST["loginkeeping"]))
			{
				setcookie("user",$user, time() + (86400), "/");
				setcookie("type",$type, time() + (86400), "/");
			}	
			$_SESSION["user"]=$user;
			$_SESSION["type"]=$type;
			header('Location: admin_service.php');
		}
		else
		{
			echo "<script>alert('entered password is incorrect');history.go(-1);</script>";
			
		}
    }
	} else {
   echo "<script>alert('you have entered invalid user name');history.go(-1);</script>";
}
 

$conn->close();
?> 