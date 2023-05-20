<?php
    include "inc/header.php";
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
            <form id="login" action="">
                <h2>Register</h2>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" >
                <div id="username-error" class="error"></div>

                <label for="email">Email:</label>
                <input type="email" id="email" name="username" placeholder="Enter your email" >
                <div id="email-error" class="error"></div>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" >
                <div id="password-error" class="error"></div>

                <label for="password">Confirm Password:</label>
                <input type="password" id="repassword" name="re-password" placeholder="Re-enter your password" >
                <div id="repassword-error" class="error"></div>

                <button type="submit">Register</button>
                <a href="login.php" class="btn link">Login now</a>
            </form>
            
              
        </article>
    </header>
</body>


</html>

<?php
include "inc/footer.php";
?>