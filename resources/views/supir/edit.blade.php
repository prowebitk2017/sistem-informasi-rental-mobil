@extends('layouts.master')

@section('content')
<h1>Edit Data Supir</h1>
        <div class="row">
            <div class="col-12">
                <form action="/supir/{{$supir->id}}/update" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>No SIM</label>
                        <input name="no_sim" type="text" class="form-control" placeholder="No SIM" value="{{$supir->no_sim}}">
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" value="{{$supir->nama}}">
                    </div>
                    <div class="form-group">
                        <label>No HP</label>
                        <input name="no_hp" type="text" class="form-control" placeholder="No HP" value="{{$supir->no_hp}}">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input name="alamat" type="text" class="form-control" placeholder="Alamat" value="{{$supir->alamat}}">
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input name="avatar" type="file" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                </form>
            </div>
        </div>
        @endsection
