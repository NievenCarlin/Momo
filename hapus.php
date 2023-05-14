<?php
require "config/function.php";

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
        <script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'momo.php';
        </script>
        ";
    exit;
} else {
    echo "
        <script>
            alert('Menu Gagal Dihapus');
            document.location.href = 'momo.php';
        </script>
        ";
    exit;
}
