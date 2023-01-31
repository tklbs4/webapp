<?php 
    session_start();
    if(isset($_SESSION["ValidUser"])){
        ?>
        <style type="text/css">#logondiv{
            display:none;
        }</style>

        <?php
    }    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/website_fakeTaxi.css">
    <link rel="stylesheet" href="stylesheets/general.css">
    <title>Fake Taxi</title>	
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

        <?php if(isset($_SESSION["ValidUser"])){?>
            <div class="logon_registration" id="logoutdiv">
                <?php if(isset($_SESSION["userImg"])){?>
                    <button class="profil_button" role="button" id="profile" onclick="window.location.href='profile_page.php'"><img id="profile" src="<?php $_SESSION["userImg"]?>"></button>
                <?php }else{ ?>
                    <button class="profil_button" role="button" id="profile" onclick="window.location.href='profile_page.php'"><img id="profile" src="images/profile_alternitiv.png"></button>
                <?php } ?>
                <button class="logon_registrationbuttons" role="button" id="logout" onclick="window.location.href='logout.php'">Log out</button>
            </div>
        <?php }else{ ?>
            <div class="logon_registration" id="logondiv">
            <button class="logon_registrationbuttons" role="button" id="signin" onclick="window.location.href='index.php'">Sign up</button>

            <button class="logon_registrationbuttons" role="button" id="login" onclick="window.location.href='login_page.php'">Login</button>
        </div>
        <?php } ?>
    </div>

    <div class="sells">
        <div class="car_sell">
            <div class="car_pic">
                <img src="images/images.jfif" alt="">
            </div>
            <div class="buy_car">
                <p>
                  This is a nice car
                </p>
                <button class="buy_buttons" onclick="window.location.href='all_a_big_lie.html'">Buy</button>
            </div>
        </div>
        <div class="car_sell">
            <div class="car_pic">
                <img src="images/taxi_car.jfif" alt="">
            </div>
            <div class="buy_car">
                <p>
                   This is also a nice car
                </p>
                <button class="buy_buttons" onclick="window.location.href='all_a_big_lie.html'">Buy</button>
            </div>
        </div>
    </div>

    <div class="secret_button_div">
        <button class="secret_button" onclick="window.location.href='take_a_cookie.html'">Hello</button>
    </div>
</body>
</html>