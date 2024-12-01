<?php
    session_start(); // Memulai sesi database untuk mengakses data
    include("../koneksi.php"); // Menyertakan file koneksi untuk akses database
?>

<!DOCTYPE html>
<html>
    <head>
    <title>
        Game Platform DataBase | By Muhammad Alfarazi Abdalla Huda - XI RPL I
        Games Table.
    </title>

    <style> /* Styling untuk table yang akan ditampilkan */
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>

    <ul>
        <li><a href="../games/index.php">Data Games</a></li> <!-- Mengarahkan halaman menjadi "../games/index.php -->
        <li><a href="../players/index.php">Data Player</a></li> <!-- Mengganti halaman menjadi "../players/index.php -->
    </ul>
    </head>

    <body>
        <h2>Data Games</h2>

        <!-- Memeriksa dan menampilkan notifikasi jika ada -->
        <?php if (isset($_SESSION['notifikasi'])): ?>
            <p> <?php echo $_SESSION['notifikasi'] ?></p>

            <!-- Menghapus notifikasi sehingga tidak muncul lagi saat halaman dimuat ulang -->
            <?php unset($_SESSION['notifikasi']); ?>
        <?php endif; ?>

        <table>
            <thead>
                <tr align="center">
                    <th>#</th>
                    <th>Nama Game</th>
                    <th>Genre</th>
                    <th>Harga</th>
                    <th> <a href="tambah_game.php">Tambah data</a></th> <!-- Tautan untuk menambahkan data -->
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1; // Membuat penomoran data dari angka 1

                // Membuat variabel untuk menjalankan query
                $query = $db->query("SELECT * FROM games");

                /* Perulangan untuk menampilkan data selama masih adanya data pada tabel */
                /* Menggunakan fetch_assoc untuk mengambil data perulangan dalam bentuk array */
                while ($game = $query->fetch_assoc()) {
                ?>

                <tr>
                    <!-- Menggambil dan menampilkan data yang telah ditambahkan -->
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $game['nama_game'] ?></td>
                    <td><?php echo $game['genre'] ?></td>
                    <td><?php echo $game['harga'] ?></td>
                    <td align="centre">
                        <!-- Tautan untuk kehalaman edit menggunakan parameter 'game_id' pada kolom tabel -->
                        <a href="edit_game.php?game_id=<?php echo $game['game_id']?>">Edit</a>
                        <!-- Tautan untuk kehalaman hapus data menggunakan parameter 'game_id' pada kolom tabel -->
                         <!-- Dan alert konfirmasi penghapusan data -->
                        <a onclick="return confirm('Anda yakin ingin menghapus data?')" href="hapus_game.php?id=<?php echo $game['game_id'] ?>">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
                <!-- Menghitung jumlah baris yang ada dalam tabel -->
        <p>Total: <?php echo mysqli_num_rows($query)?></p>
    </body>
</html>