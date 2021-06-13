<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <a href="6april.php"><button>Insert Data</button></a>
                <h1 class="text-center"> get query</h1>
                <table class=" table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>sr.no</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Pssword</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                     <?php
                    include("dbConnect.php");
                    $getQuery= "SELECT * FROM register";
                    $result=$connect->query($getQuery);
                    // print_r($result);
                    if($result->num_rows>0)
                    {
                        while($row=$result->fetch_assoc())
                        {
                        //   echo"<pre>";
                        //     print_r($row);
                        //     echo"</pre>";

                        echo"<tr>";
                        echo"<td>". $row['id']."</td>";
                        echo"<td>". $row['username']."</td>";
                        echo"<td>". $row['email']."</td>";
                        echo"<td>************</td>";
                        echo "<td>
                            <a href='edit_page.php? id=".$row['id']."'><button>Edit</button></a>    
                            <a href='delete_page.php? id=".$row['id']."'><button>Delete</button>    </a>
                        </td>";
                        echo"</tr>";
                        }  
                    }
                    ?>
                    </tbody>
            </div>
        </div>
    </div>
</body>
</html>