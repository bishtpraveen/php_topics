<?php

$url = file_get_contents('https://restcountries.eu/rest/v2/all');
// echo $url;
//now start decoding json files
$phpData = json_decode($url,true);
echo '<pre>';
// print_r ($phpData);
echo '</pre>';

?>

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
        <div class="col-md-12">
        <table  class="table table-bordered table-hover bg-info">

<thead>
<tr>
    <th>
Name
    </th>
    <th>
Capital
    </th>
    <th>
Border
    </th>
    <th>
Flag
    </th>
</tr>

</thead>
<tbody>









    <tr class="border-hover">
        <td>
            <?php

$i=1;
foreach($phpData as $r){
    echo "<h2>".$r['name']."</h2>";
    
    $i=$i+1;
}

            ?>
        </td>
        <td>
            <?php

$i=1;
foreach($phpData as $r){
    echo "<h2>".$r['capital']."</h2>";
    
    $i=$i+1;
}

            ?>
        </td>
        <td>
            <?php

$i=1;
foreach($phpData as $r){

    
    echo "<h2>"."<img src =".$r['flag']."  >"."</h2>";
    
    $i=$i+1;
}

            ?>

        </td>
    </tr>


</tbody>
</table>

        </div>
    </div>
</div>

</body>
</html>