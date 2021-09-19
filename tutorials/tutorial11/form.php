<?php
	include ("db/connection.php");
	if(isset($_GET['id']))
	{
	$id = $_GET['id'];
	$sql ="SELECT * FROM `student` WHERE id='$id'";
	$result = $db->query($sql);
		if($result->num_rows > 0)
		{
			$row = $result->fetch_assoc();
			$Name =$row['name'];
			$Email = $row['email'];
			$Age = $row['age'];
			$State = $row['state'];
			$City = $row['city'];
		}
	}
?>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
	<link rel="stylesheet" href="js/bootstrap.min.css" >
	<script src="js/jquery.min.js"></script>
</head>
<body>

<div class="container">
<form action="table_insert.php" method="POST" id="frm" name="Login_Form">

		<div class="form-group">
			<label for="name"><b>Name</b></label>
			<input type="text" class="form-control" id="Name"  placeholder="Enter Name" name="name" value="<?php if(isset($Name)){echo $Name;}?>" required>
            <p style="display:none; color:red;" id="p1">Please Enter Name </p>
		</div>
		<div class="form-group">
			<label for="email"><b>Email</b></label>
			<input type="text" class="form-control" id="Email" placeholder="Enter Email" name="email" value="<?php if(isset($Email)){echo $Email;}?>" required="@">
			<p style="display: none;color:red" id="p2">Enter Valid Email</p>
		</div>
		<div class="form-group">
			<label for="age"><b>Age</b></label>
			<input type="number" class="form-control" id="Age" placeholder="Enter Age" name="age"  value="<?php if(isset($Age)){echo $Age;}?>" required>
            <p style="display:none; color:red;" id="p3">Please Enter Name </p>
        </div>
		<div class="form-group">
			<label for="state"><b>State</b></label>
			<input type="text" class="form-control" id="State" placeholder="Enter State" name="state" value="<?php if(isset($State)){echo $State;}?>" required>
            <p style="display:none; color:red;" id="p4">Please Enter Name </p>
        </div>
		<div class="form-group">
			<label for="city"><b>City</b></label>
			<input type="text" class="form-control" id="City"  placeholder="Enter City" name="city" value="<?php if(isset($City)){echo $City;}?>" required>
            <p style="display:none; color:red;" id="p5">Please Enter Name </p>
        </div>
        <div>
        
		            <input type="hidden" name="<?php if(isset($id)){echo 'id';}?>" value="<?php if(isset($id)){echo $id;}?>"/>
			</div>
		
		<div class="form-group">
			<input  type="submit"  id="login" value="Enter" class="btn btn-success"/>
			<a href="index.php"><button type="button" class="btn btn-primary">Back</button></a>
            <input  type="reset"   id="reset" value="Reset" class="btn btn-secondary"/>
		</div>
</form>
</div>
</body>
</html>
