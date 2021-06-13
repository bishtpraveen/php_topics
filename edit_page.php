<?php

include("dbConnect.php");
$row ='Invalid Data';

if(isset($_GET['id'])){


    $id =$_GET['id'];
    
    $getSingleDataQuery = "SELECT * FROM  register WHERE  id='$id'";

    $result=$connect->queery($getSingleDataQuery);
    if($result->num_rows > 0){

        $row =$result->fetch_assoc();

    }



}

if(isset($_POST['update'])){


$un = $_POST['username'];
$em = $_POST['email'];
$ps = $_POST['password'];
$updateQuery = "UPDATE register SET username='$un', email='$em', password='$ps' WHERE id='$id'";

if($connect->query ($updateQuery)){


    echo 'updated';
}
echo 'error';

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
<form action="" method="post">

<input type="text" name="username" value="<?php echo $row['username']  ?>">
<input type="email" name="email" value="<?php echo $row['email'] ?>">
<input type="password" name="password" value="<?php echo $row['password'] ?>">

<input type="submit" name="update" >


</form>
</body>
</html>