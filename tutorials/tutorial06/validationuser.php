<?php
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];
  if($username = 'Rana' && $password = "1234")
  {
        $_SESSION['username'] = $username;
        header("Location:index.php");
  }
  else
  header("Locatioin:login.php");
?>