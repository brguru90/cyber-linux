<?php
session_start();
	if (isset($_COOKIE['user']))
	{
		$_SESSION['user']=$_COOKIE['user'];
	}
	if(isset($_SESSION['user']))
	{
		header('Location:admin_service.php');
	}
	include("header.php"); 
?>
<style>
.login-pad{
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
.login-pad h4{
	color:green;
}
table{
	border:solid silver 1px;
	padding:10px 10px 10px 10px;
}
input[type="text"],input[type="password"]{
	padding:2px 6px 2px 6px;
	width:100px;
	height:18px;
}
.sub{
	font-size: 1em;
    background: #4FC1E9 none repeat scroll 0% 0%;
    color: #FFF;
    text-align: center;
    border: medium none;
	border-radius:2px;
    outline: medium none;
    font-family: "Roboto-Regular";
    margin-bottom: 0.1em;
	margin-top: 0.1em;
    //display: block;
    transition: all 0.5s ease 0s;
	padding:2px 2px 2px 2px;
}
label{padding-left:5px;}
</style>
<script src="api/jquery.js"></script>
<div  id="contents">
		<br />
		<!-------------------------------------------------------->
			<div id="login">
					<div class="bbbbb" id='adm'>
						<div class="login-pad">
							<h4>PASSWORD RECOVERY:</h4><br />
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
							echo "<form action='send_pwd.php' method='post'><b style='color:LawnGreen;font-weight:bold;font-size:15px;'>Select your account:</b><br />";

								while($row = $res->fetch_assoc()) 
								{
									$user=$row['user'];									
									echo "<label style='color:blue'><input type='radio' name='user' value='$user' />$user</label><br />";	
								}
								echo "<input type='submit' value='Get password' class='sub' />
								</form>";
							}
							$conn->close();
					?> 
						</div>
					</div>
				</div>
				<br />
	</div>
	<br />
 <?php include("footer.php"); ?>