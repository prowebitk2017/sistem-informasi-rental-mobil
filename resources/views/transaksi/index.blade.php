@extends('layouts.master')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1>Data Transaksi</h1>
    <button type="button" class="btn btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus fa-sm text-white"></i> Tambah Data</a>
    </button>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                method="GET" action="/transaksi">
            </form>
        </div>
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid">
                    <thead>
                        <tr role="row">
                            <th>Pelanggan</th>
                            <th>Mobil</th>
                            <th>Supir</th>
                            <th>Tgl Sewa</th>
                            <th>Tgl Kembali</th>
                            <th>Lama Sewa</th>
                            <th>Harga Sewa</th>
                            <th>Jaminan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_transaksi as $transaksi)
                        <tr>
                            <td>{{$transaksi->pelanggan->nama_lengkap}}</td>
                            <td>{{$transaksi->mobil->nama}}</td>
                            <td>{{$transaksi->supir->nama}}</td>
                            <td>{{$transaksi->tgl_sewa}}</td>
                            <td>{{$transaksi->tgl_kembali}}</td>
                            <td>{{$transaksi->lama_sewa}} Hari</td>
                            <td>Rp{{$transaksi->harga_sewa}}</td>
                            <td><img src="{{asset('images/'.$transaksi->jaminan)}}" height="50px"></td>
                            <td>
                                <a href="/transaksi/{{$transaksi->id}}/edit" class="btn btn-warning btn-sm">Ubah</a>
                                <a href="/transaksi/{{$transaksi->id}}/delete" class="btn btn-danger btn-sm"
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/transaksi/create" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group{{$errors->has('pelanggan_id') ? ' has error' : ''}}">
                        <label for="">Pelanggan</label>
                        <select name="pelanggan_id" class="form-control">
                            @foreach($data_pelanggan as $pelanggan)
                            <option value="{{$pelanggan->id}}">{{$pelanggan->nama_lengkap}}</option>
                            @endforeach
                        </select></div>
                    <div class="form-group{{$errors->has('supir_id') ? ' has error' : ''}}">
                        <label for="">Supir</label>
                        <select name="supir_id" id="" class="form-control">
                            @foreach($data_supir as $supir)
                            <option value="{{$supir->id}}">{{$supir->nama}}</option>
                            @endforeach
                        </select></div>
                    <div class="form-group{{$errors->has('mobil_id') ? ' has error' : ''}}">
                        <label for="">Mobil</label>
                        <select name="mobil_id" id="" class="form-control">
                            @foreach($data_mobil as $mobil)
                            <option value="{{$mobil->id}}">{{$mobil->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group{{$errors->has('tgl_sewa') ? ' has error' : ''}}">
                        <label>Tanggal Sewa</label>
                        <input name="tgl_sewa" type="date" class="form-control" placeholder="Tanggal Sewa"
                            value="{{old('tgl_sewa')}}">
                        @if($errors->has('tgl_sewa'))
                        <span style="color:red">{{$errors->first('tgl_sewa')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('tgl_kembali') ? ' has error' : ''}}">
                        <label>Tanggal Kembali</label>
                        <input name="tgl_kembali" type="date" class="form-control" placeholder="Tanggal Kembali"
                            value="{{old('tgl_kembali')}}">
                        @if($errors->has('tgl_kembali'))
                        <span style="color:red">{{$errors->first('tgl_kembali')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('lama_sewa') ? ' has error' : ''}}">
                        <label>Lama Sewa</label>
                        <input name="lama_sewa" type="text" class="form-control" placeholder="Lama Sewa"
                            value="{{old('lama_sewa')}}">
                        @if($errors->has('lama_sewa'))
                        <span style="color:red">{{$errors->first('lama_sewa')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('harga_sewa') ? ' has error' : ''}}">
                        <label>Harga Sewa</label>
                        <input name="harga_sewa" type="text" class="form-control" placeholder="Harga Sewa"
                            value="{{old('harga_sewa')}}">
                        @if($errors->has('harga_sewa'))
                        <span style="color:red">{{$errors->first('harga_sewa')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('jaminan') ? ' has error' : ''}}">
                        <label>Jaminan</label>
                        <input name="jaminan" type="file" class="form-control">
                        @if($errors->has('jaminan'))
                        <span style="color:red">{{$errors->first('jaminan')}}</span>
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
