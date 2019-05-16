@extends('layouts.frontend')

@section('content')

<div class="blankSeparator"></div>
<div class="container portfolio">
@foreach($data_mobil as $mobil)
  <div class="two_third">
    <div>
      <ul>
        <li><img src="{{asset('images/'.$mobil->avatar)}}" alt="" /></li>
      </ul>
    </div>
  </div>
  <div class="one_third lastcolumn">
    <h2>{{$mobil->nama}}</h2>
    <h3>Tahun: {{$mobil->tahun}}</h3>
    <h3>Warna: {{$mobil->warna}}</h3>
    <h3>Kapasitas: {{$mobil->kapasitas}} Orang</h3>
    <h3>Harga Sewa: Rp{{$mobil->harga_sewa}}/Hari</h  3>
  </div>
  @endforeach

</div>
@endsection