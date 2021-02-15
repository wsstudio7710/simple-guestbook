<?php 

$conn = mysqli_connect("localhost", "root", "", "tugas");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function masukkan($data){
    global $conn;
    $tanggal        = date("Y-m-d");
    $nama           = $data["nama"];
    $email          = $data["email"];
    $alamat        = $data["alamat"];
    $pesan          = $data["pesan"];

    $query = "INSERT INTO databuku VALUES ('', '$tanggal','$nama','$email', '$alamat','$pesan')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambah($post){
    global $conn;
    $tanggal        = date("Y-m-d");
    $nama           = $post["nama"];
    $email          = $post["email"];
    $alamat        = $post["alamat"];
    $pesan          = $post["pesan"];

    $query = "INSERT INTO databuku VALUES ('', '$tanggal','$nama','$email', '$alamat','$pesan')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
