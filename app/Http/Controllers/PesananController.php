<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index(Request $request)
        {
            if($request->has('cari')){
                $data_pesanan = \App\Pesanan::where('nama_lengkap', 'LIKE', '%'.$request->cari.'%')->get();
            }
            else{
            $data_pesanan = \App\Pesanan::all();
        }
        return view('pesanan.index',['data_pesanan' => $data_pesanan]);
    }
    
        public function create(Request $request)
        {
            $pesanan = \App\Pesanan::create($request->all());
            $data_mobil = \App\Mobil::all();
            return redirect('/booking');
        }
    
        public function delete($id)
        {
            $pesanan = \App\Pesanan::find($id);
            $pesanan->delete();
            return redirect ('/pesanan');
        }
}
