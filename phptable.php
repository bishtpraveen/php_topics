<?php

$url =file_get_contents('https://restcountries.eu/rest/v2/all');
$phpData = json_decode($url,true);


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

<table class="table table-hover table-bordered">
<thead>
<tr>
<th>Sr No.</th>
<th>Name</th>
<th>Capital</th>
<th>Border</th>
<th>Flag</th>
</tr>
</thead>
<tbody>
<?php


$url =file_get_contents('https://restcountries.eu/rest/v2/all');
$phpData = json_decode($url,true);

foreach($phpData as $d){

    echo '<tr>';
                            echo '<td>S no</td>';
                            echo '<td>'.$d['name'].'</td>';
                            echo '<td>'.$d['capital'].'</td>';
                            echo '<td>'.$d['borders'].'</td>';
                            echo '<td><img src='.$d['flag'].' class="img-fluid"></td>';
                            echo '</tr>';
}




?>
</tbody>
</table>
</div>
</div>
</div>

</body>
</html>