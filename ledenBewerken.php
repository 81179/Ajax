<?php
require "config.php";

$id = $_POST["id"];
$voornaam = htmlentities($_POST["voornaam"], ENT_QUOTES);
$achternaam = htmlentities($_POST["achternaam"], ENT_QUOTES);
$geslacht = htmlentities($_POST["geslacht"], ENT_QUOTES);
$geboortedatum = htmlentities($_POST["geboortedatum"], ENT_QUOTES);

$query = "UPDATE mphp4_leden SET gender = '{$geslacht}', first_name = '{$voornaam}', last_name = '{$achternaam}', birth_date = '{$geboortedatum}' WHERE id = '{$id}'";

$result = mysqli_query($mysqli,$query);

if ($result){
    echo "Aangepast";
}
else {
    echo "Fout!";
}