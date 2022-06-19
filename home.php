<?php
session_start();

//if user want to go back afterlogut
// without login its redirect to login page again
if(!isset($_SESSION['user'])){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>welcome <?php echo $_SESSION['user']; ?></h2>
    <a href="logout.php">Logout</a>
</body>
</html>