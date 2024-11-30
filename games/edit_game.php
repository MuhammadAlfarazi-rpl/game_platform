<?php
 include("../koneksi.php");

 $id = $_GET['game_id'];

 $query = $db->query("SELECT * FROM games WHERE game_id = '$id'");
 $game = $query->fetch_assoc();
 ?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>EDIT GAME | Muhammad Alfarazi Abdalla Huda</title>
    </head>

    <body>
        <h3>Edit Data Game</h3>
        <form action="proses_edit.php" method="POST">
            <input type="hidden" name="game_id" value="<?php echo $game['game_id']; ?>">
        
        <table border="0">
            <tr>
                <td>Nama Games</td>
                <td>
                    <input type="text" name="nama_game"
                    value="<?php echo $game['nama_game']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>
                    <input type="text" name="harga"
                    value="<?php echo $game['harga']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Genre</td>
                <td>
                    <select name="genre" style="width: 100%" required>
                        <option value="" disabled>Pilih Genre</option>
                        <option value="Action" <?php echo ($game['genre'] == 'Action') ? 'selected' : ''; ?>>Action</option>
                        <option value="Adventure" <?php echo ($game['genre'] == 'Adventure') ? 'selected' : ''; ?>>Adventure</option>
                        <option value="Horror" <?php echo ($game['genre'] == 'Horror') ? 'selected' : ''; ?>>Horror</option>
                        <option value="RPG" <?php echo ($game['genre'] == 'RPG') ? 'selected' : ''; ?>>RPG</option>
                        <option value="Shooter" <?php echo ($game['genre'] == 'Shooter') ? 'selected' : ''; ?>>Shooter</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
        </form>
    </body>
</html>