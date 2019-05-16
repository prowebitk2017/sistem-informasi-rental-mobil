@extends('layouts.master')
@section('content')

<h1>Ubah Data Transaksi</h1>
<div class="row">
    <div class="col-12">
        <form action="/transaksi/{{$transaksi->id}}/update" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label>Nama Pelanggan</label>
                <select name="pelanggan_id" id="" class="form-control">
                @foreach($transaksi->pelanggan as $pelanggan)
                <option value="{{pelanggan->nama_lengkap}}">{{$pelanggan->nama_lengkap}}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-warning">Ubah</button>
        </form>

    </div>
</div>

@endsection
