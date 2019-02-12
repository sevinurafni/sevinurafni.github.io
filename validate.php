<?php
session_start();
$User= "sevi";
$Pass="123456";
if(isset($_POST['username']) and isset($_POST['password'])) {
  if($_POST['username']==$User and $_POST['password']==$Pass) {
    $_SESSION['status_login']=1;
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    header('location:index.html');
  }
  else {
    echo "Login SALAH..!!";
    die("Silakan login kembali <a href='login.php'>Disini</a>");
  }
} 
?>