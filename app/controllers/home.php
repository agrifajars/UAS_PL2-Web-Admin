<?php

class home extends Controller
{

    public function welcome()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'Home';
            $this->view('home');
        }
    }
}
