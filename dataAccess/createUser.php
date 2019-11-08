<?php
include "DBcon.php";
$username = filter_input(INPUT_POST, 'username');
$name = filter_input(INPUT_POST, 'name');
$lastname = filter_input(INPUT_POST, 'lastname');
$password = filter_input(INPUT_POST, 'password');
$email = filter_input(INPUT_POST, 'email');


    $con = con();
    $con->query("insert into users (username, name, last_name, password, email) 
    values (\"$username\",\"$name\",\"$lastname\",\"$password\",\"$email\")");
    header('location: ../logIn.php');


?>