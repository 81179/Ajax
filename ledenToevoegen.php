<?php
require "config.php";

$voornaam = htmlentities($_POST["voornaam"], ENT_QUOTES);
$achternaam = htmlentities($_POST["achternaam"], ENT_QUOTES);
$geslacht = htmlentities($_POST["geslacht"], ENT_QUOTES);
$geboortedatum = htmlentities($_POST["geboortedatum"], ENT_QUOTES);
$toevoegdatum = date('Y/m/d h:i:s a', time());


$result = mysqli_query($mysqli, "INSERT INTO mphp4_leden (birth_date, first_name, last_name, gender, member_since)
  VALUES ('{$geboortedatum}','{$voornaam}','{$achternaam}','{$geslacht}','{$toevoegdatum}') ");

if ($result){
    echo "Toegevoegd";
}
else {
    echo "Fout!";
}