<h3><a href="<?= BASEURL . 'home/welcome'?>">Kembali</a></h3>

<h1><?= $data['title'] ?></h1>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Nama Anggota</th>
        <th>Judul Buku</th>
        <th>Jumlah Pinjaman</th>
        <th>Penyetuju</th>
        <th>Status</th>
        <th>Tanggal Pinjam</th>
        <th>Tenggak Waktu</th>
        <th style="width: 15%;">Aksi</th>
    </tr>
    <?php foreach ($data['pinjaman'] as $pinjaman) { ?>
    <tr>
        <td><?= $pinjaman['id'] ?></td>
        <td><?= $pinjaman['nama'] ?></td>
        <td><?= $pinjaman['judul'] ?></td>
        <td><?= $pinjaman['jumlah'] ?></td>
        <td><?= $pinjaman['penyetuju'] ?></td>
        <td><?= $pinjaman['status'] ?></td>
        <td><?= $pinjaman['tanggal_pinjam'] ?></td>
        <td><?= $pinjaman['tenggak_waktu'] ?></td>
        <td>
            <?php if($pinjaman['status'] != "berhasil") { ?>
                <a href="<?= BASEURL . 'pinjamanController/approve/' . base64_encode($pinjaman['id']) ?>">Setujui</a> |
            <?php } ?>
            <a href="<?= BASEURL . 'pinjamanController/hapus/' . base64_encode($pinjaman['id']) ?>" onclick="return confirm('Anda yakin menghapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>