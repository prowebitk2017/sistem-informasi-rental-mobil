<?php

use Illuminate\Support\Facades\DB;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupirController extends Controller
{
        public function index(Request $request)
        {
            if($request->has('cari')){
                $data_supir = \App\Supir::where('nama', 'LIKE', '%'.$request->cari.'%')->get();
            }
            else{
            $data_supir = \App\Supir::all();
            }
            return view('supir.index',['data_supir' => $data_supir]);
        }
    
        public function create(Request $request)
        {
            $this->validate($request,[
                'no_sim' => 'required|unique:supir|numeric',
                'nama' => 'required|string',
                'no_hp' => 'required|unique:supir|numeric',
                'alamat' => 'required|string',
                'avatar' => 'mimes:jpg,png',
            ]);

            $supir = \App\Supir::create($request->all());
            if($request->hasFile('avatar')){
                $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
                $supir->avatar = $request->file('avatar')->getClientOriginalName();
                $supir->save();
            }
            return redirect('/supir');
        }
    
        public function edit($id)
        {
            $supir = \App\Supir::find($id);
            return view('supir/edit', ['supir' => $supir]);
        }
    
        public function update(Request $request, $id)
        {
            $supir = \App\Supir::find($id);
            $supir->update($request->all());
            if($request->hasFile('avatar')){
                $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
                $supir->avatar = $request->file('avatar')->getClientOriginalName();
                $supir->save();
            }
            return redirect ('/supir');
        }
    
        public function delete($id)
        {
            $supir = \App\Supir::find($id);
            $supir->delete();
            return redirect ('/supir');
        }
}
