<?php
require "config/function.php";

//ambil data di URL
$id = $_GET["id"];

//query data menu berdasarkan id
$dtmenu = query("SELECT * FROM tbuser WHERE id = $id")[0];

//cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    //cek apakah data berhasil diubah atau tidak
    if (ubah_user($_POST) > 0) {
        echo "
            <script>
                alert('User Berhasil Diubah');
                document.location.href = 'momo-user.php';
            </script>
        ";
        exit;
    } else {
        echo "
        <script>
            alert('User Gagal Diubah');
            document.location.href = 'momo-user.php';
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
    <title>Edit User</title>
    <link rel="stylesheet" href="tambah.css">
</head>

<body>

    <div class="bg"></div>

    <div class="add">
        <form action="" method="post">
            <h1>CHANGE USER</h1>
            <input type="hidden" name="id" value="<?= $dtmenu["id"]; ?>">
    
            <div class="add-box">
                <label for="nama">Username</label>
                <input type="text" name="username" id="username" value="<?= $dtmenu["username"]; ?>">
            </div>
    
            <div class="add-box">
                <label for="harga">Fullname</label>
                <input type="text" name="fullname" id="fullname" value="<?= $dtmenu["fullname"]; ?>">
            </div>
    
            <button type="submit" name="submit" id="add-btn">CHANGE</button>
        </form>
    </div>
</body>

</html>