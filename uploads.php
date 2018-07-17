<?php
if(isset($_POST["cat"]) && $_FILES['fileToUpload']['tmp_name'])
{	
	$uploaddir = 'file/'.$_POST["cat"];//folder for upload
	if(file_exists($uploaddir)!=1)
	{
		mkdir($uploaddir); 
	}
		if(strlen(basename($_FILES['fileToUpload']['name']))>0)
		{
			$uploadfile = $uploaddir."/" . basename($_FILES['fileToUpload']['name']);//fullpath(directory+name)		
		}	
				if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile) || isset($default))
				{
					 echo "<script>alert('file uploded');</script>";	
				} 
				else
				{
					echo "<script>alert('Possible file upload attack!\n');</script>";
				}
		 echo "<script>window.location.assign('upload.php');</script>";	
}
else
{
	 echo "<script>alert('file uploded failed');window.location.assign('upload.php');</script>";
}
?> 
