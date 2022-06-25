<?php

namespace App\Controllers;

class form extends BaseController
{
    public function login()
    {
        $data = [
            'title' => 'login',
            'judul' => 'Login'
        ];
        return view('form/login', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'register',
            'judul' => 'Register'
        ];
        return view('form/register', $data);
    }
}
