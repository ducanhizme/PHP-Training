<?php

class Animal
{
     function  eat():void {
        echo "Animal is eating";
     }
}
// đơn kế thừa
class Dog extends Animal
{
    function bark():void {
        echo "Dog is barking";
    }
}

$dog = new Dog();
$dog->eat();

// đa kế thừa

trait toJson{
    function toJson():string {
        return json_encode($this);
    }
}

trait toArray{
    function toArray():array {
        return (array)$this;
    }
}
class User{
    use toJson, toArray;
    public function __construct(public $email, public $username)
    {
    }
}

$user = new User("NinhDucAnh","ninhducanhninh@gmail.com");
var_dump($user->toJson());