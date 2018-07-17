<?php include('log_details.php');?>	
<?php
include('db.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['name']))
{
	$id=$_POST['name'];
	$rec=0;
}
else
{
	echo "<script>alert('none of element selected');history.go(-1);</script>";
	exit;
}
foreach($id as $key=>$values)
{
	$sql="delete from contacts where id='$key'";
	$conn->query($sql);
	if(mysqli_affected_rows($conn)>0)
	{
		$rec++;
	}
	//echo mysqli_affected_rows($conn);
}
echo "<script>alert('$rec record deleted');history.go(-1);</script>";
?>