@extends('layouts.master')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1>Data Supir</h1>
    <button type="button" class="btn btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus fa-sm text-white"></i> Tambah Data</a>
    </button>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                method="GET" action="/supir">
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
                            <th>No SIM</th>
                            <th>Nama Lengkap</th>
                            <th>No HP</th>
                            <th>Alamat</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_supir as $supir)
                        <tr>
                            <td>{{$supir -> no_sim}}</td>
                            <td>{{$supir -> nama}}</td>
                            <td>{{$supir -> no_hp}}</td>
                            <td>{{$supir -> alamat}}</td>
                            <td><img src="{{asset('images/'.$supir->avatar)}}" height="50px"></td>
                            <td>
                                <a href="/supir/{{$supir->id}}/edit" class="btn btn-warning btn-sm">Ubah</a>
                                <a href="/supir/{{$supir->id}}/delete" class="btn btn-danger btn-sm"
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
                <form action="/supir/create" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group{{$errors->has('no_sim') ? ' has error' : ''}}">
                        <label>No SIM</label>
                        <input name="no_sim" type="text" class="form-control" placeholder="No SIM" value="{{old('no_sim')}}">
                        @if($errors->has('no_sim'))
                        <span style="color:red">{{$errors->first('no_sim')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('nama') ? ' has error' : ''}}">
                        <label>Nama Lengkap</label>
                        <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" value="{{old('nama')}}">
                        @if($errors->has('nama'))
                        <span style="color:red">{{$errors->first('nama')}}</span>
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
                        <input name="alamat" type="text" class="form-control" placeholder="Alamat" value="{{old('alamat')}}">
                        @if($errors->has('alamat'))
                        <span style="color:red">{{$errors->first('alamat')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('avatar') ? ' has error' : ''}}">
                        <label>Foto</label>
                        <input name="avatar" type="file" class="form-control">
                        @if($errors->has('avatar'))
                        <span style="color:red">{{$errors->first('avatar')}}</span>
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
