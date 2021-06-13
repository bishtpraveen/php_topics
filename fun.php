<?php


class Student {


public $name;
public $email;

function storeData($n,$e){
    $this->name=$n;
    $this->email=$e;

}
function showData(){
    echo $this->name.''.$this->email;
}
function fn_(){
    $this->showData();
}

}

$d=new Student();
$d->storeData('praveen','this is email');
$d->fn_();


class createAccount {

    public $rollno;
    public $branch;
    public $year;


    function details($r,$b,$y){

        $this->rollno=$r;

    }

}


?>