@extends('layouts.frontend')
@section('content')

<div class="blankSeparator"></div>
<div class="container">
  <div class="one_third">
    <section class="aboutoneleft">
      <h2>Pengalaman Kami</h2>
      <p>Didukung dengan jaminan keamanan, sigap dalam pelayanan, jaringan yang tersebar di berbagai kota besar Indonesia, Kautsar Rent tentunya menjadi pilihan yang tepat untuk kebutuhan transportasi perusahaan Anda!</p>
    </section>
  </div>

  <div class="one_third">
    <section class="aboutonecenter">
      <h2>Nilai Perusahaan</h2>
      <p>Spirit of Unity</p>
        <p>Perfection in All We Do</p>
        <p>Emphatic Communication</p>
        <p>Enjoyable Working Environment</p>
        <p>Discipline and Integrity</p>
    </section>
  </div>

  <div class="one_third lastcolumn">
    <section class="aboutoneright">
      <h2>Logo Kami</h2>
      <img src="{{asset('/frontend')}}/images/logoperusahaan.png" alt=""/>
      </section>
  </div>
</div>

<div class="container">
  <div class="sepContainer1"></div>
  <h2>Perusahaan Kami</h2>
  <div class="toggle-trigger">Sejarah Perusahaan Kami</div>
  <div class="toggle-container">
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>
  </div>
  <div class="toggle-trigger">Visi Misi Kami</div>
  <div class="toggle-container">
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>
  </div>
</div>
<div class="blankSeparator1"></div>
@endsection