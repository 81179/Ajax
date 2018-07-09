<?php
/**
 * Created by PhpStorm.
 * User: 81179
 * Date: 01/11/2017
 * Time: 11:29
 */

$myArray = [
    1 => "Kees",
    5 => "Carla",
    21 => "Maro",
    17 => "Edwin",
    30 => "Nira"
];

$output = json_encode($myArray);
echo $output;