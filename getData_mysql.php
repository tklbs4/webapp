<?php   
    try{
        $serverName = "klettner.database.windows.net"; // update me
        $connectionOptions = array(
        "Database" => "FakeTaxi", // update me
        "Uid" => "thomas.klettner", // update me
        "PWD" => "TelefonTelefon69!" // update me
        );
        //Establishes the connection
        $conn = sqlsrv_connect($serverName, $connectionOptions);

        
        $items = ([$_POST["username"], $_POST["firstname"], $_POST["lastname"], $_POST["birthdate"], $_POST["email"], $_POST["password"], 
        $_POST["street"], $_POST["city"], $_POST["postcode"], $_POST["state"], $_POST["phonenumber"]]);

        $items[5] = password_hash($items[5], PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, password, firstname, lastname, birthdate, email, street, city, postcode, state, phone)
        VALUES ('$items[0]', '$items[5]', '$items[1]', '$items[2]', '$items[3]', '$items[4]', '$items[6]', '$items[7]', '$items[8]', '$items[9]', '$items[10]')";
        sqlsrv_query($conn, $sql);
        echo ('Eintrag erfolgreich');
    }
    catch(PDOException $e)
    {
        echo ( 'Fehler: ' . $e->getMessage());
    }
    $conn = null;
       
    header("Location: website_example.php");
?>
