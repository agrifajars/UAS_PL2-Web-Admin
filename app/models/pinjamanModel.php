<?php

class pinjamanModel
{
    private $table = 'tbl_pinjaman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPinjaman()
    {
        $this->db->query('SELECT 
        tbl_pinjaman.id,tbl_user.nama, 
        tbl_buku.judul, 
        tbl_pinjaman.jumlah, 
        tbl_pinjaman.penyetuju, 
        tbl_pinjaman.status, 
        tbl_pinjaman.tanggal_pinjam, 
        tbl_pinjaman.tenggak_waktu 
        FROM tbl_pinjaman 
        INNER JOIN tbl_user ON tbl_user.id = tbl_pinjaman.id_anggota 
        INNER JOIN tbl_buku ON tbl_buku.id = tbl_pinjaman.id_buku');
        return $this->db->resultSet();
    }

    public function getPinjamanById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id ');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function hapusPinjaman($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function terimaPinjaman($id)
    {
        $this->db->query("UPDATE " . $this->table . " SET penyetuju=:penyetuju, status=:status");
        $this->db->bind('penyetuju', $_SESSION['nama']);
        $this->db->bind('status', 'berhasil');
        $this->db->execute();

        return $this->db->rowCount();
    }

}
