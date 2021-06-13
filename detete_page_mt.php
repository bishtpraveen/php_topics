<?php
 include('databaseConn.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $deleteQuery = "DELETE FROM register WHERE id='$id'";
    if($conn->query($deleteQuery)){
        echo 'deleted successfully';
        header("Location:show_data_mt.php");
    }else{
        echo 'error'.$conn->error;
    }
}

?>