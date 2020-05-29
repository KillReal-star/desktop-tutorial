<?php session_start();?>
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
     
         
     
 <div class="container">
     <form class="form-signin" method="POST">
         <h2>Login</h2>
         
         <input type="text" name="username" placeholder="Username" class="form-control" required>
         
         <input type="password" name="password" placeholder="Password" class="form-control" required>
         <button href="content.php" class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
         <a href="index.php" class="btn btn-lg btn-primary btn-block">Registration</a>
    </form>
 </div>
         
     

<?php
    require('connect.php');
     
     if (isset($_POST['username']) and isset($_POST['password'])){
         $username = $_POST['username'];
         $password = $_POST['password'];
         $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
         $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
         $count = mysqli_num_rows($result);
         if ($count==1) {
             $_SESSION['username']=$username;
            
         }else {
             $fmsg ="Ошибка";
         }
     }
     if (isset($_SESSION['username'])){
         $username = $_SESSION['username'];
         echo "Здравствуйте " . $username . "! ";
         echo " Вы вошли!";
         echo '<a href='logout.php' class='btn btn-lg btn-primary "form-signin' > Logout </a>';
     }
     
     header("Location: https://myeasyfitness000.000webhostapp.com/content.php");
     exit;
         ?>
         </form>
         </div>
 </body>
</html>