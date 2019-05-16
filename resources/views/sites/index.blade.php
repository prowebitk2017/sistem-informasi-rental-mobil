@extends('layouts.frontend')
@section('content')

<div class="flexslider">
  <ul class="slides">
    <li> <img src="{{asset('/frontend')}}/images/flexslider/gambarslide1.png" alt=""/></a> </li>
    <li> <img src="{{asset('/frontend')}}/images/flexslider/gambarslide2.jpg" alt="" /> </li>
    <li> <img src="{{asset('/frontend')}}/images/flexslider/gambarslider3.jpg" alt="" /></a>
    </li>
  </ul>
</div>

<div class="blankSeparator"></div>
<div class="container">
  <div class="info">
    <div class="one_third">
    <h2>Tentang Kami</h2>
        <p>Perkenankanlah kami Falcon Travelindo adalah perusahaan jasa yang bergerak di bidang jasa rental mobil di Balikpapan. Kami memiliki berbagai tipe kendaraan untuk memenuhi kebutuhan transportasi Anda.</p>
        <a href="/tentang" title="" class="buttonhome">&rarr; Lihat Profil</a> </div>
    <div class="two_third lastcolumn">
      <div class="one_half">
      <h2>Daftar Mobil</h2>
      <p>Falcon Rent car menyediakan berbagai macam kendaraan dengan pilihan yang komplit dan pelayanan terbaik. Silahkan lihat kendaraan kami pada situs ini.</p>
      <a href="/kendaraan" title="" class="buttonhome">&rarr; Lihat Mobil</a> </div>
      <div class="one_half lastcolumn">
        <h2>Booking Online</h2>
        <p>Pelayanan yang cepat, profesional, dan mengutamakan kepuasan adalah kelebihan kami. Nikmati perjalanan anda bersama Falcon Rent, mari booking online sekarang juga.</p>
        <a href="/booking" title="" class="buttonhome">&rarr; Rental Mobil</a> </div>
    </div>
  </div>
</div>

<div class="container clients">
  <div class="sepContainer"></div>
  <h2>Galeri Pelanggan Kami</h2>
  <div class="one_sixth"> <img src="{{asset('/frontend')}}/images/client1.jpg" alt=""/> </div>
  <div class="one_sixth"> <img src="{{asset('/frontend')}}/images/client2.jpg" alt=""/> </div>
  <div class="one_sixth"> <img src="{{asset('/frontend')}}/images/client3.jpg" alt=""/> </div>
  <div class="one_sixth"> <img src="{{asset('/frontend')}}/images/client4.jpg" alt=""/> </div>
  <div class="one_sixth"> <img src="{{asset('/frontend')}}/images/client5.jpg" alt=""/> </div>
  <div class="one_sixth lastcolumn"> <img src="{{asset('/frontend')}}/images/client6.jpg" alt=""/> </div>
</div>

<div class="container boxthree">
<div class="sepContainer"></div>
  <h2>Mengapa Harus Bersama Kami?</h2>  
  <div class="one_third">
    <section class="boxthreeleft"> <img src="{{asset('/frontend')}}/images/home/1.png" alt=""/> <!--ini nanti gambar dan penjelasan dari mobil-->
      <h3>Unit Terawat</h3>
      <p>Unit baru dan selalu dalan kondisi terawat yang kami sediakan untuk anda.</p>
  </div>
  <div class="one_third">
    <section class="boxthreecenter"> <img src="{{asset('/frontend')}}/images/home/2.png" alt=""/> <!--ini nanti gambar dan penjelasan dari mobil-->
      <h3>Layanan Terbaik</h3>
      <p>Hanya layanan terbaik yang kami berikan kepada anda sebagai pelanggan setia kami.</p>
  </div>
  <div class="one_third lastcolumn">
    <section class="boxthreeright"> <img src="{{asset('/frontend')}}/images/home/3.png" alt=""/> <!--ini nanti gambar dan penjelasan dari mobil-->
      <h3>Harga Bersaing</h3>
      <p>Harga yang kami berikan bersaing dan negotable untuk dapat menyesuaikan dengan budget anda.</p>
  </div>
</div>

<div class="blankSeparator1"></div>

@endsection