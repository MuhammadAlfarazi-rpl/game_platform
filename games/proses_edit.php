<?php
    session_start();
    include("../koneksi.php");

    if (isset($_POST['simpan'])) {
        $game_id = $_POST['game_id'];
        $nama_game = $_POST['nama_game'];
        $harga = $_POST['harga'];
        $genre = $_POST['genre'];

        $sql = "UPDATE games SET
        
        nama_game='$nama_game',
        harga='$harga',
        genre='$genre'
        
        WHERE game_id=$game_id";
        $query = mysqli_query($db, $sql);

        if ($query) {
            $_SESSION['notifikasi'] = "Data game berhasil diperbarui!";
        } else {
            $_SESSION['notifikasi'] = "Data game gagal diperbarui!";
        }
        header('Location: index.php');
    } else {
        die("Akses ditolak...");
    }
    
    ?>