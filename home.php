<?php include("header.php"); ?>
<style>
	#cc{width:1000px;}
	#ll{width:220px;height:180px;float:right;}
	#rr{width:750px;height:230px;float:right;text-align:left;padding-left:20px;line-height:28px;font-size:18px;}
	#r1{float:left;width:48%;height:100%;}
	#r2{float:right;width:48%;height:100%;}
</style>
	<div  id="contents">
		<br />
		<h1 style='color:#008000;font-weight:900;font-family:Lucida Calligraphy;'>Malnad Computer Service Center</h1><br />
		<center><div style="background: url(images/4.jpg);width:980px;height:400px;background-repeat:no-repeat;background-size:cover;">computer logo</div></center>
		<div id="cc">
			<br />
			<hr color="white" />
			<center><h2 style='color:#008000;font-weight:600;font-family:Segoe UI;text-decoration:underline;'>Picture name</h2></center><br />
			<hr color="white"/>
			<h2 style='color:#008000;font-weight:600;font-family:Segoe UI;text-decoration:underline;padding-left:10px;'>Description</h2><br />
				<div id="rr">
					<div id="r1">
						<b>Owner:</b>Vinayaka<br />
						<b>*****:</b>@@@@@@@@<br />
						<b>*****:</b>@@@@@@@@<br />
						<b>*****:</b>@@@@@@@@<br />
						<b>*****:</b>@@@@@@@@<br />
					</div>
					<div id="r2">
						<center><h4>Notification:</h4></center>
						<marquee onmouseover="this.stop();" onmouseout="this.start();" scrollamount="2" scrolldelay="1" direction="down" style='width:90%;word-wrap:break-word;border:solid silver 1px;'>
								<iframe style='border:none' src="display_notification.php"></iframe>
						</marquee>
					</div>
				</div>
				<div id="ll" style="background: url(images/4.jpg);background-repeat:no-repeat;background-size:contain;"></div>
			<br />
			<hr color="white"/>
			<br /><br />
		</div>
		
		<br /><br /><br /><br />
	</div>
	<br />
 <?php include("footer.php"); ?>