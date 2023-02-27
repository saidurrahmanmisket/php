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
$person->setName($_POST['name']); 
$person->setEmail($_POST['email']); 


echo $person->getName()."<br>";
echo $person->getEmail();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Page</title>
</head>
<body>
    <h2>Hello, <?php echo $person->getName(); ?> Your data submit successfully ✅</h2>
    <h2>We will contact by this maill <?php echo $person->getEmail(); ?> 💌 </h2>

    <button><a href="/">Ok</a></button>

</body>
</html>