<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
           'nama' => 'Andra',
           'pekerjaan' => 'Mahasiswa'
        ];
        return view('home')->with('data', $data);
    }

   public function contact()
{
    return view('contact');
}

}
