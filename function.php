<?php


// function showName(){
//     echo 'thi sis a code.<br>';
// }

// showName();

// function add($a,$b){
    
//     echo $a+$b."<br>";
// }

// add(10,44);

function details($email,$name){

echo $name;
echo $email;

}
details('praveen@1','1234');


function login($email,$password){
   
    $data =array(


        array('email'=>'praveen@1','password'=>'1234'),
        array('email'=>'praveen@2','password'=>'1234'),
        array('email'=>'praveen@3','password'=>'1234'),
        array('email'=>'praveen@4','password'=>'1234'),
    );
    

    foreach($data as $d){

if($d['email']==$email){
    echo 'exists';
    return false;
}

    }
    echo 'not exists';

}


?>