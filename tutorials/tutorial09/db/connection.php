<?php
	$db=new mysqli("fdb24.awardspace.net","3268707_4ce2","Ranaji@5053","3268707_4ce2");
	if($db->connect_errno)
	{
		echo $db->connect_error;
	}
	else
	{
		echo "This is Intenet Programming";
	}
?>