<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Alleyway Muse - Homepage</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Green
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
@include('header');

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
         @foreach ($home as $row)
        <div class="carousel-item active" style="background-image: url({{$row->img_home}})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">{{$row->title}}</h2>
              <p class="animate__animated animate__fadeInUp">{{$row->description}}.</p>
              <a href="#testimonies" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>
        @endforeach

        
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">


  <!-- ======= testimonies ======= -->
  <section id="testimonies" class="testimonies">
    <div class="container">
        <div class="row no-gutters">
            @foreach ($testimonies as $row)
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <h4 class="title"><a href="#">{{ $row->nama }}</a></h4>
                        <div class="rating">
                            @for ($i = 0; $i < 5; $i++)
                                @if ($i < $row->rating)
                                    <i class="bi bi-star-fill"></i>
                                @else
                                    <i class="bi bi-star"></i>
                                @endif
                            @endfor 
                        </div>
                        <p class="description">{{ $row->comment }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $testimonies->links() }} <!-- Menambahkan pagination links -->
        </div> 
    </div>
</section>
<!-- End Testimonies Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">
      <br>
      <br>
      <div class="section-title">
          <h2>Our Menu</h2>
        </div>

        <div class="row no-gutters">
        @foreach  ($menu as $row)
          <div class="col-lg-4 col-md-6 content-item">
            <h4>{{ $row -> header }} </h4>
            <img src="{{ $row -> img_menu }}" class="img-fluid" alt="">
            <p>{{ $row-> decs }}
                </p>
          </div>
          @endforeach

      </div>
    </section><!-- End Menu Section -->

<section id="addTesti" class="addTesti">
    <div class="container">
      <div class="d-flex flex-column align-items-center my-4 centered-heading">
        <br>
         <h4>Have You Tried Our Drinks?</h4>
          <a href="{{ url('/post-comment') }}" class="btn btn-info" role="button">Add Your Testimonies Here !</a>
          <br>
      </div>
    </div>
</section>


    <!-- ======= Make Your Own Drink Section ======= -->
    <section id="yourDrink" class="yourDrink">
      <div class="container">

        <div class="section-title">
          <h2>Make Your Own Drink</h2>
          <p>Nikmati kopi favoritmu, buatanmu!</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-coffee">Coffee</li>
              <li data-filter=".filter-noncoffee">Non-Coffee</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

        <!-- Coffee : Kopi Inspirasi -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-coffee">
            <div class="portfolio-wrap">
              <img src="assets/img/make-your-own-drink/KopiInspirasiA.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kopi Inspirasi</h4>
                <p><i>simply kopi susu gula aren</i></p>
                <div class="portfolio-links">
                  <a href="assets/img/make-your-own-drink/KopiInspirasiA.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Non Coffee : Matcha Latte -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-noncoffee">
            <div class="portfolio-wrap">
              <img src="assets/img/make-your-own-drink/MatchaLatteA.png" class="img-fluid" alt="" width="540" height="540">
              <div class="portfolio-info">
                <h4>Matcha Latte</h4>
                <p><i>vibrant green, creamy, and slightly sweet drink with a unique, earthy flavor</i></p>
                <div class="portfolio-links">
                  <a href="assets/img/make-your-own-drink/MatchaLatteA.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Coffee : Caramel Macchiato -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-coffee">
            <div class="portfolio-wrap">
              <img src="assets/img/make-your-own-drink/CaramelMacchiatoA.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Caramel Macchiato</h4>
                <p><i>sweet and creamy drink with a bold coffee flavor and rich caramel notes</i></p>
                <div class="portfolio-links">
                  <a href="assets/img/make-your-own-drink/CaramelMacchiatoA.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Non Coffee : Red Velvet -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-noncoffee">
            <div class="portfolio-wrap">
              <img src="assets/img/make-your-own-drink/RedVelvetA.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Red Velvet</h4>
                <p><i>comforting drink that tastes like a liquid version of red velvet cake</i></p>
                <div class="portfolio-links">
                  <a href="assets/img/make-your-own-drink/RedVelvetA.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Coffee : Mochaccino -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-coffee">
            <div class="portfolio-wrap">
              <img src="assets/img/make-your-own-drink/MochaccinoA.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mochaccino</h4>
                <p><i>rich, creamy drink with the perfect blend of coffee and chocolate flavors</i></p>
                <div class="portfolio-links">
                  <a href="assets/img/make-your-own-drink/MochaccinoA.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Non Coffee : Cookies n Cream -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-noncoffee">
            <div class="portfolio-wrap">
              <img src="assets/img/make-your-own-drink/CookiesnCreamA.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Cookies n Cream</h4>
                <p><i>thick, creamy drink that tastes like cookies and cream ice cream in a glass</i>/p>
                <div class="portfolio-links">
                  <a href="assets/img/make-your-own-drink/CookiesnCreamA.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= About Us Section ======= -->
    <section id="aboutUs" class="aboutUs section-bg">
  <div class="container">

    <div class="section-title">
      <h2>About Us</h2>
      <p>Alleyway Muse, a unique space where creativity, community, and comfort come together. Located in the heart of the city, Alleyway Muse is your go-to destination for inspiration and relaxation.</p>
    </div>
    
    <div class="row">
      @foreach ($about_us as $row)
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <img src="{{ $row->img_team }}" alt="">
          <h4>{{ $row->name }}</h4>
          <span>{{ $row->role }}</span>
          <p>{{ $row->deskripsi }}</p>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section>
<!-- End About Us Section -->

@include('contact');

  </main><!-- End #main -->

@include('footer');

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>