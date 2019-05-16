@extends('layouts.master')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1>Data Mobil</h1>
    <button type="button" class="btn btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus fa-sm text-white"></i> Tambah Data</a>
    </button>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                method="GET" action="/mobil">
                <div class="input-group">
                    <input name="cari" type="text" class="form-control bg-light border-0 small" placeholder="Cari nama mobil..."
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
                            <th>Nama</th>
                            <th>Tahun</th>
                            <th>Warna</th>
                            <th>Jenis</th>
                            <th>No. Polisi</th>
                            <th>Harga Sewa</th>
                            <th>Kapasitas</th>
                            <th>Status</th>
                            <th>Bahan Bakar</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_mobil as $mobil)
                        <tr>
                            <td>{{$mobil -> nama}}</td>
                            <td>{{$mobil -> tahun}}</td>
                            <td>{{$mobil -> warna}}</td>
                            <td>{{$mobil -> jenis}}</td>
                            <td>{{$mobil -> nopol}}</td>
                            <td>{{$mobil -> harga_sewa}}</td>
                            <td>{{$mobil -> kapasitas}} Orang</td>
                            <td>{{$mobil -> status_pinjam}}</td>
                            <td>{{$mobil -> bahan_bakar}}</td>
                            <td><img src="{{asset('images/'.$mobil->avatar)}}" height="50px"></td>
                            <td>
                                <a href="/mobil/{{$mobil->id}}/edit" class="btn btn-warning btn-sm">Ubah</a>
                                <a href="/mobil/{{$mobil->id}}/delete" class="btn btn-danger btn-sm"
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Mobil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/mobil/create" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group{{$errors->has('nama') ? ' has error' : ''}}">
                        <label>Nama</label>
                        <input name="nama" type="text" class="form-control" placeholder="Nama Mobil" value="{{old('nama')}}">
                        @if($errors->has('nama'))
                        <span style="color:red">{{$errors->first('nama')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('tahun') ? ' has error' : ''}}">
                        <label>Tahun</label>
                        <select name="tahun" class="form-control">
                            <option value="2019"{{(old('tahun') == '2019') ? ' selected' : ''}}>2019</option>
                            <option value="2018"{{(old('tahun') == '2018') ? ' selected' : ''}}>2018</option>
                            <option value="2017"{{(old('tahun') == '2017') ? ' selected' : ''}}>2017</option>
                        </select>
                    </div>
                    <div class="form-group{{$errors->has('warna') ? ' has error' : ''}}">
                        <label>Warna</label>
                        <input name="warna" type="text" class="form-control" placeholder="Warna Mobil" value="{{old('warna')}}">
                        @if($errors->has('warna'))
                        <span style="color:red">{{$errors->first('warna')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('jenis') ? ' has error' : ''}}">
                        <label>Jenis</label>
                        <select name="jenis" class="form-control">
                            <option value="MPV"{{(old('jenis') == 'MPV') ? ' selected' : ''}}>MPV</option>
                            <option value="SUV"{{(old('jenis') == 'SUV') ? ' selected' : ''}}>SUV</option>
                        </select>
                    </div>
                    <div class="form-group{{$errors->has('nopol') ? ' has error' : ''}}">
                        <label>No. Polisi</label>
                        <input name="nopol" type="text" class="form-control" placeholder="Nomor Polisi" value="{{old('nopol')}}">
                        @if($errors->has('nopol'))
                        <span style="color:red">{{$errors->first('nopol')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('harga_sewa') ? ' has error' : ''}}">
                        <label>Harga Sewa</label>
                        <input name="harga_sewa" type="text" class="form-control" placeholder="Harga Sewa" value="{{old('harga_sewa')}}">
                        @if($errors->has('harga_sewa'))
                        <span style="color:red">{{$errors->first('harga_sewa')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('kapasitas') ? ' has error' : ''}}">
                        <label>Kapasitas</label>
                        <input name="kapasitas" type="text" class="form-control" placeholder="Kapasitas" value="{{old('kapasitas')}}"">
                        @if($errors->has('kapasitas'))
                        <span style="color:red">{{$errors->first('kapasitas')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('status_pinjam') ? ' has error' : ''}}">
                        <label>Status</label>
                        <select name="status_pinjam" class="form-control">
                            <option value="Belum Disewa"{{(old('status_pinjam') == 'Belum Disewa') ? ' selected' : ''}}>Belum disewa</option>
                            <option value="Disewa"{{(old('status_pinjam') == 'Disewa') ? ' selected' : ''}}>Disewa</option>
                        </select>
                    </div>
                    <div class="form-group{{$errors->has('bahan_bakar') ? ' has error' : ''}}">
                        <label>Bahan Bakar</label>
                        <select name="bahan_bakar" class="form-control">
                            <option value="Bensin"{{(old('bahan_bakar') == 'Bensin') ? ' selected' : ''}}>Bensin</option>
                            <option value="Solar"{{(old('bahan_bakar') == 'Solar') ? ' selected' : ''}}>Solar</option>
                        </select>
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
