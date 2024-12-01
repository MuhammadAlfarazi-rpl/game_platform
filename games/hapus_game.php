<?php
    session_start(); // Memulai sesi database untuk mengakses data
    include("../koneksi.php"); // Menyertakan file koneksi untuk akses database

    if(isset($_GET['id'])) { // Memeriksa apakah parameter id telah diteruskan dalam URL.
        $game_id = $_GET['id']; // Menyimpan nilai/value dari id dalam variabel $game_id

        // Membuat query untuk menghapus data game berdasarkan game_id
        $sql = "DELETE FROM games WHERE game_id=$game_id";
        $query = mysqli_query($db, $sql);

        // Menampilkan notifikasi jika;
        if ($query) {
            $_SESSION['notifikasi'] = "Data game berhasil dihapus!"; // Penghapusan Berhasil
        } else {
            $_SESSION['notifikasi'] = "Data game gagal dihapus"; // Penghapusan gagal
        }

        header('Location: index.php'); // Mengembalikan pengguna ke-halaman index
    } else {
        die("Akses ditolak..."); // Menghentikan eksekusi jika akses tidak valid
    }
?>