<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <title>Dashboard User</title>

<style>



</style>


  {{-- css --}}
  <link rel="stylesheet" href="../assets/css/main.css">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

<!-- Vendor CSS Files -->
 <!-- CSS Libraries -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheAet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">





  {{-- <link rel="stylesheet" href="../assets/css/style.css"> --}}
  {{-- <link rel="stylesheet" href="../assets/css/components.css"> --}}

</head>

<body>
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid d-flex align-items-center justify-content-between">
              <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
                <h1>Erhouse Gallery</h1>
              </a>

              <nav id="navbar" class="navbar">
                <ul>
                  <li><a href="index.html" class="active">Home</a></li>
                  <li class="dropdown"><a href="#"><span>Karya</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                      <li><a href="gallery.html">Lukisan</a></li>
                      <li><a href="gallery.html">Patung</a></li>
                    </ul>
                  </li>
                  <li><a href="services.html">Artikel</a></li>
                  <li><a href="contact.html">Event</a></li>
                  <li><a href="about.html">Tentang Kami</a></li>
                </ul>
              </nav>





              <div class="account">
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle  nav-link-user">
                      <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1" style="width: 30%">
                      <div class=" d-none d-lg-inline-block">Hi, Irfannudin Ihsan</div></a>
                      <div class="dropdown-menu dropdown-menu-right">
                       <a href="/dashboard" class="dropdown-item has-icon">
                          Dashboard
                        </a>
                        <a href="/dashboard/pemesanan" class="dropdown-item has-icon">
                           Pemesanan
                        </a>
                        <a href="features-settings.html" class="dropdown-item has-icon">
                         Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger">
                           Logout
                        </a>
                      </div>
                    </li>
                  </ul>
              </div>

              <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
              <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            </div>
          </header>

          {{-- <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
              <h5 class="text-white h4">Collapsed content</h5>
              <span class="text-body-secondary">Toggleable via the navbar brand.</span>
            </div>
          </div>
          <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </nav>
 --}}
 
      <div class="sidebar d-none d-md-inline-block" >
        <aside id="sidebar-wrapper">
          <ul class="sidebar-menu container">
               <li class="d-flex justify-content-center "> <img alt="image" style="width: 30%" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mt-3 "></li>
               <br>
              <li class="sidebar-fiture text-center"><a class="nav-link" href="blank.html">
                <span>Dashboard</span></a></li>
              <li class="sidebar-fiture text-center"><a class="nav-link" href="blank.html">
                <span>Pemesanan</span></a></li>
              <li class="sidebar-fiture text-center"><a class="nav-link" href="blank.html">
                <span>Profile</span></a></li>
            </ul>
        </aside>
      </div>


      <!-- Main Content -->
     {{--  <div class="main-content">
        <div class="row mt-5">
          <div class="col"> <h1>Hi, Irfannudin Ihsan</h1></div>
        </div>
        <div class="row mt-3">
          <div class="col-xl-3 col-md-4">
            <div class="card-data-dashboard text-center w-75 p-4" style="background-color :#F0EEED">
              <h1  class="text-data-dashboard">1</h1>
              <p  class="text-data-dashboard">Total Pesanan</p>
            </div>

          </div>
          <div class="col-xl-3 col-md-4">
            <div class="card-data-dashboard text-center w-75 p-4">
              <h1 class="text-data-dashboard">6</h1>
              <p  class="text-data-dashboard">Pesanan Diterima</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-4">
            <div class="card-data-dashboard  text-center w-75 p-4">
              <h1  class="text-data-dashboard">4</h1>
              <p class="text-data-dashboard">Pesanan Ditolak</p>
            </div>
          </div>
        </div>
      </div> --}}


{{-- javascript connect --}}
<script src="assets/js/main.js"></script>

  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

   <!-- Vendor JS Files -->
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
   <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
   <script src="assets/vendor/aos/aos.js"></script>
   <script src="assets/vendor/php-email-form/validate.js"></script>



  {{-- <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script> --}}


</body>
</html>
