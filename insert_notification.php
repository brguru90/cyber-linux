<?php include('log_details.php');?>
<?php
	include('db.php');
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "create table notes
	(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	note VARCHAR(767) NOT NULL,
	link varchar(500) default '#'
	);";
	$conn->query($sql);
	//default
	$sql="select * from notes;";
	$result=$conn->query($sql);
	if ($result->num_rows < 1) 
	{
		$conn->query('insert into notes (note,link) values ("computer science web notes avalible from 21/07/2016","#");');
	}
$note=$_POST['note'];
$link=$_POST['link'];

	$sql="insert into notes (note,link) values ('$note','$link');";
	if($conn->query($sql))
	{
		echo "<script>alert('inserted');history.go(-1);</script>";
	}
	else
	{
		//echo "Error: " . $sql . "<br>" . $conn->error;
		echo "<script>alert('failed to insert');history.go(-1);</script>";
	}
$conn->close();
?> 