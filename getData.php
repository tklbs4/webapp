<?php
    $filename = "happyCSV.csv";
    $header = (["Username","Vorname", "Nachname", "Geburtstag", "E-Mail", "Passwort", "Strasse", "Wohnort", "PLZ", "Bundesland", "Telefon"]);

    $fp = fopen($filename, 'w');

    if (file_exists($filename))
    {
        fputcsv($fp, $header);
    }

    $items = ([$_POST["username"], $_POST["firstname"], $_POST["lastname"], $_POST["birthdate"], $_POST["email"], $_POST["password"], 
        $_POST["street"], $_POST["city"], $_POST["postcode"], $_POST["state"], $_POST["phonenumber"]]);

	$items[5] = password_hash($items[5], PASSWORD_DEFAULT);

    fputcsv($fp, $items);

    fclose($fp);


    header("Location: login_page.php");
?>

