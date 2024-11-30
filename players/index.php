<?php 
    include("../koneksi.php");
    session_start();
?>

<!DOCTYPE html>
<html>
    <head><title>Player Database | Muhamamd Alfarazi</title>

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
        <h2>Data Players</h2>

        <?php if (isset($_SESSION['notifikasi'])): ?>
            <p> <?php echo $_SESSION['notifikasi'] ?></p>

            <?php unset($_SESSION['notifikasi']); ?>
        <?php endif; ?>

        <table>
            <thead>
                <tr align="center">
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th> <a href="tambah_player.php">Tambah data</a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;

                $query = $db->query("SELECT * FROM players");

                while ($player = $query->fetch_assoc()){
                    ?>
                
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $player['username'] ?></td>
                    <td><?php echo $player['email'] ?></td>
                    <td align="centre">
                        <a href="edit_player.php?player_id=<?php echo $player['player_id']?>">Edit</a>
                        <a onclick="return confirm('Anda yakin ingin menghapus data?')" href="hapus_player.php?id=<?php echo $player['player_id'] ?>">Hapus</a>

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