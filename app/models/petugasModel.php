<?php

class PetugasModel
{
    private $table = 'tbl_user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function loginPetugas($inputUsername)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username=:username AND level="petugas"');
        $this->db->bind('username', $inputUsername);
        return $this->db->single();
    }

}
