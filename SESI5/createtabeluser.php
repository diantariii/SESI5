<?php
include("konfigurasi.php");

//koneksi ke database
$cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

if($cnn){
    
    //membuat tabel
    $tabel = "tbUSER";
    $sql = "CREATE TABLE $tabel(
        id int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(30) NOT NULL,
        email VARCHAR(255) NOT NULL,
        username VARCHAR(20),
        passkey VARCHAR(255),
        iduser VARCHAR(255)
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