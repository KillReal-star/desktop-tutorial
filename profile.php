<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
    }
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <title>Авторизация и регистрация</title>
 </head>
 <body>

 <header>
 
 <div class="header-bg">
 <img id="logo" src="images/logo.png">
 <h1>MyEasyFitness</h1>
 <h2><?= $_SESSION['user']['username'] ?></h2>
<button><a href="cart.php">Перейти к корзине</a></button>
<button><a href="logout.php" class="logout">Выход</a></button>
 </div>
</header>

<main>
<div class="main-cart"></div>
<div class="mini-cart"></div>
 
  
    <div class="goods-out"></div>
   
    
    
</main>
<footer></footer>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/main.js"></script>
 </body>
</html>