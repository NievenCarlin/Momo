<?php

//koneksi database
$conn = mysqli_connect("localhost", "root", "", "momodb");

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
    //ambil data dari tiap elemen dalam form
    global $conn;
    $gambar = $data["gambar"];
    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);

    //query insert data
    $query = "INSERT INTO tbmenu
        VALUES
    ('', '$gambar', '$nama', '$harga')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

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
    $gambar = htmlspecialchars ($data["gambar"]);
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
