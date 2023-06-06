<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SKYdhule</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontend/assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  
  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="{{ route('home') }}">SKYdhule</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
   
    
    
      <nav id="navbar" class="navbar">
        @if (Auth::check())
          <ul>
            <li>
              <input type="text" name="" id="input" placeholder="Enter city name" style="width: 60%; height: 100%;">
              <button id="search" onclick="searchByCity()">Cari</button>
            </li>
            <li><a href="{{route('home')}}">Home</a></li>
            @if (Auth::user()->level == 3)
                
            @else
              <li><a href="{{ route('transaksi.index') }}">Premium Plan</a></li>
            @endif
            <li><a>
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="">Logout</button>
            </form>
            </a>
            </li>
            <i class="fa fa-sm fa-user-circle-o" ></i>
            <a href="{{ route('profile.index') }}" ><i class="fa fa-user-circle"  style='font-size:19px'></i></a>
          </ul>
        @else
          <ul>
            <li>
              <input type="text" name="" id="input" placeholder="Enter city name" style="width: 60%; height: 100%;">
              <button id="search" onclick="searchByCity()">Cari</button>
            </li>
            <li><a href="index.html">Home</a></li>
            <li><a href="{{ route('login') }}">Premium Plan</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
          </ul>
        @endif
        
       
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <main class="weather">       
      <div class="weather">
          <p id="city"></p>
          <div class="temp-box">
              <img src="weathericon.png" alt="" id="img">
              <p id="temperature"></p>
          </div>
          <span id="clouds"></span>
      </div>
      <div class="divider1"></div>

      <div class="transparan-container">
          <p class="cast-header">Ramalan Cuaca</p>
          <div class="templist">

              <div class="next">
                  <div>
                      <p class="time"></p>
                      <p></p>
                  </div>
                  <p class="desc">-</p>
              </div>
          </div>
      </div>
  </main>

  <div class="forecstD">
      <div class="divider2"></div>
      <p class="cast-header"> Ramalan Cuaca 4 Hari Kedepan</p>
      <div class="weekF">
          <div class="dayF">
          
          </div>
          
      </div>
  </div>

  <script src="{{ asset('frontend/assets/js/weather.js') }}"></script>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">

              {{-- <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i class="bi bi-emoji-smile"></i>
                  <span data-purecounter-start="0" data-purecounter-end="65" class="purecounter">0</span>
                  <p>Pengguna</p>
                </div>
              </div> --}}

            </div>
          </div>
        </div>

        <div class="row">
         
            <section id="testimonials" class="testimonials">
              <div class="container" data-aos="zoom-in">
        
                <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                  <div class="swiper-wrapper">
                    
                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <img src="{{ asset('frontend/assets/img/dashboard_image/promosi.jpg') }}" class="testimonial-img-banner" alt="">
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <img src="{{ asset('frontend/assets/img/dashboard_image/promosi(1).jpg') }}" class="testimonial-img-banner" alt="">
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <img src="{{ asset('frontend/assets/img/dashboard_image/promosi(2).jpg') }}" class="testimonial-img-banner" alt="">
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <img src="{{ asset('frontend/assets/img/dashboard_image/promosi(3).jpg') }}" class="testimonial-img-banner" alt="">
                      </div>
                    </div>
        
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
        
              </div>
            </section>
            {{-- <div class="wrapper">
              <input type="radio" name="image-slide" checked="checked">
              <picture >
                <img src="public/frontend/assets/img/features-1.jpg" >
              </picture>
            
              <input type="radio" name="image-slide">
              <picture >
                <img src="https://picsum.photos/500/300?random=2" alt="">
              </picture>
            
              <input type="radio" name="image-slide">
              <picture >
                
                  <img src="https://picsum.photos/500/300?random=3" alt="">
                
              </picture>
            
              <input type="radio" name="image-slide">
              <picture>
                <img src="public/frontend/assets/img/features-1.jpg" alt="">
              </picture>
        
            
            </div> --}}
         

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    @if (Auth::check())
      @if (Auth::user()->level == 3)
          
      @else
      <section id="cta" class="cta">
        <div class="container" data-aos="fade-in">
  
          <div class="text-center">
            <h3>PREMIUM</h3>
            <a class="cta-btn" href="{{ route('transaksi.index')}}">Upgrade to Pro</a>
          </div>
          
          
        </div>
      </section><!-- End Cta Section -->          
      @endif
    @endif
    
    <!-- ======= Services Section ======= -->
    <section id="services" class="services ">
      <div class="container">

        <div class="section-title pt-5" data-aos="fade-up">
          <h2>Berita</h2>
        </div>

        <div class="row">
          @foreach ($berita as $item)
          <div class="col-md-6 col-lg-12">
            <div class="icon-box" data-aos="fade-up">
              <div >
                <div class="icon"><img src="{{ asset('frontend/assets/img/berita_image/'.$item->gambar)}}" class="berita-img-sm-banner"></div>
              </div>
              <div style="width: 70%">
                <h4 class="title" style="max-width: 200ch; overflow: hidden; white-space: nowrap; text-overflow: ellipsis"><a href="{{ $item->link }}">{{$item->judul_berita}}</a></h4>
                <p class="description" style="word-wrap: break-word; max-width: 200ch; overflow: hidden; white-space: nowrap; text-overflow: ellipsis">{{$item->dekripsi_berita}}</p>   
              </div>
            </div>
          </div>
          @endforeach
       
        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>SKYdhule</h3>
            <p>Semua informasi mengenai Prakiraan Cuaca, Iklim, Kualitas Udara, dan Gempa Bumi yang terjadi di berbagai kota di dunia tercakup dalam satu aplikasi</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Link</h4>
            <ul>
              <li><a href="{{route('home')}}">Home</a></li>
              <li><a href="{{route('transaksi.index')}}"> Transaksi</a></li>
              <li><a href="{{route('login')}}"> Logout</a></li>
              <li><a href="{{route('profile.index')}}"> Profile</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Hubungi Kami</h4>
            <p>
              Muhammad Naufal <br>
              Jember, Jawa Timur<br>              
              <strong>Nomor Telepon:</strong> 087248326380<br>
              <strong>Email:</strong> mnaufall@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>