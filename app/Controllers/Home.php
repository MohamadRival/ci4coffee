<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('login.php');
    }
    public function coba()
    {
        echo "nama saya $this->nama";
    }
}
