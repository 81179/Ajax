<?php
//lees het config bestand uit
require 'config.php';

//lees alle formuliervelden
$username = $_POST['gebruikersnaam'];
$password = $_POST['wachtwoord'];

 //maak de controle-query
 $query = "SELECT * FROM mphp4_users WHERE username = '$username' AND password = '$password'";

 //voer de query uit
 $result = mysqli_query($mysqli, $query);

 //controleer of de login correct was
 if (mysqli_num_rows($result) == 1){
    //login correct, start de sessie
    session_start();

    //sla de username op in de sessie
    $_SESSION['username'] = $username;

    echo "werkt";
 }
else{
    echo "werkt niet";
}