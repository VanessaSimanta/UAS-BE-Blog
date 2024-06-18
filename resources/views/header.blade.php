<!DOCTYPE html>
<html lang="en">
<body>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone-fill phone-icon"></i> 
        @foreach ($data as $row)
          {{ $row->phone_number }}
        @endforeach
      </div>
      <div class="social-links d-none d-md-block">
      @foreach ($data as $row)
        <a href="{{ $row->instagram }}" class="instagram"><i class="bi bi-instagram"></i></a>
      @endforeach
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Alleyway Muse</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
    
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#testimonies">Testimonies</a></li>
          <li><a class="nav-link scrollto " href="#yourDrink">Make Your Own Drink</a></li>
          <li><a class="nav-link scrollto" href="#aboutUs">About Us</a></li>
          <li><a class="getstarted scrollto" href="#menu">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
</body>

</html>