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
<style>
.not{border:none;text-transform: capitalize;padding-left:10px;padding-right:10px;}
.not td,.not th{border:solid white 1px;text-align:left;padding:5px 5px 5px 5px;}
th{color:green;font-weight:bold;padding-left:4px;padding-top:10px}
td{font-weight:100;color:black;padding-left:4px;padding-top:10px}
.sub{width:100px;height:30px;float:left;margin-right:5px;font-size:18px;font-weight:bold;background-color:lime;color:white;border-radius:5px;}
</style>
<script src="api/jquery.js"></script>
<script>
$(document).ready(function(){	
	 $(".sel").click(function (){
		 if($(".selected").children().attr("checked")!="checked")
		 {
			$('.selected').each(function(idx, el) { 
				var aa=$(el).children().attr("name");
				$(el).html("<input type='checkbox' class='sele' checked='' name='"+aa+"' value='select' />select");
			});
		 }
		 else
		 {
			$('.selected').each(function(idx, el) { 
				var aa=$(el).children().attr("name");
				$(el).html("<input type='checkbox' class='sele' name='"+aa+"' value='select' />select");
			});
			
		 }
	 });
	 function search()
	 {
		 
		 if($(".selected").children().attr("checked")!="checked")
		 {
			$('.selected').each(function(idx, el) { 
				var aa=$(el).children().attr("name");
				$(el).html("<input type='checkbox' class='sele' checked='' name='"+aa+"' value='select' />select");
			});
		 }
		 else
		 {
			$('.selected').each(function(idx, el) { 
				var aa=$(el).children().attr("name");
				$(el).html("<input type='checkbox' class='sele' name='"+aa+"' value='select' />select");
			});
			
		 }
	 }
	 
});
</script>
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
$sql="select * from contacts order by year desc,name";
$conn->query($sql);
$res=$conn->query($sql);
if ($res->num_rows > 0) 
{
echo "<form action='sending_sms.php' method='post'>
		<br /><h2 style='color:green'>Enter message:<h2><textarea name='message' value='' rows='5' style='max-width:200px;max-height:80px' cols='40' maxlength='120'></textarea><br />

		<table border='2' class='not'>
			<tr>
				<th>Name:</th>
				<th>Mobile number:</th>
				<th colspan='2'><input type='checkbox' class='sel' value='select' />select all</th>
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
				<td style='width:400px' class='syear'>$year</td>
				<td style='width:150px' class='sbranch'>$branch</td>
				<td style='width:150px' class='ssem'>$sem</td>
				<td style='width:100px' class='selected'><input type='checkbox' class='sele' name='name[$id]' value='select' />select</td>
				";	

	}
	echo "</tr>
	</table><br />
	<input type='submit' value='Send >>' class='sub' />
	</form>";
}		
?>
<br /><br /></div><br />
<?php include("footer.php") ?>