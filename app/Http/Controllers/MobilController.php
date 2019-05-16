<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_mobil = \App\Mobil::where('nama', 'LIKE', '%'.$request->cari.'%')->get();
        }
        else{
        $data_mobil = \App\Mobil::all();
        }
        return view('mobil.index',['data_mobil' => $data_mobil]);
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|string',
            'tahun' => 'required|numeric',
            'jenis' => 'required',
            'warna' => 'required|string',
            'nopol' => 'required|unique:mobil',
            'harga_sewa' => 'required|numeric',
            'kapasitas' => 'required|numeric',
            'status_pinjam' => 'required',
            'bahan_bakar' => 'required',
            'avatar' => 'mimes:jpg,png'
        ]);

        $mobil = \App\Mobil::create($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $mobil->avatar = $request->file('avatar')->getClientOriginalName();
            $mobil->save();
        }
        return redirect('/mobil');
    }

    public function edit($id)
    {
         $mobil = \App\Mobil::find($id);
        return view('mobil/edit', ['mobil' => $mobil]);
    }

    public function update(Request $request, $id)
    {
        $mobil = \App\Mobil::find($id);
        $mobil->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $mobil->avatar = $request->file('avatar')->getClientOriginalName();
            $mobil->save();
        }
        return redirect ('/mobil');
    }

    public function delete($id)
    {
        $mobil = \App\Mobil::find($id);
        $mobil->delete();
        return redirect ('/mobil');
    }
}
