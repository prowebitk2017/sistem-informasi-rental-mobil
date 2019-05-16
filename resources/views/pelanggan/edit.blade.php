@extends('layouts.master')

@section('content')
<h1>Edit Data Pelanggan</h1>
        <div class="row">
            <div class="col-12">
                <form action="/pelanggan/{{$pelanggan->id}}/update" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>NIK</label>
                        <input name="nik" type="text" class="form-control" placeholder="NIK" value="{{$pelanggan->nik}}">
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap" value="{{$pelanggan->nama_lengkap}}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="text" class="form-control" placeholder="Email" value="{{$pelanggan->email}}">
                    </div>
                    <div class="form-group">
                        <label>No HP</label>
                        <input name="no_hp" type="text" class="form-control" placeholder="No HP" value="{{$pelanggan->no_hp}}">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input name="alamat" type="text" class="form-control" placeholder="Alamat" value="{{$pelanggan->alamat}}">
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
