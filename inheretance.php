<?php


class Student {


public $name;
public $email;
public $roll_no;

function storeData($n,$e,$r){
    $this->name=$n;
    $this->email=$e;
    $this->email=$r;


}


function showDetails(){
    echo $this->name.''.$this->email;
  echo  $this->roll_no;
}



// function fn_(){
//     $this->showData();
// }

}

// $d=new Student();
// $d->storeData('praveen','this is email');
// $d->fn_();




class Account extends Student {

    public $accNo;
    
function createAccNo(){
    $this->accNo=rand();

}
function showAccDetails(){

    echo 'Holder Name.'.$this->name.'<br>';
    echo 'Holder email.'.$this->email.'<br>';
    echo 'Account number.'.$this->accNo;
}


}

// $acc = new Account();
// $acc->storeData('jarvis','@j',67);
// $acc->createAccNo();
// $acc->showAccDetails();


class Library extends Account{


    function books(){
        echo 'this is a randm boooookkkkkk Book function.<br>';
        echo 'call me dad';
    }
}


$lib = new Library();
$lib->name='jarvias';
$lib->email='@';
$lib->roll_no=1234566;
$lib->createAccNo();

$lib->showAccDetails();
$lib->books();


?>