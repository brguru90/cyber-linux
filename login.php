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
</style>
<script src="api/jquery.js"></script>
<div  id="contents">
		<br />
		<!-------------------------------------------------------->
			<div id="login">
					<div class="bbbbb" id='adm'>
						<div class="login-pad">
							<h4>USER LOGIN:</h4><br />
							<form  action="loging.php" method="post">
								<table>
									<tr>
										<td>
								<input type="text" value="" name="user" placeholder="username"  onfocus="this.value='';this.select()" onblur="if (this.value == '') {this.value = 'Username';}" required>
										</td>
										<td></td>
									</tr>
									<tr>
										<td>
								<input type="password" value="" name="pwd" placeholder="password" onfocus="this.select()" onblur="if (this.value == '') {this.value = 'Password';}" required>			</td>
										<td>
								<p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
								
										</td>
									</tr>
									<tr>
										<td>
								<input style='font-family:guru' type="submit" value="SIGN IN">
								<a style='font-family:guru' href="recover_pwd.php">Forgot Password</a>
										</td>
									</tr>
								</table>
								<br />
							</form>
						</div>
					</div>
				</div>
				<br />
	</div>
	<br />
 <?php include("footer.php"); ?>