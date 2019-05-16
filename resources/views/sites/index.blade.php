@extends('layouts.frontend')

@section('content')
<!-- Home Content Part -->
<div class="flexslider">
  <ul class="slides">
    <li> <a href="#"><img src="{{asset('/frontend')}}/images/flexslider/gambarslide1.png" alt=""/></a> </li>
    <li> <img src="{{asset('/frontend')}}/images/flexslider/gambarslide2.jpg" alt="" /> </li>
    <li> <a href="#"><img src="{{asset('/frontend')}}/images/flexslider/gambarslider3.jpg" alt="" /></a>
    </li>
  </ul>
</div>

<!-- Home Content Part - Box One  -->
<div class="blankSeparator"></div>
<div class="container">
  <div class="info">
    <div class="one_third">
      <h2>Daftar Mobil</h2>
      <p>Kautsar Rent car menyediakan <span class="red">berbagai macam</span> kendaraan dengan pilihan yang komplit dan pelayanan terbaik. Silahkan lihat kendaraan kami pada situs ini.</p>
      <a href="http://themeforest.net/item/positivo-responsive-and-fresh-wp-theme/2700306?ref=anariel7" title="" class="buttonhome">&rarr; Lihat Mobil</a> </div>
    <div class="two_third lastcolumn">
      <div class="one_half">
        <h2>Tentang Kami</h2>
        <p>Perkenankanlah kami Kautsar Travelindo adalah perusahaan jasa yang bergerak dibidang jasa rental mobil di Samarinda. Kami memiliki berbagai tipe kendaraan untuk memenuhi kebutuhan transportasi Anda.</p>
        <a href="http://themeforest.net/item/positivo-responsive-and-fresh-wp-theme/2700306?ref=anariel7" title="" class="buttonhome">&rarr; Lihat Profil</a> </div>
      <div class="one_half lastcolumn">
        <h2>Rental Mobil</h2>
        <p>Pelayanan yang terbaik, profesional, dan mengutamakan kepuausan adalah kelebihan kami. Nikmati perjalanan anda bersama Kautsar Rent, ayo rental kendaraan sekarang juga.</p>
        <a href="http://themeforest.net/item/positivo-responsive-and-fresh-wp-theme/2700306?ref=anariel7" title="" class="buttonhome">&rarr; Rental Mobil</a> </div>
    </div>
  </div>
</div>

<!-- Home Content Part - Box Two 
 -->
<div class="container clients">
  <div class="sepContainer"></div>
  <h2>Mengapa Harus Bersama Kami?</h2>
  <div class="one_sixth"> <img src="{{asset('/frontend')}}/images/jaminan1.png" alt=""/> </div>
  <!-- end one_sixth -->
  <div class="one_sixth"> <img src="{{asset('/frontend')}}/images/jaminan2.jpg" alt=""/> </div>
  <!-- end one_sixth -->
  <div class="one_sixth"> <img src="{{asset('/frontend')}}/images/client3.jpg" alt=""/> </div>
  <!-- end one_sixth -->
  <div class="one_sixth"> <img src="{{asset('/frontend')}}/images/client4.jpg" alt=""/> </div>
  <!-- end one_sixth -->
  <div class="one_sixth"> <img src="{{asset('/frontend')}}/images/client5.jpg" alt=""/> </div>
  <!-- end one_sixth -->
  <div class="one_sixth lastcolumn"> <img src="{{asset('/frontend')}}/images/client6.jpg" alt=""/> </div>
  <!-- end one_sixth lastCol --> 
</div>

<!-- Home Content Part - Box Three -->
<div class="container boxthree">
  <div class="sepContainer1"><!-- --></div>
  <div class="blankSeparator"></div>
  <div class="one_third">
    <section class="boxthreeleft"> <img src="{{asset('/frontend')}}/images/home/1.png" alt=""/> <!--ini nanti gambar dan penjelasan dari mobil-->
      <h3>Toyota Kiyang Inova</h3>
      <p>Sangat ssportif, gagah, dan tangguh</p>
      <a class ="simple" href="#">+ Lihat lebih lanjut</a> </section>
  </div>
  <!-- one-third column ends here -->
  <div class="one_third">
    <section class="boxthreecenter"> <img src="{{asset('/frontend')}}/images/home/2.png" alt=""/> <!--ini nanti gambar dan penjelasan dari mobil-->
      <h3>Toyota Rush</h3>
      <p>Sangat gagah, Keren, dan Nyaman</p>
      <a class ="simple" href="#">+ Lihat lebih lanjut</a> </section>
  </div>
  <!-- one-third column ends here -->
  <div class="one_third lastcolumn">
    <section class="boxthreeright"> <img src="{{asset('/frontend')}}/images/home/3.png" alt=""/> <!--ini nanti gambar dan penjelasan dari mobil-->
      <h3>Modern Design Interior</h3>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
      <a class ="simple" href="#">+ Learn more</a> </section>
  </div>
  <!-- one-third column ends here --> 

</div>

<div class="blankSeparator1"></div>

@endsection