<?php

include "config/connection.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM tbuser WHERE username='$username' AND password='$password'";
$query = mysqli_query($conn, $sql);
$num = mysqli_num_rows($query);
$result = mysqli_fetch_array($query);

if($num == 0){
    echo "Otentikasi gagal!";
}else{
    header("Location: momo.php");
    exit();
}