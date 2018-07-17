<?php include('log_details.php');?>
<?php
if($_SESSION["type"]!="Administrator")
{
	header('Location: login.php');
}
?>
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
.not{border:none;word-wrap: break-word;font-size:16px;}
.not td{border:none;color:black;text-align:left;padding:5px 5px 5px 5px;}
.not th{border:none;color:green;text-align:left;padding:5px 5px 5px 5px;font-weight:bold;}
#cls table{border:solid silver 1px;}
#cls *{font-size:16px;}
.sub{width:100px;height:25px;float:left;margin-right:5px;}
textarea{width:150px;height:20px;max-width:150px;max-height:20px;}
#contents input[type='button'],#contents input[type='submit']{
	width:120px;
	height:34px;
	font-size:20px;
	border-radius:5px;
	position:relative;
	top:5px;
	background-color:blue;
	color:white;
}
</style>
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
$sql="select * from login order by user";
$conn->query($sql);
$res=$conn->query($sql);
if ($res->num_rows > 0) 
{
echo "<form action='delete_acc.php' method='post'>
		<table border='2' class='not'>
			<tr style='border-bottom:solid 1px black;'>
				<th style='padding-top:10px'>Name</th>
				<th style='padding-top:10px'>Password</th>
				<th style='padding-top:10px'>Account type</th>
				<th style='padding-top:10px'>Mobile number</th>
				<th colspan='2'></th>
			</tr>";

	while($row = $res->fetch_assoc()) 
	{
		$user=$row['user'];
		$pwd=$row['pwd'];
		$type=$row['type'];
		$mob_no=$row['mob'];
		
		echo "
			<tr>
				<td style='width:400px'>$user</td>
				<td style='width:150px'>$pwd</td>
				<td style='width:150px'>$type</td>
				<td style='width:150px'>$mob_no</td>
				<td style='width:100px'><input type='checkbox' name='name[$user]' value='del' />delete</td>
				";	

	}
	echo "</tr>
	</table><br />
	<input type='submit' value='Delete marked' class='sub' />
	</form>";
}
echo "
	<input type='button' value='Add' class='sub' onclick='insert()'/>";
$conn->close();
?> 
<script>
function insert()
{
	var text="<br /><br /><br /><br /><center><form id='cls' action='client_ins.php' method='post'><table><tr><td>user_id:</td><td>password:</td><td>Account type:</td><td>Mobile no:</td></tr><tr><td><input type='text' value='' name='user' /></td><td><input type='password' value='' name='pwd'></td><td><select name='type'><option>Administrator</option><option>client</option></select></td><td><input type='text' value='' maxlength='10' name='mob'></td></tr></table><br /><input type='submit' value='submit' class='sub'/><input type='button' value='close' onclick='closeit()' class='sub' /></form></center><br />";
	document.getElementById('form').innerHTML=text;
}
function closeit()
{
	document.getElementById('form').innerHTML="";
	//document.getElementById('cls').style.display='none';
}
</script>
<div id='form'></div>
</div>
<?php include("footer.php") ?>