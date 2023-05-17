<?php

$user = "root";
$server = "localhost";
$password = "";
$db = "momodb";

$conn = mysqli_connect($server, $user, $password, $db);

if(!$conn){
    die ("Gagal koneksi ke database");
}