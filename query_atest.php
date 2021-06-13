<?php



$connect =mysli_connect('localhost','root','','students');
$sql="SELECT * FROM STUDENTS"





$sql= mysqli_query($connect,$sql);
$output='';
if(mysqli_num_rows($result)>0){


$output = '<table border="1" width="100%"  >


<tr>


<th>Id</th>
<th>Name</th>

</tr>';


while($row=mysqli_fetch_assoc($result)){


    $output.="<tr><td>{$row["id"]}</td><td>{$row["first_name"]}</td><td>{$row["last_name"]}</td></tr>";
}


$output.="</table>";


mysqli_close($connect);
echo $output;
}else{

echo "record not ofut not found";

}



?>