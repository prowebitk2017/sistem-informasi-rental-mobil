@extends('layouts.master')
@section('content')

<h1>Ubah Data Mobil</h1>
<div class="row">
    <div class="col-12">
        <form action="/mobil/{{$mobil->id}}/update" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group{{$errors->has('nama') ? ' has error' : ''}}">
                        <label>Nama</label>
                        <input name="nama" type="text" class="form-control" placeholder="Nama Mobil" value="{{$mobil->nama}}">
                        @if($errors->has('nama'))
                        <span style="color:red">{{$errors->first('nama')}}</span>
                        @endif
                    </div>
            <div class="form-group">
                <label>Tahun</label>
                <select name="tahun" class="form-control">
                    <option value="2019" @if($mobil->tahun == '2019') selected @endif>2019</option>
                    <option value="2018" @if($mobil->tahun == '2018') selected @endif>2018</option>
                    <option value="2017" @if($mobil->tahun == '2017') selected @endif>2017</option>
                    <option value="2016" @if($mobil->tahun == '2016') selected @endif>2016</option>
                    <option value="2015" @if($mobil->tahun == '2015') selected @endif>2015</option>
                </select>
            </div>
            <div class="form-group">
                <label>Warna</label>
                <input name="warna" type="text" class="form-control" placeholder="Warna Mobil"
                    value="{{$mobil->warna}}">
            </div>
            <div class="form-group">
                <label>Jenis</label>
                <select name="jenis" class="form-control">
                    <option value="MPV" @if($mobil->jenis == 'MPV') selected @endif>MPV</option>
                    <option value="SUV" @if($mobil->jenis == 'SUV') selected @endif>SUV</option>
                </select>
            </div>
            <div class="form-group">
                <label>No. Polisi</label>
                <input name="nopol" type="text" class="form-control" placeholder="No. Polisi" value="{{$mobil->nopol}}">
            </div>
            <div class="form-group">
                <label>Harga Sewa</label>
                <input name="harga_sewa" type="text" class="form-control" placeholder="Harga Sewa"
                    value="{{$mobil->harga_sewa}}">
            </div>
            <div class="form-group">
                <label>Kapasitas</label>
                <input name="kapasitas" type="text" class="form-control" placeholder="Kapasitas"
                    value="{{$mobil->kapasitas}}">
            </div>
            <div class="form-group">
                <label>Status</label>
                <select name="status_pinjam" class="form-control">
                    <option value="Belum disewa" @if($mobil->status_pinjam == 'Belum Disewa') selected @endif>Belum
                        Disewa</option>
                    <option value="Disewa" @if($mobil->status_pinjam == 'Disewa') selected @endif>Disewa</option>
                </select>
            </div>
            <div class="form-group">
                <label>Bahan Bakar</label>
                <select name="bahan_bakar" class="form-control">
                    <option value="Bensin" @if($mobil->bahan_bakar == 'Bensin') selected @endif>Bensin</option>
                    <option value="Solar" @if($mobil->bahan_bakar == 'Solar') selected @endif>Solar</option>
                </select>
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input name="avatar" type="file" class="form-control">
            </div>
            <button type="submit" class="btn btn-warning">Ubah</button>
        </form>
    </div>
</div>

@endsection
