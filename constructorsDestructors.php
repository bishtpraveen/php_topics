<?php


class student{


function __construct(){
    echo 'this is constructors';
}

function __destruct(){

    echo 'end of the code this is a distructor';
}

function dog(){
    echo '***********this is random stuff stuff stuff***************';
}

}

$d = new student();
$d->dog();









?>