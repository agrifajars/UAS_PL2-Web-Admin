<h3><a href="<?= BASEURL; ?>bukuController/index">Kembali</a></h3>

<h1><?= $data['title'] ?></h1>

<form action="<?= BASEURL; ?>bukuController/tambah" method="POST">
    <table>
        <tr>
            <td>Judul Buku</td>
            <td>
                <input type="text"  name="inputJudul" required>
            </td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td>
                <input type="text" name="inputPenerbit" required>
            </td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td>
                <input type="text" name="inputPengarang" required>
            </td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td>
                <input type="date" name="inputTahun" required>
            </td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>
                <input type="number" name="inputJumlah" required>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Simpan">
            </td>
        </tr>
    </table>
</form>