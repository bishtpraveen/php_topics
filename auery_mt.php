<?php
// db connection
$conn = new mysqli('localhost','root','','php_batch2_mtest');
if(isset($_POST['register'])){
    // print_r($_POST);
    $un = $_POST['un'];
    $em = $_POST['email'];
    $ps = $_POST['password'];
    // insert query
    $postData = "INSERT INTO ajax_register(username,email,password)VALUES('$un','$em','$ps')";
    if($conn->query($postData)){
        echo 'inserted';
    }else{
        echo 'error = '.$conn->error;
    }
}


?>