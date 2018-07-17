<?php include('log_details.php');?>
<?php include("header.php") ?>
<?php
		if(isset($_SESSION["user"]))
		{
			echo "
		<div class='log'>
			<form action='logout.php' method='post' class='login'>
				<input  style='padding:5px 5px 5px 5px' type='submit' value='Logout' name='logout'/><b>";
				echo $_SESSION["user"]."</b>";
		echo "
			</form>
		</div>";
		}
	?>	
<div  id="contents"><br /><br />	
<?php
include('db.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "create table feedback
(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(20)NOT NULL,
msg VARCHAR(2000) NOT NULL
);";
$conn->query($sql);
$sql="select * from feedback;";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
	echo "<style>
			.mytb th{color:green;font-size:18px}
			.a{width:30%}
			.b{width:60%}
			.c{width:10%}
			.mytb td,.mytb th{border:solid white 1px;padding:15px 5px 15px 5px;}
			.mytb{width:100%;color:blue;text-transform: capitalize;background:transparent url(\"images/form1.png\") no-repeat;background-size:cover;}
			.sub{float:right;width:120px;height:34px;font-size:20px;border-radius:5px;position:relative;top:5px;right:5px;background-color:blue;color:white;}
		</style>
		<form action='admin_fb_del.php' method='post'>
		<center><table class='mytb'>
			<tr>
				<th id='myip' class='a'>name</th>
				<th id='myip' class='b'>Comments</th>
				<th id='myip' class='c'>Delete</th>
			</tr>";
			
    while($row = $result->fetch_assoc()) 
	{
		$name=$row['name'];
		$msg=$row['msg'];
		$id=$row['id'];
		if(strlen($row['name'])>1)
		{
			echo "<tr>
					<td>$name</td>
					<td>$msg</td>
					<td><input type='checkbox' name='fb[$id]' value='del' /></td>
				</tr>";
		}
    }
	echo "<br /></table>
	   	  <input type='submit' value='Delete marked' class='sub'/>
		  </form>
			</center>";
	
}
$conn->close();
?> 
<br /><br /></div><br />
<?php include("footer.php") ?>
