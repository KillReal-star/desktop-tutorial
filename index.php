<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport"
  content="width=device-width, user-scalable=no, initial=scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equip="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>MyEasyFitness</title>
 </head>
 <body>
     <?php
     require('connect.php');
     if (isset($_POST['username']) && isset($_POST['password'])){
         $username = $_POST['username'];
         $email = $_POST['email'];
         $password = $_POST['password'];

         $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
         $result = mysqli_query($connection, $query);

         if ($result){
             $smsg = "Регистрация прошла успешно";
         }
         else{
             $fsmsg = "Ошибка";
         }
     }
     ?>
     <div class="container">
<form class="form-signin" method="POST">
   <h2>Registration</h2>
   <input type="text" name="username" class="form-control" placeholder="Username" required>
   <input type="email" name="email" class="form-control" placeholder="Email" required>
   <input type="password" name="password" class="form-control" placeholder="Password" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
    <a href="login.php" class="btn btn-lg btn-primary btn-block">Login</a>
  </form>
 </body>
</html>