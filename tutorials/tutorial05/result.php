<?php  
		$month=$_GET['month'];
		
?>
<!DOCTYPE html>
<html>
<head>
<body>
<script src="js\bootstrap.min.js"></script>
<script src="js\jquery.min.js"></script>
<link rel="stylesheet" href="js\bootstrap.min.css">
<script src="js\popper.min.js"></script>


<title>Result</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<div class="container">
<form action="result.php" method="GET">
	<div class="well">
	<center><h1>Month No is: <?php echo $month ?></h1>
	</center>
	

	</div>
	<center>
	<h1>Month Name</h1>
	</center>
	<div class="container">
	
		<div class="form-group">
			<select type="month" name="month" class="form-control">
				<option <?php if($month==1) echo "selected"  ?>> January </option>
				<option <?php if($month==2) echo "selected"?>> February </option>
				<option <?php if($month==3) echo "selected" ?>> March </option>
				<option <?php if($month==4) echo "selected" ?>> April </option>
				<option <?php if($month==5) echo "selected" ?>> May </option>
				<option <?php if($month==6) echo "selected"  ?>> June </option>
				<option <?php if($month==7) echo "selected" ?>> July </option>
				<option <?php if($month==8) echo "selected" ?>> August </option>
				<option <?php if($month==9) echo "selected" ?>> September </option>
				<option <?php if($month==10)echo "selected" ?>> October </option>
				<option <?php if($month==11) echo "selected" ?>> November </option>
				<option <?php if($month==12) echo "selected" ?>> December </option>
			</select>
			</div>
			
			
			
	
	</div>
</form>
</div>
</body>
</html>
