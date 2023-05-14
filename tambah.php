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
    <h1>Tambah Menu</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="harga">Harga : </label>
                <input type="text" name="harga" id="harga" required>
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>
</body>

</html>