<?php

//koneksi database
$conn = mysqli_connect("localhost", "root", "", "momo");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    // ambil data dari tiap elemen dalam form
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);

    // cek apakah ada file yang diunggah
    if (isset($_FILES["gambar"]["tmp_name"]) && !empty($_FILES["gambar"]["tmp_name"])) {
        // Tentukan lokasi tujuan penyimpanan gambar
        $targetDir = "assets/img/";
        $gambarName = basename($_FILES["gambar"]["name"]); // Dapatkan nama asli file gambar
        
        // Generate nama file baru
        $ext = pathinfo($gambarName, PATHINFO_EXTENSION); // Dapatkan ekstensi file gambar
        $gambarNewName = "test." . $ext; // Ubah nama file menjadi "test" dengan ekstensi yang sama
        
        $gambar = $targetDir . $gambarNewName; // Gabungkan direktori tujuan dengan nama file baru

        // Pindahkan file yang diunggah ke lokasi tujuan
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $gambar)) {
            // Query insert data dengan menyimpan path gambar
            $query = "INSERT INTO tbmenu (gambar, nama, harga) VALUES ('$gambarNewName', '$nama', '$harga')";
            mysqli_query($conn, $query);

            return mysqli_affected_rows($conn);
        } else {
            // Jika gagal mengunggah gambar, tampilkan pesan error
            echo "Gagal mengunggah gambar.";
            return 0;
        }
    } else {
        // jika tidak ada file yang diunggah, jalankan query insert data tanpa gambar
        $query = "INSERT INTO tbmenu (nama, harga) VALUES ('$nama', '$harga')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
}


// function tambah($data)
// {
//     //ambil data dari tiap elemen dalam form
//     global $conn;
//     $gambar = $data["gambar"];
//     $nama = htmlspecialchars($data["nama"]);
//     $harga = htmlspecialchars($data["harga"]);

//     //query insert data
//     $query = "INSERT INTO tbmenu
//         VALUES
//     ('', '$gambar', '$nama', '$harga')
//     ";

//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);
// }

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tbmenu WHERE id=$id");

    return mysqli_affected_rows($conn);
}

function hapus_user($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tbuser WHERE id=$id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    //ambil data dari tiap elemen dalam form
    global $conn;
    $id = $data["id"];
    $gambar = htmlspecialchars($data["gambar"]);
    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);

    //query insert data
    $query = "UPDATE tbmenu SET
                gambar = '$gambar',
                nama = '$nama',
                harga = '$harga'
            WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah_user($data)
{
    //ambil data dari tiap elemen dalam form
    global $conn;
    $id = $data["id"];
    $username = htmlspecialchars($data["username"]);
    $fullname = htmlspecialchars($data["fullname"]);

    //query insert data
    $query = "UPDATE tbuser SET
                username = '$username',
                fullname = '$fullname'
            WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
