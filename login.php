<?php session_start();?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport"
  content="width=device-width, user-scalable=no, initial=scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equip="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
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
        
         </form>
         </div>
 </body>
</html>