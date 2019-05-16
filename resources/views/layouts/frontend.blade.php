<!DOCTYPE html>
<html lang="en">

<head>


<meta charset="utf-8">
<title>Yuk Kita Rental</title>
<meta name="description" content="Place to put your description text">
<meta name="author" content="">


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">


<link rel="stylesheet" href="{{asset('/frontend')}}/css/base.css">
<link rel="stylesheet" href="{{asset('/frontend')}}/css/skeleton.css">
<link rel="stylesheet" href="{{asset('/frontend')}}/css/screen.css">
<link rel="stylesheet" href="{{asset('/frontend')}}/css/prettyPhoto.css" type="text/css" media="screen" />

<!-- Favicons -->
<link rel="shortcut icon" href="images/logoperusahaan.png">
<link rel="logoperusahaan" href="images/logoperusahaan.png">
<link rel="logoperusahaan" sizes="72x72" href="images/logoperusahaan.png">
<link rel="logoperusahaan" sizes="114x114" href="images/logoperusahaan.png">

<!-- Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<body>

<!-- Home -->
<div id="header">
  <div class="container header"> 

    <!-- Header-->
    <header>
      <div class="logo"><a href="/"><img src="{{asset('/frontend')}}/images/logoperusahaan.png" alt="" /></a></div>
      <div class="mainmenu">
        <div id="mainmenu">
          <ul class="sf-menu">
            <li><a href="/"><span class="home"><img src="{{asset('/frontend')}}/images/home.png" alt="" /></span>Beranda</a></li>
            <li><a href="/tentang"><span class="home"><img src="{{asset('/frontend')}}/images/about.png" alt="" /></span>Tentang Kami</a></li>
            <li><a href="/kendaraan"><span class="home"><img src="{{asset('/frontend')}}/images/portfolio.png" alt="" /></span>Jenis Mobil</a>
            <li><a href="/kontak"><span class="home"><img src="{{asset('/frontend')}}/images/contact.png" alt="" /></span>Hubungi Kami</a></li>
            <li><a href="/booking"><span class="home"><img src="{{asset('/frontend')}}/images/features.png" alt="" />Booking Online</span></a></li>
          </ul>
        </div>
        
        <!-- Responsive Menu -->  
        <form id="responsive-menu" action="#" method="post">
          <select>
            <option value="">Navigation</option>
            <option value="index.html">Beranda</option>
            <option value="profil.html">Profil</option>
            <option value="kendaraan.html">Kendaraan Kami</option>
            <option value="rental.html">Rental</option>
            <option value="contact.html">Hubungi Kami</option>
          </select>
        </form>
      </div>
    </header>
  </div>
</div>

@yield('content')

<!--Footer -->
<div id="footer">
  <div class="container footer">
    <div class="one_fourth">
      <h3>Latest Tweets</h3>
      <div id="tweets"></div>
    </div>
    <div class="one_fourth">
      <h3>Kenali Kami</h3>
      <ul>
        <li class="lines"><a href="#" title="">Kenali Kami Lebih Dekat</a></li>
        <li class="lines"><a href="#" class="">Keunggulan Kami</a></li>
        <li class="lines"><a href="#" class="">Kendaraan Kami</a></li>
        <li class="lines"><a href="#" class="">Testimoni</a></li>
        <li class="lines"><a href="#" class="">Hubungi Kami</a></li>
      </ul>
    </div>
    <div class="one_fourth">
      <h3>Kendaraan Kami</h3>
      <ul>
        <li class="lines"><a href="#" class="">Avanza</a></li>
        <li class="lines"><a href="#" class="">Kijang Inova</a></li>
        <li class="lines"><a href="#" class="">Rush</a></li>
        <li class="lines"><a href="#" class="">Alphard</a></li>
        <li class="lines"><a href="#" class="">Juke</a></li>
      </ul>
    </div>
    <div class="one_fourth lastcolumn">
      <h3>Hubungi Kami</h3>
      <p>Telp     :   0542-792-522</p>
      <p>Fax      :   0542-542-571</p>
      <p>Email    :   cskautsar@kautsar.go.id</p>
    </div>
  </div>
  <!-- container ends here --> 
</div>

<!-- Copyright -->
<div id="copyright">
  <div class="container">
    <div class="eleven columns alpha">
      <p class="copyright">&copy; Copyright 2019. &quot;Proximet&quot; by <a href="http://www.anarieldesign.com/" rel="nofollow">Anariel Design</a>. All rights reserved.</p>
    </div>
    <div class="five columns omega">
      <section class="socials">
        <ul class="socials fr">
          <li><a href="#"><img src="{{asset('/frontend')}}/images/socials/twitter.png" class="poshytip" title="Twitter"  alt="" /></a></li>
          <li><a href="#"><img src="{{asset('/frontend')}}/images/socials/facebook.png" class="poshytip" title="Facebook" alt="" /></a></li>
          <li><a href="#"><img src="{{asset('/frontend')}}/images/socials/google.png" class="poshytip" title="Google" alt="" /></a></li>
          <li><a href="#"><img src="{{asset('/frontend')}}/images/socials/dribbble.png" class="poshytip" title="Dribbble" alt="" /></a></li>
        </ul>
      </section>
    </div>
  </div>
  <!-- container ends here --> 
</div>

<!-- Scripts --> 
<script src="{{asset('/frontend')}}/js/jquery-1.8.0.min.js" type="text/javascript"></script> 
<script src="{{asset('/frontend')}}/js/screen.js" type="text/javascript"></script> 
<script src="{{asset('/frontend')}}/js/poshytip-1.0/src/jquery.poshytip.min.js" type="text/javascript"></script> 
<script src="{{asset('/frontend')}}/js/tabs.js" type="text/javascript"></script> 
<script src="{{asset('/frontend')}}/js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<script src="{{asset('/frontend')}}/js/superfish.js" type="text/javascript"></script> 
<script src="{{asset('/frontend')}}/js/hoverIntent.js" type="text/javascript"></script> 
<script src="{{asset('/frontend')}}/js/jquery.flexslider-min.js" type="text/javascript"></script> 
<script src="{{asset('/frontend')}}/js/modernizr.custom.29473.js" type="text/javascript"></script>
</head>
</body>
</html>