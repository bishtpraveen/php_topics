<?php
include('dbConnect.php');
if(isset($_POST['username'])){

$un=$_POST['username'];
$e=$_POST['email'];
$p=$_POST['password'];

$insertQuery="INSERT INTO register(username,email,password) VALUES('$un','$e','$p') ";

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
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    
<div class="container">
<div class="row">

<div class="col-md-6 mx-auto text-light bg-dark">



<form action="" method="post">
<h3>Registration</h3>

<label for="">Urername</label>
<input type="text" placeholder="username" name="username" class="form-control" required  >
<label for="">email</label>
<input type="email"placeholder="enter email" name="email" class="form-control" required>
<label for="">Password</label>
<input type="password" placeholder="password" name="password" class="form-control"  required> 

<input type="submit" name="register" class="btn btn-success">
</form>

</div>
</div>

</div>




</body>
</html>