<?php



class student{
    public $name;
    public $email;
    public $roll_no;
    
    
 function showDetails()
 
 {
     

    echo $this->name;
    echo $this->email;
    echo $this->roll_no;

}

function storeData($n,$e,$r){
    $this->name=$n;
    $this->email=$e;
    $this->roll_no=$r;
}

function library(){

}

}



class accNo extends student{

 public $accNo;

 function createAccNo(){
    $this->accNo=rand();
 
}

 function accDetails(){
    echo $this->name;
    echo $this->email;
    echo $this->roll_no;
    echo $this->accNo;

 }

}

$acc= new accNo();
$acc->storeData('praveen','@','355666');
$acc->showDetails();



class library extends accNo{
   
    
}


$lib= new library();

$lib->storeData('#@','$$$$$$$b$$$','*#*');
$lib->showDetails();









?>