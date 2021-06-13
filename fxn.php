<?php

$numbers = array(1,2,3,4,5,6,7,8,9,9,100);

echo "<pre>";
print_r($numbers);
echo "</pre>";

array_unshift($numbers,'this is unshift');
echo "<pre>";
print_r($numbers);
echo "</pre>";
echo "<pre>";
array_shift($numbers);

print_r($numbers);
echo "</pre>";

echo count($numbers);
echo sizeof($numbers);
echo "<pre>";
print_r(array_unique($numbers));
echo "</pre>";


echo "<pre>";
array_pop($numbers);
echo "</pre>";


?>