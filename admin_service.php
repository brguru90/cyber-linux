<?php include('log_details.php');?>
<?php include("header.php"); ?>
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
	#note
	{
		position:fixed;
		top:1px;
		right:20px;
		z-index:100;
	}
	.sub{
	font-size: 1.2em;
    background: #4FC1E9 none repeat scroll 0% 0%;
    color: #FFF;
    padding: 6px;
    text-align: center;
    border: medium none;
    outline: medium none;
    font-family: "Roboto-Regular";
    width: 100px;
    margin-bottom: 0.1em;
	margin-top: 0.1em;
    //display: block;
    transition: all 0.5s ease 0s;
}
#notification .ip{
	width:230px;
	height:25px;
	max-width:230px;
	min-width:230px;
	max-height:25px;
	min-height:25px;
	padding:6px;
	font-size:14px;
	font-weight:100;
}
#notification #iip{
	height:124px;
	max-height:124px;
	min-height:124px;
}
#notification #bt{
	width:245px;
	padding:6px;
	font-size:9px;
	font-weight:100;
}
#notification{
	border:solid 1px blue;
	border-radius:5px;
	width:250px;
	height:162px;
}
#notification td{
	border:solid 1px lime;
	padding:1.5px 1.5px 1.5px 1.5px;
}

	</style>
	<script>
	var flag=0;
	$(document).ready(function(){
		$("#notification").animate({top:'0px',height:'0px'});
			function show()
			{
				document.getElementById('notification').style.display='block';
				$("#iip").focus();
				$("#iip").select();
			}
			function hide()
			{
				setTimeout(function(){  document.getElementById('notification').style.display='none';}, 600);	
			}
		$("#form").click(function(){
		//var text="<br /><form action='admin_note_ins.php' method='post'><table ><tr><td>NOTE:</td><td>LINK:</td></tr><tr><td><textarea name='note'></textarea></td><td><textarea name='link'></textarea></td></tr></table><br /><input type='submit' value='submit' class='sub'/></form>";			
			if(flag==0)
			{
				flag=1;
				$("#notification").animate({top:'50px',height:'232px'},'slow','swing',show());
			}
			else
			{
				flag=0;
				$("#notification").animate({top:'0px',height:'0px'},'slow','swing',hide());
			}
		});	
		$("#contents").click(function(){	
			if(flag==1)
			{
				flag=0;
				$("#notification").animate({top:'0px',height:'0px'},'slow','swing',hide());
			}
		});
		$("#kkk").mouseover(function(){	
			if(flag==1)
			{
				flag=0;
				$("#notification").animate({top:'0px',height:'0px'},'slow','swing',hide());
			}
		});
		$("#form").mouseover(function(){	
			if(flag==0)
			{
				flag=1;
				$("#notification").animate({top:'50px',height:'232px'},'slow','swing',show());
			}
		});
		
	});
	</script>
<script src="api/jquery.js"></script>
	<div id='note'>
			<input type="button" id="form" style="border-radius:5px;position:relative;left:15px;top:0px;width:100px;" class='sub' value="Update"/>
			<div id="notification" style="padding:5px 5px 5px 5px;background-color:aqua;position:relative;left:10px;top:0px;display:none;">
			   <center>
				<form action='insert_notification.php' method='post'>
					<table>
						<tr>
							<td><textarea id='iip' required="required" class='ip' onfocus="this.value=''" placeholder="Notification" name='note' ></textarea></td>
						</tr>
						<tr>
							<td><input class='ip' type='text' placeholder="URL" name='link'/></td>
						</tr>
						<tr>
							<td><center><input id='bt' type='submit' style='font-size:14px;' value='ADD' style='width:98%' class='sub'/></center></td>
						</tr>
					</table><br />
				</form>
			   </center>
			</div>
	</div>
<div  id="contents">
	<br />
	<div id="kkk">
		<h3>ADMIN OPERATION:</h3><br />
		<ul>
			<li><a href="view.php">View Uploaded files</a></li>
			<li><a href="admin_note.php">Add delete mobile numbers</a></li>
			<li><a href="send_sms.php">Send sms</a></li>
			<li><a href="view_feedback.php">View feedback</a></li>
			<li><a href="note.php">Delete notifications</a></li>
			<li><a href="modify.php">Modify account</a></li>
			<?php
			if($_SESSION["type"]=="Administrator")
			{
				echo "<li><a href='clients.php'>Add or delete client account</a></li>";
			}
			?>
		</ul>
	</div>
	<br />
	</div>
	<br />
 <?php include("footer.php"); ?>