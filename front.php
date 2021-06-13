<?php

include('databaseConn.php');
if(isset($_POST['username'])){


    $un= $_POST['username'];
    $em=$_POST['email'];
    $ps=$_POST['password'];
    
$insertQuery="INSERT INTO register (username, email, password) VALUES('$un','$em','$ps')";
if($conn->query($insertQuery)){

    echo 'inserted';
    header("Location:query.php");
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
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto bg-dark text-light">
        <form action="" method="post">
<h1 class="text-center">Register</h1>

<label for="">username</label>
<input type="text" name="username" placeholder="enter your name" required class="form-control">
<label for=""> eamil</label>
<input type="email" name="email" placeholder="entr your email" required class="form-control">
<label for="">password</label>
<input type="password" name="password" required class="form-control">

<input type="submit" class="btn btn-success my-3">
</form>
        </div>
    </div>
</div>



</body>
</html>
