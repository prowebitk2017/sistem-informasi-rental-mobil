@extends('layouts.frontend')

@section('content')

<!-- Daftar MobilProject Content Part ==================================================
================================================== -->
<div class="blankSeparator"></div>
<div class="container portfolio">
  <div class="two_third">
    <div class="flexslider">
      <ul class="slides">
        <li><img src="{{asset('/frontend')}}/images/portfolio/1.jpg" alt="" /></li>
        <li><img src="{{asset('/frontend')}}/images/portfolio/2.jpg" alt="" /></li>
        <li><img src="{{asset('/frontend')}}/images/portfolio/3.jpg" alt="" /></li>
        <!--Ketiga Gambar diatas diisi foto mobil dengan tipe sama, warna berbeda, biar bisa di slide-->
      </ul>
    </div>
  </div>
  <div class="one_third lastcolumn">
    <h2>Toyota Kijang Inova</h2>
    <p>Miliki pengalaman perjalanan paling menyenangkan bersama <span class="green">Toyota Kijang Inova</span> nyaman, aman, dan cepat.</p>
    <h4>Donec commodo tortor pellentesque nisl <span class="red">cursus volutpat</span>. Sed sit amet odio et magna tempor posuere vestibulum ac risus. Sed nec magna dolor.</h4>
    <p class="portfolio"><a href="#">Lihat Lebih Lanjut</a></p>
  </div>
  <div class="two_third">
    <div class="flexslider">
      <ul class="slides">
        <li><img src="{{asset('/frontend')}}/images/portfolio/3.jpg" alt="" /></li>
        <li><img src="{{asset('/frontend')}}/images/portfolio/2.jpg" alt="" /></li>
        <li><img src="{{asset('/frontend')}}/images/portfolio/1.jpg" alt="" /></li>
      </ul>
    </div>
  </div>
  <div class="one_third lastcolumn">
    <h2>Toyota Kijang Inova</h2>
    <p>Miliki pengalaman perjalanan paling menyenangkan bersama <span class="green">Toyota Kijang Inova</span> nyaman, aman, dan cepat.</p>
    <h4>Donec commodo tortor pellentesque nisl <span class="red">cursus volutpat</span>. Sed sit amet odio et magna tempor posuere vestibulum ac risus. Sed nec magna dolor.</h4>
    <p class="portfolio"><a href="#">Lihat Lebih Lanjut</a></p>
  </div>
  <div class="two_third">
    <div class="flexslider">
      <ul class="slides">
        <li><img src="{{asset('/frontend')}}/images/portfolio/2.jpg" alt="" /></li>
        <li><img src="{{asset('/frontend')}}/images/portfolio/3.jpg" alt="" /></li>
        <li><img src="{{asset('/frontend')}}/images/portfolio/1.jpg" alt="" /></li>
      </ul>
    </div>
  </div>
  <div class="one_third lastcolumn">
    <h2>Toyota Kijang Inova</h2>
    <p>Miliki pengalaman perjalanan paling menyenangkan bersama <span class="green">Toyota Kijang Inova</span> nyaman, aman, dan cepat.</p>
    <h4>Donec commodo tortor pellentesque nisl <span class="red">cursus volutpat</span>. Sed sit amet odio et magna tempor posuere vestibulum ac risus. Sed nec magna dolor.</h4>
    <p class="portfolio"><a href="#">Lihat Lebih Lanjut</a></p>
  </div>
</div>@endsection