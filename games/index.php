<?php
    include("../koneksi.php"); 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    <title>
        Game Platform DataBase | By Muhammad Alfarazi Abdalla Huda - XI RPL I
        Games Table.
    </title>

    <style> 
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>

    <ul>
        <li><a href="../games/index.php">Data Games</a></li>
        <li><a href="../players/index.php">Data Player</a></li>
    </ul>
    </head>

    <body>
        <h2>Data Games</h2>

        <?php if (isset($_SESSION['notifikasi'])): ?>
            <p> <?php echo $_SESSION['notifikasi'] ?></p>

            <?php unset($_SESSION['notifikasi']); ?>
        <?php endif; ?>

        <table>
            <thead>
                <tr align="center">
                    <th>#</th>
                    <th>Nama Game</th>
                    <th>Genre</th>
                    <th>Harga</th>
                    <th> <a href="tambah_game.php">Tambah data</a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;

                $query = $db->query("SELECT * FROM games");

                while ($game = $query->fetch_assoc()) {
                ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $game['nama_game'] ?></td>
                    <td><?php echo $game['genre'] ?></td>
                    <td><?php echo $game['harga'] ?></td>
                    <td align="centre">
                        <a href="edit_game.php?game_id=<?php echo $game['game_id']?>">Edit</a>
                        <a onclick="return confirm('Anda yakin ingin menghapus data?')" href="hapus_game.php?id=<?php echo $game['game_id'] ?>">Hapus</a>

                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <p>Total: <?php echo mysqli_num_rows($query)?></p>
    </body>
</html>