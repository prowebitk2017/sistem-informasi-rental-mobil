@extends('layouts.frontend')

@section('content')
<!-- Contact Content Part - Contact Form ==================================================
================================================== -->
<div class="container">
  <div class="blankSeparator"></div>
  <!-- Contact Sidebar ==================================================
================================================== -->
  <div class="one_third contactsidebar">
    <section class="first">
      <h3>Kunjungi dan Hubungi Kami</h3>
      <div class="boxtwosep"></div>
      <ul class="contactsidebarList">
        <li>Jl. Gerilya, Sungai Pinang Dalam, Samarinda, Kota Samarinda, Kalimantan Timur 75117</li>
        <li>Telp     :   0542-792-522</li>
        <li>Fax      :   0542-542-571</li>
        <li>Website: <a href="#" title="">http://jasarentalmobilsamarinda b.com</a></li>
        <li>Email: <a href="#" title="">cskautsar@kautsar.co.id</a></li>
      </ul>
    </section>

  </div>
  <!-- one_third ends here -->
  <div class="two_third lastcolumn contact1">
    <div id="contactForm">
      <h2>Leave a Comment</h2>
      <div class="sepContainer"></div>
      <form action="process.php" method="post" id="contact_form">
        <div class="name">
          <label for="name">Nama:</label>
          <p> Maukkan nama lengkap anda</p>
          <input id=name name=email type=text placeholder="contoh : Hendy Maulana Jaya Saputra" required />
        </div>
        <div class="email">
          <label for="email">Email:</label>
          <p> Masukkan email anda</p>
          <input id=email name=email type=email placeholder="contoh@example.com" required />
        </div>
        <div class="message">
          <label for="message">Pesan:</label>
          <p> Masukkan Pesan</p>
          <textarea id=message name=message rows=6 cols=10 required></textarea>
        </div>
        <div id="loader">
          <input type="submit" value="Submit" />
        </div>
      </form>
    </div>
    <!-- end contactForm --> 
  </div>
</div>
<div class="blankSeparator2"></div>
@endsection