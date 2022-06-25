<?php

namespace App\Controllers;

use App\Models\BarangModel;

class pages extends BaseController
{
    protected $contohModel;
    public function __construct()
    {
        // $this->barangModel = new barangModel();
        $this->contohmodel = new Barangmodel();
    }
    public function index()
    {
        $barang = $this->contohmodel->findall();
        $data = [
            // 'barang' => $this->barangModel->getbarang($nama_barang),
            'title' => 'Home',
            'barang' => $barang
        ];
        return view('pages/home', $data);
    }
    public function product()
    {
        $data = [
            'title' => 'Product'
        ];
        return view('pages/product', $data);
    }
    public function gallery()
    {
        $data = [
            'title' => 'gallery'
        ];
        return view('pages/gallery', $data);
    }
    public function aboutus()
    {
        $data = [
            'title' => 'about us'
        ];
        return view('pages/aboutus', $data);
    }
    public function contactus()
    {
        $data = [
            'title' => 'Contact Us'
        ];
        return view('pages/contactus', $data);
    }
}
