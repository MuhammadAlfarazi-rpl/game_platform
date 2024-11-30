<?php

    session_start();
    include("../koneksi.php");

    if(isset($_POST['simpan'])){
        $nama_game = $_POST['nama_game'];
        $harga = $_POST['harga'];
        $genre = $_POST['genre'];

        $sql = "INSERT INTO games (nama_game, harga, genre)
        VALUES ('$nama_game','$harga','$genre')";

        $query = mysqli_query($db, $sql);

        if ($query) {
            $_SESSION['notifikasi'] = "Game berhasil ditambahkan!";
        } else {
            $_SESSION['notifikasi'] = "Game gagal ditambahkan";
        }
        header('Location: index.php');
    } else {
        die("Akses ditolak...");
    }

?>