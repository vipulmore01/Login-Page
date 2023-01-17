<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        echo view('common/header');
        echo view('login');
    }
    public function do_login()
    {
        echo "Logged In..";
        // echo view('common/header');
        // echo view('login');
    }
}
