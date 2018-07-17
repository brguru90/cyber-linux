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
<script src="api/jquery.js"></script>
<style>
li a{font-size:15px;font-weight:bold;}
.not{border:none;background-color:PowderBlue;background:transparent url("images/form1.png") no-repeat;background-size:cover;text-transform: capitalize;word-wrap: break-word;}
.not td{border:none;color:black;text-align:left;padding:5px 5px 5px 5px;}
td{border:solid 1px blue}
.sub{width:100px;height:25px;float:left;margin-right:5px;}
textarea{width:150px;height:20px;max-width:150px;max-height:20px;}
form{padding-left:10px;}
.sub{
	font-size: 1.2em;
    background: #4FC1E9 none repeat scroll 0% 0%;
    color: #FFF;
    text-align: center;
    border: medium none;
    outline: medium none;
    font-family: "Roboto-Regular";
    width: 120px;
    margin-bottom: 0.1em;
	margin-top: 0.1em;
    //display: block;
    transition: all 0.5s ease 0s;
}
</style>
<div  id="contents">
<?php
include('db.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "create table notes
(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
note VARCHAR(767) NOT NULL UNIQUE,
link varchar(500) default '#'
);";
$conn->query($sql);
$sql="select * from notes order by id";
$conn->query($sql);
$res=$conn->query($sql);
if ($res->num_rows > 0) 
{
echo "<form action='note_del.php' method='post'>
		<table border='2' class='not'>
			<tr style='border-bottom:solid 1px black;'>
				<td style='padding-top:10px'>Notification</td>
				<td style='padding-top:10px'>URL</td>
				<td colspan='2'></td>
			</tr>";

	while($row = $res->fetch_assoc()) 
	{
		$id=$row['id'];
		$note=$row['note'];
		$link=$row['link'];
		
		echo "
			<tr>
				<td style='width:400px'>$note</td>
				<td style='width:150px'>$link</td>
				<td style='width:100px'><input type='checkbox' name='note[$id]' value='del' />delete</td>
				";	

	}
	echo "</tr></table><br />
	<input type='submit' value='Delete marked' class='sub'/><br />
	</form><br />";
}
$conn->close();
?> 
</div>
<?php include("footer.php") ?>