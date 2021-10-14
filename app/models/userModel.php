<?php

class userModel
{
    private $table = 'tbl_user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAnggota()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE level="anggota"');

        return $this->db->resultSet();
    }

    public function getUserById($id)
    {
        $this->db->query(' SELECT * FROM ' . $this->table . ' WHERE id=:id ');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function tambahAnggota($data)
    {
        $this->db->query("INSERT INTO " . $this->table . " VALUES ('', :nama, :username, :password, :level)");
        $this->db->bind('nama', $data['inputNama']);
        $this->db->bind('username', $data['inputUsername']);
        $this->db->bind('password', $data['inputPassword']);
        $this->db->bind('level', 'anggota');
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusUser($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahData($data)
    {
        $this->db->query("UPDATE " . $this->table . " SET nama = :nama, username = :username, password = :password");
        $this->db->bind('nama', $data['inputName']);
        $this->db->bind('username', $data['inputUsername']);
        $this->db->bind('password', $data['inputPassword']);
        $this->db->execute();

        return $this->db->rowCount();
    }

}
