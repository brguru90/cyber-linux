<?php include('log_details.php');?>
<!DOCTYPE html>
<html>
<head>
<title id="title">ADMIN</title>
<style>
#ip{width:200px}
</style>
</head>
<body>	
<?php
include('db.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
	$id=$_GET['id'];
	$sql="select * from contacts WHERE id='$id'";
	$result=$conn->query($sql);
	if ($result->num_rows > 0) 
	{
		echo "<form action='admin_note_update.php' method='post'>";
    //sending sms
		while($row = $result->fetch_assoc()) 
		{
			
			echo "
			<input id='ip' type='text' value='$id' onfocus='this.blur()' name='id' /><br />
			<textarea id='ip' name='name'>".$row['name']."</textarea><br />
			<textarea id='ip' name='mob_no'>".$row['mob_no']."</textarea><br />
			<textarea id='ip' name='year'>".$row['year']."</textarea><br />
			<textarea id='ip' name='branch'>".$row['branch']."</textarea><br />
			<textarea id='ip' name='sem'>".$row['sem']."</textarea><br />
			";
		}
		echo "<input type='submit' value='submit' class='sub'/>
		<input type='button' value='back' onclick='history.go(-1)' /></form>";
	}
?>
</body>
</html>