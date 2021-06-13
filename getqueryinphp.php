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
  <div class="col-md-12 text-center text-light bg-info my-5">

  <h1 >Get Query</h1>
  <table class="table table-bordered table-hover">
  <thead>
  <tr>
  <th>SrNo</th>
  <th>username</th>
  <th>email</th>
  <th>password</th>
  <th>Action</th>
  </tr>
  </thead>
  <tbody>
  <?php

include('dbConnect.php');

$getQuery= "SELECT * FROM register ";
 


// echo "<pre>";
// print_r($result);


// echo "</pre>";

if($result->num_rows >0){

    while($row=$result->fetch_assoc()){
        // echo "<pre>";
        // print_r($row);
        
        echo "<tr>";

echo "<td>".$row['id']."</td>";
echo "<td>".$row['username']."</td>";

echo "<td>".$row['email']."</td>";

echo "<td>".$row['password']."</td>";

echo "<td> 
<button>edit</button> <button>Delete</button>    
</td>";



        echo "</tr>";
    }
}
  ?>
  </tbody>
  </table>
  
  
  
  </div></div></div>  
</body>
</html>