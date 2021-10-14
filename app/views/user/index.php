<h3><a href="<?= BASEURL . 'home/welcome'?>">Kembali</a></h3>

<h1><?= $data['title'] ?></h1>

<h3><a href="<?= BASEURL . 'userController/add'?>">Tambah Data</a></h3>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Level</th>
        <th>Username</th>
        <th>Password</th>
        <th style="width: 15%;">Aksi</th>
    </tr>
    <?php foreach ($data['user'] as $data) { ?>
    <tr>
        <td><?= $data['id'] ?></td>
        <td><?= $data['nama'] ?></td>
        <td><?= $data['level'] ?></td>
        <td><?= $data['username'] ?></td>
        <td><?= $data['password'] ?></td>
        <td>
            <a href="<?= BASEURL . 'userController/edit/' . base64_encode($data['id']) ?>">Ubah</a> |
            <a href="<?= BASEURL . 'userController/hapus/' . base64_encode($data['id']) ?>" onclick="return confirm('Anda yakin menghapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>