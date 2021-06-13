<?php

$txt ='this is a normal text in string';

echo $txt;

echo "<pre>";
$newTxt=explode(' ',$txt);
print_r($newTxt);

$againTxt=implode($newTxt);
echo  $againTxt;


?>