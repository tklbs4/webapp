<?php   
    echo ('Eintrag erfolgreich prank');
    try{
        $serverName = "klettner.database.windows.net"; // update me
        $connectionOptions = array(
        "Database" => "FakeTaxi", // update me
        "Uid" => "thomas.klettner", // update me
        "PWD" => "TelefonTelefon69!" // update me
        );
        //Establishes the connection
        echo ('Eintrag erfolgreich prank vor connection');
        $conn = sqlsrv_connect($serverName, $connectionOptions);
        echo ('conection erfolgreich');
        
        $username = $_POST["username"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $birthdate = $_POST["birthdate"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $street = $_POST["street"];
        $city = $_POST["city"];
        $postcode = $_POST["postcode"];
        $state = $_POST["state"];
        $phonenumber = $_POST["phonenumber"];

        echo("After post")
        $stmt = sqlsrv_prepare($conn, "INSERT INTO dbo.users (username, password, firstname, lastname, birthdate, email, street, city, postcode, state, phone)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", [$username, $password, $firstname, $lastname, $birthdate, $email, $street, $city, $postcode, $state, $phonenumber]);
        echo("vor eintrag");
        if(!sqlsrv_execute($stmt)){
            echo("in if");
            throw new Exception(print_r(sqlsrv_errors(), true));
        }
        echo ('Eintrag erfolgreich');
    }
    catch(Exception $e)
    {
        echo ( 'Fehler: ' . $e->getMessage());
    }
    $conn = null;
       
    header("Location: website_example.php");
?>


<?php   
    /*echo ('Eintrag erfolgreich prank');
    try{
        $serverName = "klettner.database.windows.net"; // update me
        $connectionOptions = array(
        "Database" => "FakeTaxi", // update me
        "Uid" => "thomas.klettner", // update me
        "PWD" => "TelefonTelefon69!" // update me
        );
        //Establishes the connection
        echo ('Eintrag erfolgreich prank vor connection');
        $conn = sqlsrv_connect($serverName, $connectionOptions);
        echo ('conection erfolgreich');
        
        $items = ([$_POST["username"], $_POST["firstname"], $_POST["lastname"], $_POST["birthdate"], $_POST["email"], $_POST["password"], 
        $_POST["street"], $_POST["city"], $_POST["postcode"], $_POST["state"], $_POST["phonenumber"]]);

        $items[5] = password_hash($items[5], PASSWORD_DEFAULT);

        $sql = "INSERT INTO dbo.users (username, password, firstname, lastname, birthdate, email, street, city, postcode, state, phone)
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
    */
?>
