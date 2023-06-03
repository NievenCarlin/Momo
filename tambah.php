<?php
require "config/function.php";
//cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    //cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Menu Berhasil Ditambahkan');
                document.location.href = 'momo.php';
            </script>
        ";
        exit;
    } else {
        echo "
        <script>
            alert('Menu Gagal Ditambahkan');
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
    <title>Tambah Menu</title>
    <link rel="stylesheet" href="tambah.css">
</head>

<body>

    <div class="bg"></div>

    <div class="add">
        <form action="" method="post" enctype="multipart/form-data">
            <h1>ADD MENU</h1>
            <div class="img-box">
                <label for="gambar">Tap to add Picture</label>
                <input type="file" name="gambar" id="gambar" required hidden>
            </div>
    
            <div class="add-box">
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </div>
    
            <div class="add-box">
                <label for="harga">Harga : </label>
                <input type="text" name="harga" id="harga" required>
            </div>
    
            <button type="submit" name="submit" id="add-btn">Submit</button>
        </form>
    </div>
</body>

</html>