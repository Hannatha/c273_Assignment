<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "c273_assignment";
$link = mysqli_connect($host, $username, $password, $db);

if (!$link) {
    die(mysqli_error($link));
}
?>

<!-- Julien Ngo Jun Ang 19007457 -->