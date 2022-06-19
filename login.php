<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
<div class="row">
<div class="col-6">
    <h2>login form</h2>

<form action="validation.php" method="post">
    <div class="form-group">
        <label>username:</label>
            <input type="text" name="username" class="form-control">
</div>

        <div class="form-group">
        <label>password:</label>
            <input type="password" name="password" class="form-control">
</div>

        <button class=" btn btn-danger my-3 type="submit" name="submit" >Login</button>
</form>
</div>
<div class="col-6">
    <h2>sign in</h2>

<form action="registration.php" method="post">
    <div class="form-group">
        <label>username:</label>
            <input type="text" name="username" class="form-control">
</div>

        <div class="form-group">
        <label>password:</label>
            <input type="password" name="password" class="form-control">
</div>

        <button class=" btn btn-danger my-3" type="submit" name="submit" >SignIn</button>
</form>

   </div>
   </div>    
   </div>

    
</body>
</html>