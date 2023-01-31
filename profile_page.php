<?php 
    session_start();
    if(isset($_SESSION["ValidUser"])){
        ?>
        <style type="text/css">#logondiv{
            display:none;
        }</style>

        <?php
    }
    
    $server = "localhost";
    $database = "faketaxi";
    $username = "root";
    $password = "";

    try{
        $connection = new PDO("mysql:host=$server;dbname=$database",$username, 
        $password);
        // EXCEPTION konfigurieren
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $connection->prepare("SELECT * FROM users where userID = 
        :userid");

        if ($stmt->execute([':userid' => $_SESSION["userid"]])) { 
            $userData = $stmt->fetch();
        }
    }
    catch(PDOException $e){
        echo ( 'Fehler: ' . $e->getMessage());
    }
    finally {
        $connection = null;
    }  
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/website_fakeTaxi.css">
    <link rel="stylesheet" href="stylesheets/general.css">
    <link rel="stylesheet" href="stylesheets/profile_page.css">
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
                <button class="logon_registrationbuttons" role="button" id="logout" onclick="window.location.href='logout.php'">Log out</button>
            </div>
        <?php }else{ ?>
            <div class="logon_registration" id="logondiv">
            <button class="logon_registrationbuttons" role="button" id="signin" onclick="window.location.href='index.php'">Sign up</button>

            <button class="logon_registrationbuttons" role="button" id="login" onclick="window.location.href='login_page.php'">Login</button>
        </div>
        <?php } ?>
    </div>

    <div class="profile_card">
        <div class="profile_pic">
            <?php if(isset($_SESSION["userImg"])){?>
                <img src="<?php $_SESSION["userImg"]?>">
            <?php }else{?>
                <img src="images/profile_alternitiv.png">
            <?php }?>
        </div>
        <div class="profile_data">
            <div class="profile_data_user">
                <p id="username"><?php echo $userData["username"] ?></p>
            </div>
            <div class="profile_data_personal">

            </div>
        
            
        </div>
    </div>
</body>
</html>