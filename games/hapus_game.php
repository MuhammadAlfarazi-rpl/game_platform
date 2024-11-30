<?php
    session_start();
    include("../koneksi.php");

    if(isset($_GET['id'])) {
        $game_id = $_GET['id'];

        $sql = "DELETE FROM games WHERE game_id=$game_id";
        $query = mysqli_query($db, $sql);

        if ($query) {
            $_SESSION['notifikasi'] = "Data game berhasil dihapus!";
        } else {
            $_SESSION['notifikasi'] = "Data game gagal dihapus";
        }

        header('Location: index.php');
    } else {
        die("Akses ditolak...");
    }
?>