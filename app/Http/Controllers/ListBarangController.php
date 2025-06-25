<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangController extends Controller
{
    public function show($kode, $nama)
    {
        return view('list_barang', ['kode' => $kode, 'nama' => $nama]);
    }
}
