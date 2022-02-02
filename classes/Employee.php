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
        if ($user && $passwd) header('location:pages/home.php');
        else header('location:pages/404.php');
        // TODO: Login handling...
    }

    public function hi(){
        return 'Employee class';
    }
}