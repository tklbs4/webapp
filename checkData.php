<?php 
    session_start();

    $userData = [];
    $row = 1;
    if (($handle = fopen("happyCSV.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            $row++;
            for ($c=0; $c < $num; $c++) {
                array_push($userData, $data[$c]);
            }
        }
        fclose($handle);
    }

    $items = ([$_POST["username"], $_POST["password"]]);

    if($items[0] == $userData[11]){
       
        if(password_verify($items[1], $userData[16])){
            $_SESSION["ValidUser"] = True;
            $_SESSION["userid"] = $userData[11];
            header("Location: website_example.php");
        }
        else{
            header("Location: login_page.php");
        }
    }
    else{
        header("Location: login_page.php");
    }

    
?>