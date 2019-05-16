@extends('layouts.frontend')

@section('content')


<!-- Contact Form  -->
<div class="container">
  <div class="blankSeparator"></div>

  <div class="two_third lastcolumn contact1">
    <div id="contactForm">
      <h2>Booking Online</h2>
      <div class="sepContainer"></div>
      <form action="/pesanan/create" method="POST" id="contact_form">
      {{csrf_field()}}
        <div class="name">
          <label>Nama Lengkap</label>
          <input name="nama_lengkap" type="text" placeholder="Nama Lengkap" required />
        </div>
        <div class="email">
          <label>Email</label>
          <input name="email" type="text" placeholder="Email" required />
        </div>
        <div class="email">
          <label>No HP</label>
          <input name="no_hp" type="text" placeholder="No HP" required />
        </div>
        <div class="email">
          <label>Mobil</label>
                        <select name="mobil" class="form-control">
                            @foreach($data_mobil as $mobil)
                            <option value="{{$mobil->nama}}">{{$mobil->nama}}</option>
                            @endforeach
                        </select>
                        </div>
        <div class="email">
          <label>Jumlah Unit</label>
          <input name="jumlah_unit" type="text" placeholder="Jumlah Unit" required />
        </div>
        <div class="email">
          <label>Lokasi Jemput</label>
          <input name="lokasi_jemput" type="text" placeholder="Lokasi Jemput" required />
        </div>
        <div class="email">
          <label>Tanggal Sewa</label>
          <input name="tgl_sewa" type="date" placeholder="Tanggal Sewa" required />
        </div>
        <div class="name">
          <label>Tanggal Kembali</label>
          <input name="tgl_kembali" type="date" placeholder="Tanggal Kembali" required />
        </div>
        <div class="email">
          <label>Pesan Tambahan</label>
          <textarea name="pesan" rows="6" cols="10"></textarea>
        </div>
        <div id="loader">
          <input type="submit" value="Tambah"/>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="blankSeparator2"></div>
@endsection