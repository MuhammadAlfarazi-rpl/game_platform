<!DOCTYPE HTML>
<html>
    <head>
        <title>Tambah Game | Muhammad Alfarazi Abdalla Huda</title>
    </head>

    <body>
        <h3>Tambah Data Game</h3>
        <form action="proses_tambah.php" method="POST">        
        <table border="0">
            <tr>
                <td>Nama Games</td>
                <td>
                    <input type="text" name="nama_game" required>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>
                    <input type="text" name="harga" required>
                </td>
            </tr>
            <tr>
                <td>Genre</td>
                <td>
                    <select name="genre" style="width: 100%" required>
                        <option value="" selected disabled>Pilih Genre</option>
                        <option value="Action">Action</option>
                        <option value="Adventure">Adventure</option>
                        <option value="Horror">Horror</option>
                        <option value="RPG">RPG</option>
                        <option value="Shooter">Shooter</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
        </form>
    </body>
</html>