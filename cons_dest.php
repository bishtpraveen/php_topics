<?php

if(isset($_POST['name'])){
   echo   $_POST['name'];
  echo  $_POST['email'];
  echo   $_POST['submit'];
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
    
<form action="" method="post" >

<input type="text" placeholder="enter name"       name="name"  >
<input type="text"  placeholder="enter email"     name="email"   >
<input type="submit" name='submit' >




</form>




</body>
</html>