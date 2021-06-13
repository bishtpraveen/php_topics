<?php

echo '<pre>';
$txt ='hello i ,am your ,code';
$newTxt=explode(',',$txt);
print_r($newTxt);
// this is string to array conversion
echo '</pre>';
$a = implode($newTxt);
echo $a."<br>";

?>