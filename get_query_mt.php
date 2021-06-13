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
        <a href="front.php">Insert Data</a>
            <div class="col-md-6 mx-auto ">
            <table class="table table-hover">
            <thead>
            <tr>
            <th>sn</th>
            <th>username</th>
            <th>email</th>
            <th>password</th>
            <th>Action</th>
            
            </tr>
            </thead>

            <tbody>
            
             <?php


include('databaseConn.php');
$getQuery="SELECT * FROM register";
$result=$conn->query($getQuery);
// print_r($result);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){

        // echo '<pre>';
        // print_r($row);

          echo  "<tr>";
           echo "<td>".$row['id']."</td>";
           echo "<td>".$row['username']."</td>";
           echo "<td>".$row['email']."</td>";
           echo "<td>".$row['password']."</td>";
           echo "<td>
           <a href='' class='btn btn-success'>Edit</a>
           <a href='' class='btn btn-danger'>delete</a>
           
           </td>";

          echo "</tr>";



    }
}


?>
            
            </tbody>

            </table>
            
            
            </div>
            
        </div>
    </div>
</body>
</html>