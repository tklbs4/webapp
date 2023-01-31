<?php 
    $server = "klettner.database.windows.net";
    $database = "faketaxi";
    $username = "thomas.klettner";
    $password = "TelefonTelefon69!";

    
    try{
        $database = "FakeTaxi";  
        $connection = new PDO("dblib:version=8.0;charset=UTF-8;host={$server};dbname={$database}", $username, $password);  
        // EXCEPTION konfigurieren
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
        $items = ([$_POST["username"], $_POST["firstname"], $_POST["lastname"], $_POST["birthdate"], $_POST["email"], $_POST["password"], 
        $_POST["street"], $_POST["city"], $_POST["postcode"], $_POST["state"], $_POST["phonenumber"]]);

        $items[5] = password_hash($items[5], PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, password, firstname, lastname, birthdate, email, street, city, postcode, state, phone)
        VALUES ('$items[0]', '$items[5]', '$items[1]', '$items[2]', '$items[3]', '$items[4]', '$items[6]', '$items[7]', '$items[8]', '$items[9]', '$items[10]')";
        $connection->exec($sql);
        echo ('Eintrag erfolgreich');
    }
    catch(PDOException $e)
    {
        echo ( 'Fehler: ' . $e->getMessage());
    }
    $connection = null;
       
    header("Location: website_example.php");
?>
