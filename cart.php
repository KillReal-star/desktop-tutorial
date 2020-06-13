<?php
session_start();
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <title>MyEasyFitness</title>
 </head>
 <body>
 <header>
 
 <div class="header-bg">
 <h1>MyEasyFitness</h1>
 <h2><?= $_SESSION['user']['username'] ?></h2>
<button><a href="profile.php">Вернутся на главную</a></button>
<button><a href="logout.php" class="logout">Выход</a></button>
 </div>
</header>
 <main>
 <div class="main-cart">
 </div>
 <div class="email-field">
 <p>Имя: <input type="text" id="ename"></p>
 <p>Email: <input type="text" id="email"></p>
 <p>Телефон: <input type="text" id="ephone"></p>
 <p><button class="send-email">Заказать</button></p>
 </div>
    
</main>
<footer></footer>
 
<script src="js/jquery-3.5.1.min.js"></script>

<script src="js/cart.js"></script>
 </body>
</html>