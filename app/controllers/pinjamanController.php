<?php

class pinjamanController extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'Pinjaman';
            $data['pinjaman'] = $this->model('pinjamanModel')->getPinjaman();
            $this->view('pinjaman/index', $data);
        }
    }

    public function add()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'Tambah Data Buku';
            $this->view('buku/add', $data);
        }
    }

    public function edit($buku)
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'Ubah Buku';
            $data['buku'] = $this->model('bukuModel')->getBukuById(base64_decode($buku));
            $this->view('buku/edit', $data);
        }
    }

    public function approve($id)
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data_pinjaman = $this->model('pinjamanModel')->getPinjamanById(base64_decode($id));
            $this->model('bukuModel')->ubahJumlah($data_pinjaman);
            $this->model('pinjamanModel')->terimaPinjaman(base64_decode($id));

            $data['title'] = 'Pinjaman';
            $data['pinjaman'] = $this->model('pinjamanModel')->getPinjaman();
            $this->view('pinjaman/index', $data);
        }
    }

    public function hapus($id)
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data_pinjaman = $this->model('pinjamanModel')->getPinjamanById(base64_decode($id));
            $this->model('bukuModel')->resetJumlah($data_pinjaman);

            $this->model('pinjamanModel')->hapusPinjaman(base64_decode($id));
            header('Location: ' . BASEURL . 'pinjamanController');
            exit;
        }
    }
}
