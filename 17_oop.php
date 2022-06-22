<?php
/**
 * Programação Orientada a Objetos
 * OOP consiste em Classes que tem propriedades e métodos.
 * Objetos podem ser criados a partir das Classes.
*/

class User {
    //Propriedades são atributos que pertencem a uma classe
    /**
     * Access modifiers: public, private, protected
     * public - can be accessed from anywhere
     * private - can only be accessed from inside the class
     * protected - can only be accessed from inside the class
     * and by inheriting classes
    */
    public $name;
    // protected $name;
    public $email;
    public $password;

    //Constructor is a method that runs when an object is created
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        // echo 'Constructor ran<br>';
    }

    //Method is a function that belongs to a class
    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
}

//Instantiate a user object
$user1 = new User('Tiradentes','tira@dentes.com','123456789');
$user2 = new User('Mula Sem Cabeça','mula@semcabeca.com','0123456789');

// $user1->name = 'Tiradentes';
// $user1->set_name('Saci Perere');
// $user2->set_name('Mula Sem Cabeça');

// echo '<pre>';

// var_dump($user1);
echo $user1->name;
// echo '<br>';
echo $user2->name;
echo '<br>';
// echo $user1->get_name();
// echo '<br>';
// echo $user2->get_name();

// echo '</pre>';

//INHERITENCE
class Employee extends User {
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title(){
        return $this->title;
    }
}

$employee1 = new Employee('Boto Cor de Rosa','boto@rosa.com','1313','Fish');
echo $employee1->get_title();