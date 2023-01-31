<?php 
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/general.css">
    <link rel="stylesheet" href="stylesheets/all_a_big_lie.css">
    <link rel="stylesheet" href="stylesheets/login_pages.css">
    <title>Document</title>	
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="images/1280px-Fake_Taxi_logo.svg.png" alt="">
        </div>
        <div class="nav_buttons_div">
            <button class="nav_buttons" id="home" onclick="window.location.href='website_example.php'">Home</button>
            <button class="nav_buttons" id="products" onclick="window.location.href='website_example.php'">Products</button>
            <button class="nav_buttons" id="aboutUS" onclick="window.location.href='about_us.html'">About us</button>
        </div>
        <div class="logon_registration">
            <button class="logon_registrationbuttons" role="button" id="signin" onclick="window.location.href='index.php'">Sign up</button>

            <button class="logon_registrationbuttons" role="button" id="login" onclick="window.location.href='login_page.php'">Login</button>
        </div>
    </div>

    <div class="login">
        <form method="post" action="login_mysql.php" >
            <p>Username: <input type="text" name="username"></p>
            <p>Password: <input type="password" name="password"></p>
            <button class="button-64" role="button" type="submit"><span class="text">Submit</span></button>
        </form>
    </div>
</body>
</html>