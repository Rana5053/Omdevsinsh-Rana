<!DOCTYPE html>
<html>
<head>
<body>
<script src="js\bootstrap.min.js"></script>
<script src="js\jquery.min.js"></script>
<link rel="stylesheet" href="js\bootstrap.min.css">
<script src="js\popper.min.js"></script>
</head>
<title>Upload File</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
body{color:#740eb4;}


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
h1
{
		text-align:center;
		color:brown;
		text-decoration:underline;
		text-shadow:2px 1px 4px black;
}
button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 30%;
  border-radius: 50%;
}

.container {

        padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
user
{
	color:
	

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<center><h1>Upload File</h1></center>
<style>


</style>

<div class="container">
<form action="upload.php" method="POST" enctype="multipart/form-data">
	<div class="container">
		<div class="form-group">
			<input type="file" name="myfile" />
		</div>
	</div>
	
	<div class="container">
		<div class="form-group">
			<input type="submit" name="submit" value="Upload" />
		</div>
	</div>
</form>
</div>
</body>
</html>
