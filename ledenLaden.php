<?php
require "config.php";
//start de sessie
session_start();

    $data = [];

    $id = htmlentities($_POST["id"], ENT_QUOTES);

    $result = mysqli_query($mysqli, "SELECT * FROM mphp4_leden WHERE id = $id");
    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }

    echo json_encode($data);
