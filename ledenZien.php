<?php

require  "config.php";

$data = [];
//start de sessie
session_start();

//controleer of er een username is opgeslagen
if (!isset($_SESSION['username']) || strlen($_SESSION['username']) == 0){
    //geen geldige login, stuur naar het inlogformulier
    $data[] = false;
    echo json_encode($data);
} else {
    $result = mysqli_query($mysqli, "SELECT * FROM `mphp4_leden`");
    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }
    echo json_encode($data);
}