<?php

class Employee{
    private $id;
    private $username;
    private $password;
    private $phone;
    private $email;

    protected $pr = "Hello";

    public function __construct($id,$uname,$password,$phone = null,$email = null){
        $this->id = $id;
        $this->username = $uname;
        $this->password = $password;
        $this->phone = $phone;
        $this->email = $email;
    }

    //! This will produce an error
    // public function __construct($var){
    //     // Code...
    // }

    public function __get($attr){
        return $this->$attr;
    }

    public function __set($attr,$value){
        $this->$attr = $value;
    }

    public function login($user,$passwd){
        if ($user && $passwd) header('location:home.php');
        else header('location:404.php');
        // TODO: Login handling...
    }

    public function hi(){
        return 'Employee class';
    }
}

class Admin extends Employee{

    public $newAttr;
    
    public function __construct($id,$uname,$passwd,$newAttr){
        parent::__construct($id,$uname,$passwd);
        $this->newAttr = $newAttr;
    }

    public function addEmployee(){
        // TODO: Add an employee...
        echo 'Adding employee...';
    }

    public function removeEmployee($id){
        // TODO: Remove an employee...
        echo "Removing employee... [ID:$id]";
    }

    public function hi(){
        return "Hi i am child class of ".parent::hi();
    }
    

}

$p1 = new Employee(1,"Hamza","0000");

$p2 = new Admin(2,"Ayoub","1234","newAttrnnn");

echo $p2->hi();


// print($p2->newAttr);

