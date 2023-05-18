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

  {{-- Profile CSS --}}
  <link href="{{ asset('frontend/assets/css/editp.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
   
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
                <h1>Nimas RN</h1>
                <p>nimasrn@gmail.com</p>
            </div>
  
           
        </div>
    </div>
    <div class="profile-info col-md-9">

        <div class="panel">
            <div class="bio-graph-heading">
               INFORMATION
            </div>
            <div class="panel-body bio-graph-info">

                <div class="row" style="margin-left: 100px;">
                  <div class="group" style="width: auto;">
                    <input  type="text" required="required"/><span class="highlight"></span><span class="bar"></span>
                    <label>Username</label>
                  </div> 
                  <div class="group" style="width: auto;">
                    <input type="text" required="required" style=""/><span class="highlight"></span><span class="bar"></span>
                    <label>Email</label>
                  </div>
                    <div class="group" style="width: auto;">
                      <input type="tel" required="required"/><span class="highlight"></span><span class="bar"></span>
                      <label>No telp</label>
                    </div>
                    <div style="margin: 20px 0 ;">
                        <a class="button" href="{{ route('editp') }}">Save</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
  </div>
  </div>
  
  </body>

</html>