<?php
require "config/function.php";

//ambil data di URL
$id = $_GET["id"];

//query data menu berdasarkan id
$dtmenu = query("SELECT * FROM tbmenu WHERE id = $id")[0];

//cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    //cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Menu Berhasil Diubah');
                document.location.href = 'momo.php';
            </script>
        ";
        exit;
    } else {
        echo "
        <script>
            alert('Menu Gagal Diubah');
            document.location.href = 'momo.php';
        </script>
        ";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Menu</title>
    <link rel="stylesheet" href="tambah.css">
</head>

<body>

    <div class="bg"></div>

    <div class="add">
        <form action="" method="post">
            <h1>CHANGE MENU</h1>
            <input type="hidden" name="id" value="<?= $dtmenu["id"]; ?>">
            <div class="img-box">
                <label for="gambar">Add New Image</label>
                <input type="file" hidden name="gambar" id="gambar" value="<?= $dtmenu["gambar"]; ?>">
            </div>
    
            <div class="add-box">
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" value="<?= $dtmenu["nama"]; ?>">
            </div>
    
            <div class="add-box">
                <label for="harga">Harga : </label>
                <input type="text" name="harga" id="harga" value="<?= $dtmenu["harga"]; ?>">
            </div>
    
            <button type="submit" name="submit" id="add-btn">CHANGE</button>
        </form>
    </div>
</body>

</html>