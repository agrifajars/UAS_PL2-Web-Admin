<?php

class loginController extends Controller
{

    public function index()
    {
        $this->view('login');
    }

    public function login()
    {
        $USER = $this->model('PetugasModel')->loginPetugas($_POST['inputUsername']);
        if ($USER) {
            if ($_POST['inputPassword'] == $USER['password']) {
                $_SESSION['id'] = $USER['id'];
                $_SESSION['nama'] = $USER['nama'];
                $_SESSION['level'] = $USER['level'];
                $_SESSION['is_login'] = TRUE;
                
                header('Location: ' . BASEURL . 'home/welcome');
                exit;
            } else {
                header('Location: ' . BASEURL);
                exit;
            }
            $this->view('home');

        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        header('Location: ' . BASEURL);
        exit;
    }

}
