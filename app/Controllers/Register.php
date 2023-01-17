<?php

namespace App\Controllers;
use \App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        echo view('common/header');
        echo view('register');
    }
    public function do_register()
    {
        $userModel = new UserModel();

        echo "Registered Successfully";
        // echo view('common/header');
        // echo view('register');
    }
}
