
<?php

$record =array(
array('name'=>'bisht','email'=>'this is email66667'),
array('name'=>'bisht0','email'=>'this is 7777'),
array('name'=>'bish11t','email'=>'this is email 7777')

);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>

    <table >
        <thead>
            <tr>
                <th>Sr. No.</th>
                <th>Name</th>
                <th>EMail</th>
            </tr>
        </thead>
        <tbody>
            <?
            $count=1;
foreach($record as $d){

    echo '<tr>';
    echo '<th>'.$count.'</th>';

   
    echo '</tr>'';
    $count++;
}



            ?>

        </tbody>
        <tfoot>

        </tfoot>
    </table>
</body>

</html>
