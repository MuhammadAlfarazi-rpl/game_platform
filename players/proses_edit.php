<?php
    session_start();
    include("../koneksi.php");

    if (isset($_POST['simpan'])) {
        $player_id = $_POST['player_id'];
        $username = $_POST['username'];
        $email = $_POST['email'];

        $sql = "UPDATE players SET
        
        username='$username',
        email='$email'
        
        WHERE player_id=$player_id";
        $query = mysqli_query($db, $sql);

        if ($query) {
            $_SESSION['notifikasi'] = "Data player berhasil diperbarui!";
        } else {
            $_SESSION['notifikasi'] = "Data player gagal diperbarui!";
        }
        header('Location: index.php');
    } else {
        die("Akses ditolak...");
    }

    ?>