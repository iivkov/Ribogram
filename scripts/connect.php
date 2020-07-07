<?php
    $dbservername = "localhost";
    $dbusername   = "root";
    $dbpassword   = "";
    $dbname   = "ribogram";

    $db = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
    
    if($db->connect_error) {   
        die("Dogodila se pogreška pri spajanju s bazom podataka: " . $db->connect_error);
    }
?>