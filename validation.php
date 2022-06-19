<?php

session_start();

$con = mysqli_connect('localhost', 'root', '', 'session');

if($con){
    echo "connection sucessful";
}else{
    echo "no connection";
}     
// for the login of data
$name = $_POST['username'];
$pass= $_POST['password'];
$q = " select * from signin where name= '$name' && password ='$pass'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
if ($num == 1){

    $_SESSION['user'] = $name;
   // echo "dublicate data";
   header('location:home.php');
    
}else{

    header('location:login.php');
}



?>