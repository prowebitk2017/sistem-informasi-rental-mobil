<?php

use Illuminate\Support\Facades\DB;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(Request $request)
        {
            if($request->has('cari')){
                $data_pelanggan = \App\Pelanggan::where('nama_lengkap', 'LIKE', '%'.$request->cari.'%')->get();
            }
            else{
            $data_pelanggan = \App\Pelanggan::all();
            }
            return view('pelanggan.index',['data_pelanggan' => $data_pelanggan]);
        }
    
        public function create(Request $request)
        {
            $this->validate($request,[
                'nik' => 'required|unique:pelanggan|numeric',
                'nama_lengkap' => 'required|string',
                'email' => 'required|unique:pelanggan|email',
                'no_hp' => 'required|unique:pelanggan|numeric',
                'alamat' => 'required|string',
            ]);

            \App\Pelanggan::create($request->all());
            return redirect('/pelanggan');
        }
    
        public function edit($id)
        {
            $pelanggan = \App\Pelanggan::find($id);
            return view('pelanggan/edit', ['pelanggan' => $pelanggan]);
        }
    
        public function update(Request $request, $id)
        {
            $pelanggan = \App\Pelanggan::find($id);
            $pelanggan->update($request->all());
            return redirect ('/pelanggan');
        }
    
        public function delete($id)
        {
            $pelanggan = \App\Pelanggan::find($id);
            $pelanggan->delete();
            return redirect ('/pelanggan');
        }
}
