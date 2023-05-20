<?php
session_start();

if (!isset($_SESSION['fname'])) {
    ?>
    <script>
        alert("Silahkan login dulu!");
        location.href = "login.php";
    </script>
    <?php
}