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
	width:800px;
}
form *{display:inline;}
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
input,select{
	height:24px;
}
</style>
<script>
$(document).ready(function(){
$(".aaa").hide();
$(".cat option:first").attr("selected", "selected");
	$(".cat").ready(function (){
		if($(".cat").val()=="CREATE OWN")
		{
			$(".aaa").show();
			$(".aaa").select();
			$(".aaa").attr("name", "cat");	
			$(".cat").attr("name", "catt");			
		}
	});
	$(".cat").change(function(){
		if($(".cat").val()=="CREATE OWN")
		{
			$(".aaa").show();
			$(".aaa").select();
			$(".aaa").attr("name", "cat");	
			$(".cat").attr("name", "catt");			
		}
		else
		{
			$(".aaa").hide();
			$(".aaa").attr("name", "catt");	
			$(".cat").attr("name", "cat");				
		}
	});	
	$("input[type='file']").change(function(){
		$('form').trigger("submit");	
	});
});

</script>
	<div  id="contents">
	<br />
		<div id="kkk">
			<form style="position:relative;left:20px;top:0px;border:solid 1px silver;padding:10px 10px 10px 10px;width:80%;"  action="uploads.php" method="post"  enctype="multipart/form-data"> 
			<select name="cat" class="cat">
				<?php
				$list=array();
				$cur_dir=getcwd()."/file";
				$dir = scandir($cur_dir);
				foreach($dir as $val)
				{
					
					if($val!="." && $val!="..")
					{
						if(is_dir("$cur_dir/$val"))
						{
							$list[]=$val;
						}
					}
				}
				foreach($list as $val)
				{
					echo"<option>$val</option>";
				}
				?>
				<option>CREATE OWN</option>
			</select>
			<input type="text" value="" name="catt" class="aaa"/> 
			<input type="file" value="" name="fileToUpload" /> 
			<input type="submit" value="Upload" />
			</form>
		</div>
		<br />
	</div>
	<br />
 	 <?php include("footer.php"); ?>