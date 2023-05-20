<?php
include "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/check-o.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Royal Villas</title>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-logo">
        <a href="index.php">
          <span>Royal Villas</span>
        </a>
        </div>
        <div class="navbar-menu">
          <a href="index.php">Home</a>
          <a href="villa.php">Villas</a>
          <a href="category.php">Category</a>
          <?php
                if(isset($_SESSION['user'])){
                    echo "<a href='reservations.php'>Reservations</a>";
                    if($_SESSION['user']['roli']==1){
                        echo "<a href='klientet.php'>Clients</a>";
                    }
                    if($_SESSION['user']['roli']==1){
                        echo "<a href='users.php'>Users</a>";
                    }
                    echo "<a class='extralink' href='logout.php'>Logout</a>";
                }else{
                    echo "<a class='extralink' href='login.php'>Login</a>";
                }
                
          ?>


          
        </div>
    </nav>