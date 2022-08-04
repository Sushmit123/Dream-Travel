<?php

session_start();


$con = mysqli_connect('localhost' , 'root' ,'');

mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

// $s = "select * from usertable where name = '$name'";

$result = mysqli_query($con, "select * from register where name = '$name' && password = '$pass'");

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
    $_SESSION['password'] = $pass;
   
      header('location:After login home page.html');
    //  header('location:GanatipuleForm.php');
   
}else{
    header('location:login.php');
   
}











?>