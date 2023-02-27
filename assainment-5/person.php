<?php
class Person{
    public $name;
    public $email;
    function setName($name){
        $this->name= $name;
    }
    function setEmail($email){
        $this->email= $email;
    }
    function getName(){
        return $this->name;
    }
    function getEmail(){
        return $this->email;
    }
}
$person= new Person();
$person->setName("Saidur"); 
$person->setEmail("saidur@gmail.com"); 


echo $person->getName();
echo $person->getEmail();