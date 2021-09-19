<?php

	$principal=$_GET['principal'];
	$interest=$_GET['interest'];
	$nom=$_GET['nom'];
	$result=($principal*$interest*$nom)/100;
?>
<html>
	<link rel="stylesheet" href="js\bootstrap.min.css">
<head>
<title>Result </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

		
		<div class="container">
		<form action="result.php">
		<h1>Simple Interest Data</h1>
		<div class="well">
		<div class="form-group">
			<label for="principal">Principal Amount= <?php echo $principal; ?></label>
		</div>
		
		<div class="form-group">
			<label for="interest">Interest= <?php echo $interest ; ?></label>
		</div>
		
		<div class="form-group">
			<label for="nom">No of Months= <?php echo $nom; ?></label>
		</div>
		<div>
		<label for="result">Result= <?php echo $result; ?></label>
		
		
		</div>
		</form>
</div>
</div>
</html>