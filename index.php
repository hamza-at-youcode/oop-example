<?php

spl_autoload_register(function($className){
    require_once "classes/$className.php";
});


$p1 = new Employee(1,"Hamza","0000");

$p2 = new Admin(2,"Ayoub","1234","newAttrnnn");

echo $p2->hi();


// print($p2->newAttr);

