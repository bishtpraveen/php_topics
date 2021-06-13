<?php


class Students{
     
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

$d = new Students();
$d->storeData('farvis','j@@@@');
$d->fn_();

//inheritance constructors distroctors and form handling


?>