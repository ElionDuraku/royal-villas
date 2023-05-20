<?php
    include "inc/header.php";

    if(isset($_POST['login'])){
        login($_POST['email'],$_POST['fjalekalimi']);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
        <link href='https://unpkg.com/css.gg@2.0.0/icons/css/check-o.css' rel='stylesheet'>
        <title>Royal Villas</title>
    </head>
<body>
    <article class="content">
        <form id="login" action="" method="post">
            <h2>Login</h2>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" >
            <div id="email-error" class="error"></div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="fjalekalimi" placeholder="Enter your password" >
            <div id="password-error" class="error"></div>
            <button type="submit" id="login" name="login">Login</button>
            <!-- <input type="submit"  name="login" value='Login'> -->
            <a href="register.php" class="btn link">Register now</a>
        </form>
        
          
    </article>
</body>
</html>
