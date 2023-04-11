<?php
    //bisa dipilih salah satu
    //include();
    //include_once();
    //require();
    //require_once();

    include("konfigurasi.php");

    $hasil = mysqli_connect(DBHOST, DBUSER, DBPASS);

    if($hasil){
        echo "Koneksi ke MYSQL Sukses!";
    } else{
        echo "Koneksi ke MYSQL Gagal!";
    }

    //echo "Host: ", DBHOST;