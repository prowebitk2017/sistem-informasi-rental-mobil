@extends('layouts.master')
@section('content')

<h1>Ubah Data Transaksi</h1>
<div class="row">
    <div class="col-12">
        <form action="/transaksi/{{$transaksi->id}}/update" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label>Pelanggan</label>
                <select name="pelanggan_id" class="form-control">
                    @foreach($pelanggan as $pelanggan)
                    <option value="{{$pelanggan->id}}">{{$pelanggan->nama_lengkap}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Mobil</label>
                <select name="mobil_id" class="form-control">
                    @foreach($mobil as $mobil)
                    <option value="{{$mobil->id}}">{{$mobil->nama}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Supir</label>
                <select name="supir_id" class="form-control">
                    @foreach($supir as $supir)
                    <option value="{{$supir->id}}">{{$supir->nama}}</option>
                    @endforeach
                </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Sewa</label>
                    <input name="tgl_sewa" type="date" class="form-control" value="{{$transaksi->tgl_sewa}}">
                </div>
                <div class="form-group">
                    <label>Tanggal Kembali</label>
                    <input name="tgl_kembali" type="date" class="form-control" value="{{$transaksi->tgl_kembali}}">
                </div>
                <div class="form-group">
                    <label>Lama Sewa</label>
                    <input name="lama_sewa" type="text" class="form-control" value="{{$transaksi->lama_sewa}}">
                </div>
                <div class="form-group">
                    <label>Harga Sewa</label>
                    <input name="harga_sewa" type="text" class="form-control" value="{{$transaksi->harga_sewa}}">
                </div>
                <div class="form-group">
                        <label>Jaminan</label>
                        <input name="jaminan" type="file" class="form-control">
                    </div>
            <button type="submit" class="btn btn-warning">Ubah</button>
        </form>

    </div>
</div>

@endsection
