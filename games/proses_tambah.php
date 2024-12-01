<?php

    session_start(); // Memulai sesi database untuk mengakses data
    include("../koneksi.php"); // Menyertakan file koneksi untuk akses database

    if(isset($_POST['simpan'])) { // Memeriksa apakah tombol "Submit" sudah ditekan

        // Mengambil data dari file tambah_game dan menyimpannya dari variabel
        $nama_game = $_POST['nama_game']; 
        $harga = $_POST['harga'];
        $genre = $_POST['genre'];

        // Menyusun query guna menyimpan data yang telah diambil sebelumnya
        $sql = "INSERT INTO games (nama_game, harga, genre)
        VALUES ('$nama_game','$harga','$genre')";

        // Menjalankan query dan menyimpannya dalam variabel
        $query = mysqli_query($db, $sql);

        // Menampilkan notifikasi jika;
        if ($query) {
            $_SESSION['notifikasi'] = "Game berhasil ditambahkan!"; // Penambahan Berhasil
        } else {
            $_SESSION['notifikasi'] = "Game gagal ditambahkan"; // Penambahan gagal
        }
        header('Location: index.php'); // Mengembalikan pengguna ke-halaman index

    } else {
        die("Akses ditolak..."); // Menghentikan eksekusi jika akses tidak valid
    }

?>