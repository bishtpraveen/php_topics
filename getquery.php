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
        <div class="col-md-6">
        <h1 class="text-center">Get Query</h1>
    <hr>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>


          
                <th>S no.</th>
                <th>username</th>
                <th>email</th>
                <th>password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
        
            include('db_connect.php');
            $getQuery = "SELECT * FROM register";
            $result = $connect->query($getQuery);
            // echo "<pre>";
            // print_r($result);
            // echo "</pre>";
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    // echo "<pre>";
                    // print_r($row);
                    // echo "<?pre>";
            


                    echo "<tr>";

echo "<td>".$row['id']."</td>";

echo "<td>".$row['username']."</td>";


echo "<td>".$row['email']."</td>";

echo "<td>************</td>";

echo "<td>

<a href=''><button>edit</button></a>
<a href=''><button>Delete</button></a>

 
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