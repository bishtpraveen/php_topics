<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php
require_once 'process.php';

?>

<?php

$mysqli=new mysqli('localhost','root','mypass123','crud') or die(mysqli_error($mysqli));
$result= $mysqli->query("SELECT * FROM data") or die($mysqli->error);
?>


<div class="row justify-content-center" >

<table class="table">

<thead>
<tr>
<th>Name</th>
<th>Location</th>
<th colspan="2" >Action</th>
</tr>

</thead>

<?php

while($row=$result->fetch_assoc())


?>

<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['location']; ?></td>
</tr>
<?php endwhile; ?>
</table>


</div>
<?php
pre_r($result);
pre_r($result->fetch_assoc());
pre_r($result->fetch_assoc());


function pre_r($array){

    echo '<pre>';
    print_r($array);
    echo '</pre>';
}


?>
<div class="row justify-content-center">
<form action="process.php" method="POST">

<div class="form-group">
<label for="">Name</label>
<input type="text" class="form-control" name="name" value="Enter your name">
</div>
<div class="form-group">
<label for="">Location</label>
<input type="text" class="form-control" name="location" value="Enter yoour location">
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary" name="save" >Save</button>
</div>



</form>
</div> 
</body>
</html>