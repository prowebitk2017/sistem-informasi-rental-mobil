<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('sites.index');
    }

    public function tentang()
    {
        return view('sites.tentang');
    }

    public function kontak()
    {
        return view('sites.kontak');
    }

    public function kendaraan()
    {
        return view('sites.kendaraan');
    }

    public function booking()
    {
        $data_pesanan = \App\Pesanan::all();
            $data_mobil = \App\Mobil::all();
        return view('sites.booking',['data_pesanan' => $data_pesanan, 'data_mobil' => $data_mobil]);            
    }
}
