<?php include('log_details.php');?>
<?php include("header.php") ?>			
<style>
li a{font-size:15px;font-weight:bold;}
.admin{border:none;background-color:PowderBlue;width:800px;text-transform: capitalize;}
.admin td{border:none;color:blue;text-align:left;padding:5px 5px 5px 5px;}
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
$name=$_POST['name'];
$mob_no=$_POST['mob_no'];
$year=$_POST['year'];
$branch=$_POST['branch'];
$sem=$_POST['sem'];
$sql="insert into contacts (name,mob_no,year,branch,sem) values ('$name','$mob_no','$year','$branch','$sem');";
if($conn->query($sql))
{
	echo "<script>alert('inserted');history.go(-1);</script>";
}
else
{
	echo "<script>alert('failed to insert');history.go(-1);</script>";
}
$conn->close();
?> 
<?php include("footer.php") ?>