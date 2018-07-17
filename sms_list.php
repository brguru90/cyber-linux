<?php include('log_details.php');?>
<?php include("header.php"); ?>
<style>
#kkk{
	position:relative;
	left:50px;
	padding-left:30px;
	padding-top:20px;
	padding-bottom:20px;
	padding-right:20px;
	background-color:white;
	border-radius:10px;
	width:400px;
}
#kkk h3{
	color:green;
}
#kkk ul{
	list-style-type:none;
}
#kkk li{
	line-height:22px;
	font-size:18px;
}
#kkk li a{
	text-decoration:none;
}
</style>
<script src="api/jquery.js"></script>
<div  id="contents">
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
	<br />
	<div id="kkk">
		<h3>ADMIN OPERATION:</h3><br />
		<ul>
			<li><a href="view.php">View Uploaded files</a></li>
			<li><a href="delete.php">Delete uploded files</a></li>
			<li><a href="sms_list.php">Add delete mobile numbers</a></li>
			<li><a href="send_sms.php">Send sms</a></li>
			<li><a href="view_feedback.php">view feedback</a></li>
		</ul>
	</div>
	<br />
	</div>
	<br />
 <?php include("footer.php"); ?>