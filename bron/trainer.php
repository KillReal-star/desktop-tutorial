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
  <title>Авторизация и регистрация</title>
  <link rel="stylesheet" href="css/style.css">
 </head>
 <body>

 <form action="bron.php" method="post">
      <label>Укажите дату и время начала:</label>
      <input type="datetime-local" name="datefiled"><br>


      <label>Укажите дату и время конца:</label>
      <input type="datetime-local" name="leavedate"><br>
      <button class="add-to-db">Обновить</button>
</form>

  </form>
 </body>
</html>