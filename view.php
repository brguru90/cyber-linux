<?php include('log_details.php');?>
<?php include("header.php"); ?>
<style>
#kkk{
	position:relative;
	left:50px;
	padding-left:30px;
	padding-top:20px;
	padding-bottom:50px;
	padding-right:30px;
	background-color:white;
	border-radius:10px;
	width:750px;
	height:400px;
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
		<h3>VIEW FILES:</h3><br />
		<script>
			iframe.contentWindow.location.reload();
		</script>
		<iframe src="view0.php" id="aaaa" width="100%" height="100%"></iframe>
	</div>
	<br />
	</div>
	<br />
 <?php include("footer.php"); ?>