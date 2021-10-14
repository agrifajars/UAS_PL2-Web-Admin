<?php

class userController extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'Anggota';
            $data['user'] = $this->model('userModel')->getAnggota();
            $this->view('user/index', $data);
        }
    }

    public function add()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'Tambah Anggota';
            $this->view('user/add', $data);
        }
    }

    public function edit($user)
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'Ubah Anggota';
            $data['user'] = $this->model('userModel')->getUserById(base64_decode($user));
            $this->view('user/edit', $data);
        }
    }

    public function tambah()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $this->model('userModel')->tambahAnggota($_POST);
            header('Location: ' . BASEURL . 'userController');
            exit;
        }
    }

    public function ubahData()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $this->model('userModel')->ubahData($_POST);
            header('Location: ' . BASEURL . 'userController');
            exit;
        }
    }

    public function hapus($id)
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $this->model('userModel')->hapusUser(base64_decode($id));
            header('Location: ' . BASEURL . 'userController');
            exit;
        }
    }
}
