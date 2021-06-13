<?php

$url = file_get_contents('https://restcountries.eu/rest/v2/all');
// echo $url;
//now start decoding json files
$phpData = json_decode($url,true);
echo '<pre>';
// print_r ($phpData);
echo '</pre>';


// $i=1;
// foreach($phpData as $r){
//     echo "<h2>".$i.' '.$r['name']."</h2>";
//     echo "<h2>".'*'.''.$r['capital']."</h2>";
//     $i=$i+1;
// }










// echo "<ol>";

// foreach($phpData as $d){


//     echo "<li><strong>".$d['name']."</strong><ul><li>".$d['capital']."</li></ul></li>";


// }

// echo "</ol>";




?>