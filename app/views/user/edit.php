<h3><a href="<?= BASEURL; ?>userController/index">Kembali</a></h3>

<h1><?= $data['title'] ?></h1>

<form action="<?= BASEURL; ?>usercontroller/ubahdata" method="POST">
    <table>
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="inputName" value="<?= $data['user']['nama']?>" required>
            </td>
        </tr>
        <tr>
            <td>Username</td>
            <td>
                <input type="text" name="inputUsername" value="<?= $data['user']['username']?>" required>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="text" name="inputPassword" value="<?= $data['user']['password']?>" required>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Ubah">
            </td>
        </tr>
    </table>
</form>