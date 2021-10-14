<?php

class bukuController extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'Buku';
            $data['buku'] = $this->model('bukuModel')->getBuku();
            $this->view('buku/index', $data);
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

    public function tambah()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $this->model('bukuModel')->tambahBuku($_POST);
            header('Location: ' . BASEURL . 'bukuController');
            exit;
        }
    }

    public function ubahData()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $this->model('bukuModel')->ubahData($_POST);
            header('Location: ' . BASEURL . 'bukuController');
            exit;
        }
    }

    public function hapus($id)
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $this->model('bukuModel')->hapusBuku(base64_decode($id));
            header('Location: ' . BASEURL . 'bukuController');
            exit;
        }
    }
}
