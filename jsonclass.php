<?php


$url =file_get_contents('https://restcountries.eu/rest/v2/all');

// echo $url;
echo "<pre>";
$phpData = json_decode($url,true);

// print_r($phpData);


// for($i=0; $i<sizeof($phpData); $i++){
// echo $phpData[$i]['name']."<br>";
// echo "<h3>".$phpData[$i]['capital']."</h3>"."<br>";
// }


// echo "<ol>";
// foreach($phpData as $d){
//     echo "<li><strong>".$d['name']."</strong><ul><li>".$d['capital']."</li></ul></li>" ;
// }
// echo "</ol>";




echo "<ol>";
foreach($phpData as $d){
    echo "<li>".$d['name']."<ul>".$d['capital']."</ul>"."</li>";
}
echo "</ol>";

?>