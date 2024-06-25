<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Alleyway Muse - Homepage</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Alleycon -->
  <link href="assets/img/alleycon.png" rel="icon">
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
            <li data-filter=".filter-non-coffee">Non-Coffee</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">
      @foreach ($myod as $row)
        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $row->type }}">
          <div class="portfolio-wrap">
              <a href='/make-your-own-drink/{{ $row->endpoint }}'> 
              <img src="{{ $row->img_menu }}" class="img-fluid" alt="" height="100" width="1000">
              </a>
              <div class="portfolio-info">
                <h4>{{ $row->header }}</h4>
                <p>{{ $row->decs }}</p>
                <div class="portfolio-links">
                  <a href="{{ $row->img_menu }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1">
                  <i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details">
                  <i class="bx bx-link"></i></a>
                </div>  <!-- Close portfolio-link -->
              </div> <!-- Close portfolio-info -->
          </div> <!-- Close portfolio-wrap -->

        </div> <!-- Close filter -->
        @endforeach
      </div> <!-- CLose portfolio container -->
    </div> <!-- Close section container -->
  </section><!-- End Make Your Own Drink Section -->

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