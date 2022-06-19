<?php

session_start();
header('location:login.php');  //when data registration is insert than it again redirect to login page
$con = mysqli_connect('localhost', 'root', '', 'session');

if($con){
    echo "connection sucessful";
}else{
    echo "no connection";
}     
// for the registration of data
$name = $_POST['username'];
$pass= $_POST['password'];
$q = " select * from signin where name= '$name' && password ='$pass'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
if ($num == 1){
    echo "dublicate data";
    
}else{
    $qy ="insert into signin(name, password) values('$name', '$pass')";
    mysqli_query($con, $qy);
    
}

?>