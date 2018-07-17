<?php include('log_details.php');?>
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
$id=$_POST['id'];
$name=$_POST['name'];
$mob_no=$_POST['mob_no'];
$year=$_POST['year'];
$branch=$_POST['branch'];
$sem=$_POST['sem'];
	//echo "$key : $values<br />";
	$sql="UPDATE contacts SET name='$name',mob_no='$mob_no',year='$year',branch='$branch',sem='$sem' WHERE id='$id'";
	$conn->query($sql);
	if(mysqli_affected_rows($conn)>0)
	{ 
		echo "<script>alert('updated');history.go(-2);</script>";
	}
	else
	{
		echo "<script>alert('no changes');history.go(-1);</script>";
	}
?>
</body>
</html>