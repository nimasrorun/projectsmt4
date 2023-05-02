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
        <ul>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('transaksi') }}">Transaksi</a></li>
          <li><a href="{{ route('login') }}">Logout</a></li>
       <a href="{{ route('profile') }}" ><i class="fa fa-user-circle"  style='font-size:19px'></i></a>
        </ul>
        
        <i class="bi bi-list mobile-nav-toggle"></i>
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
              <div class="card-header">
                <h5>Custom styles</h5><span style="color: black">For custom Bootstrap form validation messages, you’ll need to add the <code class="text-danger">novalidate</code> boolean attribute to your <code class="text-danger">&lt;form&gt;</code>. This disables the browser default feedback tooltips, but still provides access to the form validation APIs in JavaScript. Try to submit the form below; our JavaScript will intercept the submit button and relay feedback to you.</span><span>When attempting to submit, you’ll see the <code class="text-danger">:invalid </code> and <code class="text-danger">:valid </code> styles applied to your form controls.</span>
              </div>
              <div class="card-body">
                <div class="col-lg-5 div-inline-block">
                  <ul>
                    <li><i class="bx bx-check-double"></i> yg di dapat kalau premium</li>
                    <li><i class="bx bx-check-double"></i> yg di dapat kalau premium</li>
                    <li><i class="bx bx-check-double"></i> yg di dapat kalau premium</li>
                    <li><i class="bx bx-check-double"></i> yg di dapat kalau premium</li>
                  </ul>
                </div>
                <div class="col-lg-6 div-inline-block">
                  <form class="needs-validation" novalidate="">
                    <div class="form-row">
                      <div class="col-md-4 mb-3">
                        <label for="validationCustom01">First name</label>
                        <input class="form-control" id="validationCustom01" type="text" placeholder="First name" required="">
                        <div class="valid-feedback">Looks good!</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Last name</label>
                        <input class="form-control" id="validationCustom02" type="text" placeholder="Last name" required="">
                        <div class="valid-feedback">Looks good!</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Username</label>
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend">@</span></div>
                          <input class="form-control" id="validationCustomUsername" type="text" placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                          <div class="invalid-feedback">Please choose a username.</div>
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom03">City</label>
                        <input class="form-control" id="validationCustom03" type="text" placeholder="City" required="">
                        <div class="invalid-feedback">Please provide a valid city.</div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationCustom04">State</label>
                        <input class="form-control" id="validationCustom04" type="text" placeholder="State" required="">
                        <div class="invalid-feedback">Please provide a valid state.</div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationCustom05">Zip</label>
                        <input class="form-control" id="validationCustom05" type="text" placeholder="Zip" required="">
                        <div class="invalid-feedback">Please provide a valid zip.</div>
                      </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                  </form>
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

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>SKYdhule</h3>
        
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Link</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Laman Transaksi</a></li>
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
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

    

        </div>
      </div>
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