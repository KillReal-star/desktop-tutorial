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
  <title>Авторизация и регистрация</title>
  <link rel="stylesheet" href="css/style.css">
 </head>
 <body>

<form action="signin.php" method="POST">
   <input type="text" name="username" class="form-control" placeholder="Введите имя пользователя">
   <input type="password" name="password" class="form-control" placeholder="Введите пароль">
   <button type="submit">Войти</button>
    <p>
    У вас нет аккаунта? - <a href="/register.php">Зарегистрируйтесь</a>!
    </p>

    <?php
    if ($_SESSION['message']) {
        echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
     ?>

  </form>
 </body>
</html>