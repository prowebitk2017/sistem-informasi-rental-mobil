@extends('layouts.master')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1>Data Pesanan</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                method="GET" action="/pesanan">
                <div class="input-group">
                    <input name="cari" type="text" class="form-control bg-light border-0 small" placeholder="Cari nama pelanggan..."
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
                            <th>Tanggal Pesan</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>Mobil</th>
                            <th>Jumlah Unit</th>
                            <th>Tgl Sewa</th>
                            <th>Tgl Kembali</th>
                            <th>Pesan Tambahan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_pesanan as $pesanan)
                        <tr>
                            <td>{{$pesanan -> created_at}}</td>
                            <td>{{$pesanan -> nama_lengkap}}</td>
                            <td>{{$pesanan -> email}}</td>
                            <td>{{$pesanan -> no_hp}}</td>
                            <td>{{$pesanan -> mobil}}</td>
                            <td>{{$pesanan -> jumlah_unit}}</td>
                            <td>{{$pesanan -> tgl_sewa}}</td>
                            <td>{{$pesanan -> tgl_kembali}}</td>
                            <td>{{$pesanan -> pesan}}</td>
                            <td>
                                <a href="/pesanan/{{$pesanan->id}}/delete" class="btn btn-danger btn-sm"
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
</div>

@endsection
