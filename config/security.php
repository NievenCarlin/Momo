<?php

include "config/security.php";

if (!issset($_SESSION['uname'])) {
    ?>
    <script>
        alert("silahkan login dulu!");
        location.href = "index.php";
    </script>
    <?php
}