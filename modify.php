<?php include('log_details.php');?>
<?php include("header.php") ?>
<style>
input,select{position:relative;left:10px;}
</style>
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
	$id=$_SESSION["user"];
	$sql="select * from login WHERE user='$id'";
	$result=$conn->query($sql);
	if ($result->num_rows > 0) 
	{
		echo "<form action='acc_update.php' method='post'>";
    //sending sms
		while($row = $result->fetch_assoc()) 
		{
			
			echo "
			<input name='user' type='text' value='".$row['user']."' onfocus='this.blur()' /><br />
			<input name='pwd' type='password' value='".$row['pwd']."' /><br />
			<input name='mob' type='text' maxlength='10' value='".$row['mob']."' /><br />
			
			";
		}
		echo "<input type='submit' value='submit' class='sub'/>
		<input type='button' value='back' onclick='history.go(-1)' /></form>";
	}
$conn->close();
?> 

</div>
<?php include("footer.php") ?>