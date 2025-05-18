<?php 

session_start(); 

$valid_username = 'jshergill';
$valid_password = '123123';

$username = $_REQUEST['username'];
$_SESSION['username'] = $username;
$currentDate = date("Y-m-d");
$password = $_REQUEST['password'];



if ($username == $valid_username && $password == $valid_password){
    $_SESSION['authenticated'] = 1;
    header('Location:/');
} else {
    
    if (!isset($_SESSION['Failed_attempts'])){
        $_SESSION['Failed_attempts'] = 1;
    } else {
        $_SESSION['Failed_attempts'] += 1;
    }
    echo "Login failed. Attempt no.: " . $_SESSION['Failed_attempts'];
 }
?> 