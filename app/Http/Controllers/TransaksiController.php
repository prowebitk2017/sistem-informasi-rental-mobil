<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_transaksi = \App\Transaksi::where('nama_transaksi', 'LIKE', '%'.$request->cari.'%')->get();
        }
        else{
        $data_transaksi = \App\Transaksi::all();
        $data_pelanggan = \App\Pelanggan::all();
        $data_supir = \App\Supir::all();
        $data_mobil = \App\Mobil::all();

        }
        return view('transaksi.index',['data_transaksi' => $data_transaksi, 'data_pelanggan' => $data_pelanggan, 'data_supir' => $data_supir, 'data_mobil' => $data_mobil]);
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'pelanggan_id' => 'required',
            'mobil_id' => 'required',
            'supir_id' => 'required',
            'tgl_sewa' => 'required|date',
            'tgl_kembali' => 'required|date',
            'lama_sewa' => 'required|numeric',
            'harga_sewa' => 'required|numeric',
            'jaminan' => 'mimes:jpg,png'
        ]);
        
        $transaksi = \App\Transaksi::create($request->all());
        $pelanggan = \App\Pelanggan::all();
        $supir = \App\Supir::all();
        $mobil = \App\Mobil::all();
        if($request->hasFile('jaminan')){
            $request->file('jaminan')->move('images/',$request->file('jaminan')->getClientOriginalName());
            $transaksi->jaminan = $request->file('jaminan')->getClientOriginalName();
            $transaksi->save();
        }
        return redirect('/transaksi');
    }

    public function edit($id)
    {
        $transaksi = \App\Transaksi::find($id);
        return view('transaksi/edit', ['transaksi' => $transaksi]);
    }

    public function update(Request $request, $id)
    {
        $transaksi = \App\Transaksi::find($id);
        $transaksi->update($request->all());
        if($request->hasFile('jaminan')){
            $request->file('jaminan')->move('images/',$request->file('jaminan')->getClientOriginalName());
            $transaksi->jaminan = $request->file('jaminan')->getClientOriginalName();
            $transaksi->save();
        }
        return redirect ('/transaksi');
    }

    public function delete($id)
    {
        $transaksi = \App\Transaksi::find($id);
        $transaksi->delete();
        return redirect ('/transaksi');
    }
}
