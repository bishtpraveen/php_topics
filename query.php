<?php

//db connection

$conn= new mysqli('localhost','root','','machine_test');
echo 'this is query page and data is inserted successfully';
header("Location:get_query_mt.php");

?>