<?php

class bukuModel
{
    private $table = 'tbl_buku';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getBuku()
    {
        $this->db->query('SELECT * FROM ' . $this->table);

        return $this->db->resultSet();
    }

    public function getBukuById($id)
    {
        $this->db->query(' SELECT * FROM ' . $this->table . ' WHERE id=:id ');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function tambahBuku($data)
    {
        $this->db->query("INSERT INTO " . $this->table . " VALUES ('', :judul, :jumlah, :penerbit, :pengarang, :tahun)");
        $this->db->bind('judul', $data['inputJudul']);
        $this->db->bind('jumlah', $data['inputJumlah']);
        $this->db->bind('penerbit', $data['inputPenerbit']);
        $this->db->bind('pengarang', $data['inputPengarang']);
        $this->db->bind('tahun', $data['inputTahun']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusBuku($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahData($data)
    {
        $this->db->query("UPDATE " . $this->table . " SET judul = :judul, jumlah = :jumlah, penerbit = :penerbit, pengarang = :pengarang, tahun = :tahun");
        $this->db->bind('judul', $data['inputJudul']);
        $this->db->bind('jumlah', $data['inputJumlah']);
        $this->db->bind('penerbit', $data['inputPenerbit']);
        $this->db->bind('pengarang', $data['inputPengarang']);
        $this->db->bind('tahun', $data['inputTahun']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahJumlah($data)
    {
        $this->db->query("UPDATE " . $this->table . " SET jumlah = jumlah -:jumlah WHERE id=:id");
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('id', $data['id_buku']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function resetJumlah($data)
    {
        $this->db->query("UPDATE " . $this->table . " SET jumlah = jumlah +:jumlah WHERE id=:id");
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('id', $data['id_buku']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
