<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SKYdhule</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  {{-- <link href="{{ asset('frontend/assets/css/sb-admin-2.min.css')}}" rel="stylesheet"> --}}
  <link href="{{ asset('frontend/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Serenity - v4.1.0
  * Template URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
              <input type="text" name="" id="input" placeholder="Enter city name">
              <button id="search" onclick="searchByCity()">Cari</button>
            </li>
            <li><a href="index.html">Home</a></li>
            <li><a href="{{ route('transaksi') }}">Premium Plan</a></li>
            <li><a>
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="">Logout</button>
            </form>
            </a>
            </li>
            <a href="{{ route('profile.index') }}" ><i class="fa fa-user-circle"  style='font-size:19px'></i></a>
          </ul>
        @else
          <ul>
            <li>
              <input type="text" name="" id="input" placeholder="Enter city name">
              <button id="search" onclick="searchByCity()">Cari</button>
            </li>
            <li><a href="index.html">Home</a></li>
            <li><a href="{{ route('login') }}">Premium Plan</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
          </ul>
        @endif
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>Transaksi</h2>
            <p> </p>
          </div>
        </div>
      </div>
 
    </section><!-- End Breadcrumbs -->
    
    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">
            <div class="card">
             
              <div class="card-body">
                {{-- <div class="col-lg-5 div-inline-block">
                  <ul>
                    <li><i class="bx bx-check-double"></i> yg di dapat kalau premium</li>
                    <li><i class="bx bx-check-double"></i> yg di dapat kalau premium</li>
                    <li><i class="bx bx-check-double"></i> yg di dapat kalau premium</li>
                    <li><i class="bx bx-check-double"></i> yg di dapat kalau premium</li>
                  </ul>
                </div> --}}
                <div class="col-lg-3 col-md-6 div-inline-block">
                  <section class="pricing">
                  <div class="box" data-aos="fade-up">
                    <h3>Free</h3>
                    <h4><sup>RP</sup>10k<span> / bulan</span></h4>
                    <ul>
                      <li><i class="bx bx-check-double"></i> yg di dapat kalau premium blblblblbblblbll</li>
                    </ul>
                    <div class="btn-wrap">
                      <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                  </div>
                </section>
                </div>
                <div class="col-lg-6 div-inline-block">
                    <div class="form-row">
                      <div class="col-md-4 col-lg-12 mb-3">
                        <label class="mb-2" for="validationCustom01">Nomor Rekening</label>
                        <input class="form-control" id="validationCustom01" type="text" placeholder="No rek" required="">
                        <div class="valid-feedback">Looks good!</div>
                      </div>
                      <div class="row">
                        <label class="mb-2" for="validationCustom01">Metode Pembayaran</label>
                        <div class="col-xl-6">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Dana</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label">Gopay</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">OVO</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label">ShoopePay</label>
                          </div>
                        </div>
                        <div class="col-xl-6 mb-3">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">BRI</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label">Mandiri</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">BNI</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label">Visa</label>
                          </div>
                        </div>

                        <hr>
                        <div class="col-xl-6">
                          <button class="btn btn-primary" data-toggle="modal" data-target="#ListRekening"> List Rekening </button>
                        </div>
                        <div class="col-xl-6">
                          <div class="form-group">
                            <label for="" class="col-form-label">Masukkan Bukti Pembayaran</label>
                            <input type="file" class="form-control">
                          </div>
                        </div>
                        
                      </div>
                </div>
                
              </div>
            </div>
            
          </div><!-- End blog entries list -->

          {{-- <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">General <span>(25)</span></a></li>
                  <li><a href="#">Lifestyle <span>(12)</span></a></li>
                  <li><a href="#">Travel <span>(5)</span></a></li>
                  <li><a href="#">Design <span>(22)</span></a></li>
                  <li><a href="#">Creative <span>(8)</span></a></li>
                  <li><a href="#">Educaion <span>(14)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                  <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                  <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                  <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                  <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                  <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar --> --}}

          {{-- </div><!-- End blog sidebar --> --}}

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <div class="modal fade bd-example-modal-lg" id="ListRekening" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">List Rekening Kami</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <img src="{{ asset('frontend/assets/img/list-rekening.jpg')}}" alt="" style="width: 100%;">
        </div>
      </div>
    </div>
  </div>

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
              <li><a href="{{route('transaksi')}}"> Transaksi</a></li>
              <li><a href="{{route('login')}}"> Logout</a></li>
              <li><a href="{{route('profile')}}"> Profile</a></li>
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


  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js')}}"></script>
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