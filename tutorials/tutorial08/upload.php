<?php
	if(isset($_FILES['myfile']))
	{
		$ftmp=$_FILES['myfile']['tmp_name'];
		$path="upload/".$_FILES['myfile']['name'];
			move_uploaded_file($ftmp,$path);
			echo "<img style='border-radius:100%' src='$path' />";
		
	}
	
	
	else
	{
		echo "No File Selected.";
	}
?>