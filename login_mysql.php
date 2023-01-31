<?php
    session_start();

    $server = "localhost";
    $database = "faketaxi";
    $username = "root";
    $password = "";

    try{
        $connection = new PDO("mysql:host=$server;dbname=$database",$username, 
        $password);
        // EXCEPTION konfigurieren
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $connection->prepare("SELECT userID, username, password, profilepic FROM users where username = 
        :name");

        $items = ([$_POST["username"], $_POST["password"]]);

        if ($stmt->execute([':name' => $items[0]])) { 
            
            $row = $stmt->fetch();

            if(password_verify($items[1], $row[2])){
                $_SESSION["ValidUser"] = True;
                $_SESSION["userid"] = $row[0];
                $_SESSION["username"] = $row[1];
                $_SESSION["userImg"] = $row[3]; 
                header("Location: website_example.php");
            }
            else{
                header("Location: login_page.php");
            }
        }
    }
    catch(PDOException $e){
        echo ( 'Fehler: ' . $e->getMessage());
    }
    finally {
        $connection = null;
    }  
?>