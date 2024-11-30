<?php
 include("../koneksi.php");

 $id = $_GET['player_id'];

 $query = $db->query("SELECT * FROM players WHERE player_id = '$id'");
 $player = $query->fetch_assoc();
 ?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>EDIT PLAYER | Muhammad Alfarazi Abdalla Huda</title>
    </head>

    <body>
        <h3>Edit Data Player</h3>
        <form action="proses_edit.php" method="POST">
        <input type="hidden" name="player_id" value="<?php echo $player['player_id']; ?>">

        <table border="0">
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="username"
                    value="<?php echo $player['username']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email"
                    value="<?php echo $player['email']; ?>" required>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
        </form>
    </body>