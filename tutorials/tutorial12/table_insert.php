<?php
	include("db/connection.php");
	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Age = $_POST['age'];
	$State = $_POST['state'];
	$City = $_POST['city'];

	if(isset($_POST['id']))
	{
		
		$id=$_POST['id'];
		$sql="UPDATE `student` SET `name` = '$Name', `email` = '$Email', `age` = '$Age', `state` = '$State', `city` = '$City' 
		WHERE `student`.`id` = '$id'";
	}
	else
	{
		
		$sql="
		INSERT INTO `student` (`id`, `name`,`email`, `age`, `state`, `city`) 
		VALUES ('$id','$Name' ,'$Email', '$Age', '$State', '$City')";
	}
	$db->query($sql);
	header("location:index.php");
?>