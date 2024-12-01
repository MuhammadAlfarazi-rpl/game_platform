<?php
    session_start(); // Memulai sesi database untuk mengakses data
    include("../koneksi.php"); // Menyertakan file koneksi untuk akses database

    // Memeriksa apakah form edit telah dikirim dengan menekan tombol simpan.
    if (isset($_POST['simpan'])) {

        // Mengambil Data dari edit_game
        $game_id = $_POST['game_id'];
        $nama_game = $_POST['nama_game'];
        $harga = $_POST['harga'];
        $genre = $_POST['genre'];

        // Query untuk memperbarui (update) data yang di edit
        $sql = "UPDATE games SET
        
        nama_game='$nama_game',
        harga='$harga',
        genre='$genre'
        
        WHERE game_id=$game_id";

        // Menjalankan query dan menyimpannya dalam variabel
        $query = mysqli_query($db, $sql);

        // Menampilkan notifikasi jika;
        if ($query) {
            $_SESSION['notifikasi'] = "Data game berhasil diperbarui!"; // Data Game Berhasil Diperbarui
        } else {
            $_SESSION['notifikasi'] = "Data game gagal diperbarui!"; // Data Game gagal diperbarui
        }
        // Mengembalikan pengguna ke-halaman index
        header('Location: index.php');
    } else {
        die("Akses ditolak..."); // Menghentikan eksekusi jika akses tidak valid
    }
    
    ?>