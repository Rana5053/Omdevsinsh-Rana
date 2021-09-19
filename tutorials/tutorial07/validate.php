<?php
  session_start();
  
  $Username = $_POST['username'];
  $Password = $_POST['password'];
  
	  if($Username =="Omdevsinh" && $Password == "1234")
	  {
		
        $_SESSION['username'] = "Omdevsinh";
		$_SESSION['password'] = "1234";
		if(isset($_POST['remember'])){
			setcookie("username",$Username,time()+(86400*30));
			setcookie("password",$Password,time()+(86400*30));
		}else{
			setcookie("username",$Username,time()-1);
			setcookie("password",$Password,time()-1);
		}
        header("location:index.php");
	  }
      else
      {
          $_SESSION['valid']="not valid";
          header("location:login.php");
      }
?>