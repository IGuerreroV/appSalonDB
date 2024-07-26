<?php

$db = mysqli_connect('localhost', 'root', 'root', 'appsalon');

// echo "<pre>";
// var_dump($db);
// echo "</pre>";

if(!$db) {
    echo 'Hubo un error';
    exit;
}

