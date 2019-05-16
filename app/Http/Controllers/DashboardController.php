<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;

class DashboardController extends Controller
{
    public function index()
    {
        //$data_mobil = Mobil::All();
        return view ('dashboards.index', compact('data_mobil'));

        //supirs = Supir::All();
        //return view ('dashboards.index', compact('supirs'));

        //$pelanggans = Pelanggan::All();
        //return view ('dashboards.index', compact('pelanggans'));    
    }


}
