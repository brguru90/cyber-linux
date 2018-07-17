<?php
include('db.php');
include("sms/guru2.php");
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['user']))
{
	$user=$_POST['user'];
}
else
{
	echo "<script>alert('none of element selected');history.go(-1);</script>";
	exit;
}
	$sql="select * from login where user='$user'";
	$conn->query($sql);
	$res=$conn->query($sql);
	if ($res->num_rows > 0) 
	{
		while($row = $res->fetch_assoc()) 
		{
			$to=$row['mob'];
			$user=$row['user'];
			$pwd=$row['pwd'];
			$msg="Password Recovery:".chr (10)."Username: $user".chr (10)."Password: $pwd";
			echo send($to,$msg);
		}
	}
echo "<script>alert('Password has been sent into your registered mobile number.');history.go(-1);</script>";
?>