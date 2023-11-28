<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/errorMessageDisplay.css">
    <link href='https://fonts.googleapis.com/css?family=Anton|Passion+One|PT+Sans+Caption' rel='stylesheet' type='text/css'>
    <title>Document</title>
</head>
    
<body>
<?php
  include_once 'include/funciones.php';

  startSession();

  if ($_SESSION['wrongPassword']){
      echo '<div id="background"></div>
      <div class="top">
        <h1>Error</h1>
        <h2>Contrasena incorrecta</h2>';
  }else{
      echo '<div id="background"></div>
      <div class="top">
    <h1>404</h1>
    <h2>Page Not found</h2>';
  }

  session_destroy();


?>

  
</div>
<div class="container">
  <div class="ghost-copy">
    <div class="one"></div>
    <div class="two"></div>
    <div class="three"></div>
    <div class="four"></div>
  </div>
  <div class="ghost">
    <div class="face">
      <div class="eye"></div>
      <div class="eye-right"></div>
      <div class="mouth"></div>
    </div>
  </div>
  <div class="shadow"></div>
</div>

<a href="login.php" class="button is-light ml-3">Go to Login</a>


<footer>
  <p>made by <a href="https://codepen.io/juliepark"> julie</a> ♡
</footer>
</body>
</html>