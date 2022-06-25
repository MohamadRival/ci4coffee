<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table  = 'barang';
    // protected $useTimestamps = 'true';

    // public function getkomik($nama_barang = false)
    // {
    //     if ($nama_barang == false) {
    //         return $this->findall();
    //     }

    //     return $this->where(['nama_barang' => $nama_barang])->first();
    // }
}
