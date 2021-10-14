<h3><a href="<?= BASEURL; ?>bukuController/index">Kembali</a></h3>

<h1><?= $data['title'] ?></h1>

<form action="<?= BASEURL; ?>bukuController/ubahdata" method="POST">
    <table>
        <tr>
            <td>Judul Buku</td>
            <td>
                <input type="text"  name="inputJudul" value="<?= $data['buku']['judul']?>" required>
            </td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td>
                <input type="text" name="inputPenerbit" value="<?= $data['buku']['penerbit']?>" required>
            </td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td>
                <input type="text" name="inputPengarang" value="<?= $data['buku']['pengarang']?>" required>
            </td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td>
                <input type="date" name="inputTahun" value="<?= $data['buku']['tahun']?>" required>
            </td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>
                <input type="number" name="inputJumlah" value="<?= $data['buku']['jumlah']?>" required>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Simpan">
            </td>
        </tr>
    </table>
</form>