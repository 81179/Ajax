<?php
require "config.php";

$id = $_POST["id"];

$result = mysqli_query($mysqli, "DELETE FROM mphp4_leden WHERE id = $id");
//controleer het resultaat
if($result){
    echo "lid verwijderd";
}else{
    echo "Fout";
}