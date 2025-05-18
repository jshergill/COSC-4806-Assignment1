<?php 
session_start();
    if (isset($_SESSION["authenticated"]) && $_SESSION["authenticated"] ==1) {
    header("Location: login.php");}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>COSC4806</title>
  </head>
  <body>
  
    <h1>Assignment 1</h1>
    <p>Welcome, <?=$_SESSION['username']?></p>
    <p> Date:<? echo date("Y-m-d")?></p>
    
    <p><a href="login.php">Click here to login</a></p>

  </body>
</html>