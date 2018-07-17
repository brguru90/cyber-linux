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
</style>
<?php
include('db.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "create table contacts
(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(767) NOT NULL,
mob_no DECIMAL(10) UNIQUE,
year VARCHAR(4) NOT NULL,
branch VARCHAR(20) DEFAULT 'OTHER',
sem VARCHAR(5) DEFAULT 'OTHER'
);";
$conn->query($sql);
$sql="select * from contacts order by id";
$conn->query($sql);
$res=$conn->query($sql);
if ($res->num_rows > 0) 
{
echo "<form action='admin_notes_del.php' method='post'>
		<table border='2' class='not'>
			<tr style='border-bottom:solid 1px black;'>
				<td style='padding-top:10px'>Name</td>
				<td style='padding-top:10px'>Mobile No</td>
				<td style='padding-top:10px'>YEAR</td>
				<td style='padding-top:10px'>BRANCH</td>
				<td style='padding-top:10px'>SEM</td>
				<td colspan='2'></td>
			</tr>";

	while($row = $res->fetch_assoc()) 
	{
		$id=$row['id'];
		$name=$row['name'];
		$mob_no=$row['mob_no'];
		$year=$row['year'];
		$branch=$row['branch'];
		$sem=$row['sem'];
		
		echo "
			<tr>
				<td style='width:400px'>$name</td>
				<td style='width:150px'>$mob_no</td>
				<td style='width:400px'>$year</td>
				<td style='width:150px'>$branch</td>
				<td style='width:150px'>$sem</td>
				<td style='width:50px'><u><a style='width:20px;color:black' href='admin_notes_updt.php?id=$id'>modify</a></u></td>
				<td style='width:100px'><input type='checkbox' name='name[$id]' value='del' />delete</td>
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
	var text="<br /><form id='cls' action='admin_note_ins.php' method='post'><table ><tr><td>Name:</td><td>Mobile no:</td><td>Year:</td><td>Branch:</td><td>Sem:</td></tr><tr><td><textarea name='name'></textarea></td><td><textarea name='mob_no' maxlength='10'></textarea><td><textarea name='year' maxlength='4'></textarea></td><td><select name='branch'><option>CS</option><option>CIVIL</option><option>EC</option><option>CP</option><option>OTHER</option></select></td><td><select name='sem'><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>OTHER</option></select></tr></table><br /><input type='submit' value='submit' class='sub'/><input type='button' value='close' onclick='closeit()' class='sub'/></form>";
	document.getElementById('form').innerHTML=text;
}
function closeit()
{
	document.getElementById('form').innerHTML="";
	//document.getElementById('cls').style.display='none';
}
</script>
<div id='form'></div>
<?php include("footer.php") ?>