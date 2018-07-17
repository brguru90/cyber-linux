<?php include('log_details.php');?>	
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
if(isset($_POST['name']) && isset($_POST['message']))
{
	$id=$_POST['name'];
	$msg=$_POST['message'];
}
else
{
	echo "<script>alert('none of element selected');history.go(-1);</script>";
	exit;
}
foreach($id as $key=>$values)
{
	$sql="select * from contacts where id='$key'";
	$conn->query($sql);
	$res=$conn->query($sql);
	if ($res->num_rows > 0) 
	{
		while($row = $res->fetch_assoc()) 
		{
			$to=$row['mob_no'];
			echo send($to,$msg);
		}
	}
}
echo "<script>alert('completed');history.go(-1);</script>";
?>