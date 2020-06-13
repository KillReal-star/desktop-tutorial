<?php
session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
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
   
<form action="signup.php" method="POST">
   <input type="text" name="username" placeholder="Введите своё полное имя">
   <input type="email" name="email" placeholder="Введите свою почту">
   <input type="password" name="password" placeholder="Введите пароль">
   <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
    <button type="submit">Зарегистрироватся</button>
    <p>
    У вас уже есть аккаунт? - <a href="index.php">Авторизируйтесь</a>!
    </p>
    <?php
    if ($_SESSION['message']) {
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
    }
    unset($_SESSION['message']);
     ?>
     
  </form>
 </body>
</html>