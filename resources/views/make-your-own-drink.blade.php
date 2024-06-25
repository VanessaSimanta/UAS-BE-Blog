<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @foreach ($myodData as $row)
    <title>{{ $row->header }} Recipe</title>
    @endforeach
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Alleycon -->
    <link href="{{ asset('assets/img/alleycon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- =======================================================
    * Template Name: Green
    * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
    * Updated: Mar 17 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body>
@include('header')
<h1> {{ $row->header }}</h1>
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url({{ asset('assets/img/slide/customer.jpeg') }})">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Alleyway Muse</span></h2>
                        <p class="animate__animated animate__fadeInUp">Make your day beautiful with some coffee at Alleyway Muse.</p>
                        <a href="#testimonies" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url({{ asset('assets/img/slide/coffee.jpeg') }})">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Check out our menu! What would be your favorite?</h2>
                        <p class="animate__animated animate__fadeInUp">At Alleyway Muse, our dream is to serve high quality coffee, made with the freshest local ingredients to customers across Indonesia, and the rest of the world. </p>
                        <a href="#menu" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url({{ asset('assets/img/slide/noncoffee.jpeg') }})">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Not a fan of coffee?</h2>
                        <p class="animate__animated animate__fadeInUp">Don't worry, we also have non-coffee menus too! Such as matcha latte, red velvet latte, and so many more! Go check it out now!.</p>
                        <a href="#menu" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                    </div>
                </div>
            </div>
        </div>
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
        </div>
    </section>
    <!-- End testimonies -->
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div class="container">
            <br>
            <br>
            <div class="section-title">
                <h2>Our Menu</h2>
            </div>
            <div class="row no-gutters">
                @foreach ($menu as $row)
                <div class="col-lg-4 col-md-6 content-item">
                    <h4>{{ $row->header }} </h4>
                    <img src="{{ asset($row->img_menu) }}" class="img-fluid" alt="">
                    <p>{{ $row->decs }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Menu Section -->
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
                        <img src="{{ asset($row->img_team) }}" alt="">
                        <h4>{{ $row->name }}</h4>
                        <span>{{ $row->role }}</span>
                        <p>{{ $row->deskripsi }}</p>
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End About Us Section -->
    @include('contact')
</main><!-- End #main -->
@include('footer')
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
