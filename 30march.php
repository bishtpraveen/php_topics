<?php

$record = array(
    array('name'=>'jarvis','email'=>'jarvis@'),
    array('name'=>'james','email'=>'james@'),
    array('name'=>'ravi','email'=>'ravi@'),
    array('name'=>'john','email'=>'john@'),
    array('name'=>'dev','email'=>'dev@'),
    array('name'=>'j','email'=>'j@'),
);

$numbers =array(1,2,3,4,55,5,5,4,6,7,88,7);
echo $numbers[10];

?>

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
    

<?php

foreach($record as $d){


    echo $d['name'].[0];




}

?>






</body>
</html>