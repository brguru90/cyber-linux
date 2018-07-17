<?php
	include('db.php');
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
				$sql="select * from notes order by id";
				$result=$conn->query($sql);
				if ($result->num_rows > 0) 
				{
					while($row = $result->fetch_assoc()) 
					{
						echo "<table><tr><td><a href='".$row['link']."'>".$row['note']."</a></td></tr></table>";
					}
				}
	$conn->close();
?>