<?php include("header.php"); ?>
<style>
	#contents{
		padding-bottom:20px;
	}
	#cc{width:1000px;}
	#ll{width:220px;height:180px;float:right;}
	#rr{width:720px;float:right;text-align:left;padding-left:20px;line-height:28px;font-size:18px;}
	#rl{width:350px;float:left;}
	#lr{width:280px;float:right;}
	form{
		background-color:white;
		border-radius:10px;
		width:250px;
		text-align:center;
		padding:5px 5px 15px 5px;
		text-transform:capitalize;
	}
	form input,form textarea{
		width:220px;
		min-width:100px;
		min-height:25px;
		max-width:220px;
		max-height:60px;
	}
	input[type="submit"],input[type="text"]{
		height:25px;
	}
	form b{
		color:blue;
	}
	form input[type="submit"]{
		color:purple;
		font-weight:bold;
		font-size:18px;
		text-transform:capitalize;
	}
</style>
	<div  id="contents"><br /><br />
	<hr color="white"/>
	<h1 style="padding-top:5px;padding-bottom:5px;padding-left:10px;color:green">Contact Us,</h1>
	<hr color="white"/>
	<br />
	<div id="cc">
		<div id="rr">
			<div id="rl">
				<ul style="text-align:left;padding-left:45px;line-height:25px;font-size:18px;list-style-type:none">
					<li><b>Name:</b>Vinayaka</li>
					<li><b>city:</b>Sorab</li>
					<li><b>District:</b>Shimoga</li>
					<li><b>State:<b>Karnataka</li>
					<li><b>Country:</b>India</li>
					<li><b>Pincode:</b>577429</li>
					<li><b>Mobile No:</b>0123456789</li>
					<li><b>Email Id:</b>abcd@efgh.com</li>
					<li><b>Website</b>this web site address once again</li>
				</ul>
			</div>
			<div id="lr">
				<form action="feedback.php" method="POST">
				<h4 style="color:green;"><u>Feedback:</u></h4>
					<b>Enter your name</b><br />
					<input type="text" value="" name='name' required="required" /><br />
					<b>post your comments</b><br />
					<textarea rows="4" cols="30" name="msg" required="required" ></textarea><br />
					<input type='submit' class="sub" value="submit"/>
				</form>
			</div>
			<br />
		</div>	
		
		<div id="ll"  style="background: url(images/4.jpg);background-repeat:no-repeat;background-size:contain;">
		photo of owner
		</div>
	</div>
	<br /><br /><br />
	
	</div>
	<br />
 <?php include("footer.php"); ?>