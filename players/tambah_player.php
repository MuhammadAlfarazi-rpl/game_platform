<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Player | Muhammad Alfarazi Abdalla Huda</title>
    </head>

    <body>
        <h3>Tambah Data Player</h3>
        <form action="proses_tambah.php" method="POST">
            <table border="0">
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" required>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="text" name="email" required>
                    </td>
                </tr>
            </table>
            <button type="submit" name="simpan">Simpan</button>
        </form>
    </body>
</html>