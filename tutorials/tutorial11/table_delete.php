<?php 
	require 'db/connection.php';
        $id=$_GET['id'];
        $sql="delete from student WHERE id='$id'";
        
        $db->query($sql);
        
	header("location:index.php");
?>