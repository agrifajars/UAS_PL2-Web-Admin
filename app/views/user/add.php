<h3><a href="<?= BASEURL; ?>userController/index">Kembali</a></h3>

<h1><?= $data['title'] ?></h1>

<form action="<?= BASEURL; ?>userController/tambah" method="POST">
    <table>
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="inputNama" required>
            </td>
        </tr>
        <tr>
            <td>Username</td>
            <td>
                <input type="text" name="inputUsername" required>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="text" name="inputPassword" required>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Simpan">
            </td>
        </tr>
    </table>
</form>