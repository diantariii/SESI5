<?php
include("konfigurasi.php");

//koneksi ke database
$cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

if($cnn){
    
    //membuat tabel MAHASISWA
    $tabel = "tbMHS";
    $sql = "CREATE TABLE $tabel(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(35),
        NIM VARCHAR(10),
        alamat VARCHAR(255),
        telp VARCHAR(15),
        prodi VARCHAR(25),
        jk VARCHAR(1),
        tgllahir DATE
    )";
    $hasil = mysqli_query($cnn, $sql);
    if($hasil){
        echo "Pembuatan Tabel ". $tabel . "Sukses";
    }else{
        echo "Pembuatan Tabel ". $tabel . "Gagal";
    }
} else{
    echo "Koneksi ke MYSQL Gagal!";
}