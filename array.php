<?php

echo "<pre>";
$num =array(5,7,8,9);
print_r($num);
echo "</pre>";

$str=array(aarti,praveen);
print_r($str);
echo "<pre>";
$data =array('name'=>'aarti','age'=>21);


print_r($data);
echo "</pre>";
echo $data ['name'];


echo "<pre>";
echo $data ['age'];
echo "</pre>";


echo "<pre>";
$record =array(
    array('name'=>'jarvis','sname'=>'Singh'),
    array('name'=>'jarvis1','sname'=>'kumar'),
    array('name'=>'praveen','sname'=>'bisht')
);



print_r($record);
echo "</pre>";

// echo $record [1]['sneme'];

echo '<pre>';
for($i=0;$i<=sizeof($num);$i++){
    echo "<h2>".$num[2]."</h2>";
}
foreach($num as $d){
    echo $d;
}


foreach($record as $r){
    echo "<h2>".$r['sname']."</h2>";
}


?>