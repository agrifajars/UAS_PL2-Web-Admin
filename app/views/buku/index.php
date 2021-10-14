<h3><a href="<?= BASEURL . 'home/welcome'?>">Kembali</a></h3>

<h1><?= $data['title'] ?></h1>

<h3><a href="<?= BASEURL . 'bukuController/add'?>">Tambah Data</a></h3>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Judul</th>
        <th>Penerbit</th>
        <th>Pengarang</th>
        <th>Tahun</th>
        <th>Jumlah</th>
        <th style="width: 15%;">Aksi</th>
    </tr>
    <?php foreach ($data['buku'] as $buku) { ?>
    <tr>
        <td><?= $buku['id'] ?></td>
        <td><?= $buku['judul'] ?></td>
        <td><?= $buku['penerbit'] ?></td>
        <td><?= $buku['pengarang'] ?></td>
        <td><?= $buku['tahun'] ?></td>
        <td><?= $buku['jumlah'] ?></td>
        <td>
            <a href="<?= BASEURL . 'bukuController/edit/' . base64_encode($buku['id']) ?>">Ubah</a> |
            <a href="<?= BASEURL . 'bukuController/hapus/' . base64_encode($buku['id']) ?>" onclick="return confirm('Anda yakin menghapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>