<?php 
$valid_username = 'jshergill';
$valid_password = '123123';

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ($username == $valid_username && $password == $valid_password){
    echo "Login successful";}
    else{
    echo "Login failed";}
?>