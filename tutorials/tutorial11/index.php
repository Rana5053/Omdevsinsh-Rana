<?php
	include("db/connection.php");
	
	$sql= "select * from student";
	
	$result=$db->query($sql);
		
?>

<html>
<body>
<head>
    <title>Table</title>
<script src="js\bootstrap.min.js"></script>
<script src="js\jquery.min.js"></script>
<link rel="stylesheet" href="js\bootstrap.min.css"></script>
<script src="js\popper.min.js"></script>
<script>
	$("document").ready(function(){
		$(".text-danger").click(function(){
			$(this).closest('tr').fadeOut(
				1000,
				function(){
					$(this).remove();
				});
			});
		});
</script>
<style>
#button{
    float:right;
    display:block;
    margin-right:0px;
    clear:left;
	margin:5px;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 5px solid #ff3030;
  outline: 8px  yellow;
}

</style>
<div class="container">
<h1 class="text-center">Student Table</h1>
<div class="priviouslink">
<a href="form.php"><button class="btn btn-primary" id="button">Add New Data</button></a>
</div>
	<table class="table table-stripped" "table table-bordered">
	<tr>
				<td>No.</td>
				<td>Name</td>
				<td>Email</td>
				<td>Age </td>
				<td>State</td>
				<td>City</td>
				<td>Action</td>
			</tr>
			<!-- Code goes here -->
			<?php
			if($result = $db->query("select * from student")){
				if($result->num_rows){
					while($row = $result->fetch_assoc()){
					?>
					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['email'];?></td>
						<td><?php echo $row['age'];?></td>
						<td><?php echo $row['state'];?></td>
						<td><?php echo $row['city'];?></td>
						<td>
								<a href="">Edit</a>
								<a href="table_delete.php?id=<?php echo $row['id']?>" class="text-info">Delete</a>
							</td>
					</tr>
			<?php } } }  ?>
	</table>
</div>
</body>
</html>
	