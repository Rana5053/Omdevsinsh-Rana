<?php

    session_start();
    
    
    if($_SESSION['username'] == "" && $_SESSION['password'] == "")
    {
      header("Location:login.php");
    }


?>

<html>
<body>
<head>
    <title>Registration Form</title>
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
<button class="btn btn-danger" id="button"> <a href="logout.php">Logout</a></button>
<button class="btn btn-primary" id="button">Add New Data</button>
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
	<tr>
		<td>1</td>
		<td>Mayan Jamod</td>
		<td>mayanjamod11@gmail.com</td>
		<td>19</td>
		<td>Gujarat</td>
		<td>Jasdan</td>
		<td>
		<a href="#" class="text-primary">Edit</button>
		<a href="#" class="text-danger">Delete</button>
		</td>
	</tr>
	<tr>
		<td>2</td>
		<td>Mayank Desai</td>
		<td>mayankdesai222@gmail.com</td>
		<td>22</td>
		<td>Maharashtra</td>
		<td>Pune</td>
		<td>
		<a href="#" class="text-primary">Edit</button>
		<a href="#" class="text-danger">Delete</button>
		</td>
	</tr>
	<tr>
		<td>3</td>
		<td>Vimal Parmar</td>
		<td>vimalparmar442@gmail.com</td>
		<td>21 </td>
		<td>Rajasthan</td>
		<td>Udaipur</td>
		<td>
		<a href="#" class="text-primary">Edit</button>
		<a href="#" class="text-danger">Delete</button>
		</td>
	</tr>
	<tr>
		<td>4</td>
		<td>Harsh Sharma</td>
		<td>harshsharma141@gmail.com</td>
		<td>19 </td>
		<td>Tamilnadu</td>
		<td>Madurai</td>
		<td>
		<a href="#" class="text-primary">Edit</button>
		<a href="#" class="text-danger">Delete</button>
		</td>
	</tr>
	</table>
</div>
</body>
</html>
	