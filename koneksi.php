<?php
    $server = "localhost"; // Menentukan nama server (localhost)

    $user = "riis"; // Nama pengguna MySQL

    $password = "inibukanpassword"; // Password dari pengguna

    $nama_database = "game_platform"; // Nama database yang akan di hubungkan

    // Mencoba membuat koneksi ke database
    $db = mysqli_connect($server, $user, $password, $nama_database);

    // Memeriksa & memberi peringatan jika koneksi gagal
    if(!$db) {
        die("Gagal terhubung dengan database: " . mysqli_connect_error()); 
    } 
?>