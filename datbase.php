<?php

include('dbConnect.php');

if(isset($_POST['username'])){

    $un=$_POST['username'];
    $e=$_POST['email'];
    $p=$_POST['password'];



//query 

$insertQuery = "INSERT INTO register(username,email,password) VALUES('$un','$e','$p')";

if($connect->query($insertQuery)){

    echo 'inserted';
}
else{
    echo 'error';
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-md-6 mx-auto bg-dark my-5 text-light">

<form method="POST" method="GET" action="">
<h3  >Registration</h3>

<label for="">User name</label>
<input type="text" class="form-control" name="username"  required>
<label for="">Email</label>
<input type="email" name="email" class="form-control" required>
<label for="">Password</label>
<input type="password" name="password" class="form-control" required>

<input type="submit" name="submit" class="bg-success my-5" required>
</form>

    </div>
    </div>
    </div>
</body>
</html>