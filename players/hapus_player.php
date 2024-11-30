<?php
    session_start();
    include("../koneksi.php");

    if(isset($_GET['id'])) {
        $player_id = $_GET['id'];

        $sql = "DELETE FROM players WHERE player_id=$player_id";
        $query = mysqli_query($db, $sql);

        if ($query) {
            $_SESSION['notifikasi'] = "Data player berhasil dihapus!";
        } else {
            $_SESSION['notifikasi'] = "Data player gagal dihapus";
        }

        header('Location: index.php');
    } else {
        die("Akses ditolak...");
    }
?>