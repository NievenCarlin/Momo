<?php
session_start();

if (!isset($_SESSION['uname'])) {
    ?>
    <script>
        alert("Silahkan login dulu!");
        location.href = "adm_login.php";
    </script>
    <?php
}