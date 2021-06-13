<?php

$txt ='this isjdkdkdk u cab fi is a dii ejo';
echo "<h2>".$txt."</h2> Length=".strlen($txt);



echo "<h2>".strtolower($txt)."</h2>";
echo "<h2>".strtoupper($txt)."</h2";

echo "<h2>".ucfirst($txt)."</h2>";
echo "<h2>".ucwords($txt)."</h2>";

echo "<h2>".substr($txt,2,7)."</h2>";
echo "<h2>".str_replace('this','praveenkumarbisht',$txt)."</h2>"

?>