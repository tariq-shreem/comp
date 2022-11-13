<?php session_start() ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/register.css">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

 
    <form method="post" action="handel/login.php">


        <h3 id="logo">Login !</h3>
      
        
        <?php
    
    if(isset($_SESSION['errors'])){  ?>

        <div class="alert alert-danger" role="alert">
     <?php   echo $_SESSION['errors']; ?>
            </div>


   <?php 

    unset($_SESSION['errors']);
}
?>
        <label for="username">Email</label>
        <input type="text" id="username" name="email" placeholder="Type in your username.."  /> <br />


        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password.." autocomplete="off" required />
      
      
        <input type="submit" name="submit" value="Login" />
      
      </form>
</body>
</html>