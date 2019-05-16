@extends('layouts.master')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1>Data Pelanggan</h1>
    <button type="button" class="btn btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus fa-sm text-white"></i> Tambah Data</a>
    </button>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                method="GET" action="/pelanggan">
                <div class="input-group">
                    <input name="cari" type="text" class="form-control bg-light border-0 small" placeholder="Cari..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid">
                    <thead>
                        <tr role="row">
                            <th>NIK</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_pelanggan as $pelanggan)
                        <tr>
                            <td>{{$pelanggan -> nik}}</td>
                            <td>{{$pelanggan -> nama_lengkap}}</td>
                            <td>{{$pelanggan -> email}}</td>
                            <td>{{$pelanggan -> no_hp}}</td>
                            <td>{{$pelanggan -> alamat}}</td>
                            <td>
                                <a href="/pelanggan/{{$pelanggan->id}}/edit" class="btn btn-warning btn-sm">Ubah</a>
                                <a href="/pelanggan/{{$pelanggan->id}}/delete" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Data ingin dihapus?')">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Supir</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/pelanggan/create" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group{{$errors->has('nik') ? ' has error' : ''}}">
                        <label>NIK</label>
                        <input name="nik" type="text" class="form-control" placeholder="NIK" value="{{old('nik')}}">
                        @if($errors->has('nik'))
                        <span style="color:red">{{$errors->first('nik')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('nama_lengkap') ? ' has error' : ''}}">
                        <label>Nama</label>
                        <input name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap" value="{{old('nama_lengkap')}}">
                        @if($errors->has('nama_lengkap'))
                        <span style="color:red">{{$errors->first('nama_lengkap')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('email') ? ' has error' : ''}}">
                        <label>Email</label>
                        <input name="email" type="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                        @if($errors->has('email'))
                        <span style="color:red">{{$errors->first('email')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('no_hp') ? ' has error' : ''}}">
                        <label>No HP</label>
                        <input name="no_hp" type="text" class="form-control" placeholder="No HP" value="{{old('no_hp')}}">
                        @if($errors->has('no_hp'))
                        <span style="color:red">{{$errors->first('no_hp')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('alamat') ? ' has error' : ''}}">
                        <label>Alamat</label>
                        <input name="alamat" type="textarea" class="form-control" placeholder="Alamat" value="{{old('alamat')}}">
                        @if($errors->has('alamat'))
                        <span style="color:red">{{$errors->first('alamat')}}</span>
                        @endif
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
