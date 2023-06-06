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
  {{-- Profile CSS --}}
  <link href="{{ asset('frontend/assets/css/profile.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light" style="text-align: left;"><a href="index.html">SKYdhule</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
          <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            {{-- <li><a href="{{ route('transaksi') }}">Premium Plan</a></li> --}}
            <li><a>
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="">Logout</button>
            </form>
            </a>
            </li>
            <a href="{{ route('profile.index') }}" ><i class="fa fa-user-circle"  style='font-size:19px'></i></a>
          </ul>
       
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    
  <div class="container bootstrap snippets bootdey">
  <div class="row">
    <div class="profile-nav col-md-3">
        <div class="panel" style="height: 100%;">
            <div class="user-heading round" style="height: 100%;">
                <a href="#">
                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                </a>
                <h1>{{ Auth::user()->username }}</h1>
                <p>{{ Auth::user()->email }}</p>
            </div>
        </div>
    </div>
    <div class="profile-info col-md-9">

        <div class="panel">
            <div class="bio-graph-heading">
               INFORMATION
            </div>
            <div class="panel-body bio-graph-info">
          
                <div class="row">
                    <div class="bio-row">
                        <p><span>Username</span>: {{ Auth::user()->username }}</p>
                    </div>
                    <div class="bio-row">
                        <p><span>Email </span>: {{ Auth::user()->email }}</p>
                    </div>
                    <div class="bio-row">
                        <p><span>Nomor telpon </span>: {{ Auth::user()->phone }}</p>
                    </div>
                    <div class="">
                        <a class="button" href="{{ route('profile.edit') }}">Edit</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
  </div>
  </div>
  
  </body>

</html>