<?php
require "config.php";

$invoer = htmlentities($_POST["invoer"], ENT_QUOTES);

$result = mysqli_query($mysqli, "INSERT INTO todo (title) VALUES ('{$invoer}')");

if ($result){
    echo "Toegevoegd";
}
else {
    echo "Fout!";
}