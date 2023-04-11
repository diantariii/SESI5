<?php
include("konfigurasi.php");

//koneksi ke database
$cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

if($cnn){
    
    //membuat tabel MAHASISWA
    $tabel = "tbMATKUL";
    $sql = "CREATE TABLE $tabel(
        kode_mk VARCHAR(8) PRIMARY KEY,
        matkul VARCHAR(50),
        sks INT
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