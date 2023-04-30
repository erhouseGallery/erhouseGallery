<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <title>Profil</title>

  {{-- css --}}
  <link rel="stylesheet" href="../assets/css/main.css">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">

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
    {{-- Navbar Header --}}
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid d-flex align-items-center justify-content-between">
              <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
                <h1>Erhouse Gallery</h1>
              </a>
              <nav id="navbar" class="navbar">
                <ul>
                  <li><a class="fitur-nav" href="index.html" > Home</a></li>
                  <li class="dropdown"><a class="fitur-nav" href="#"><span>Karya</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                      <li><a  class="fitur-nav" class="" href="gallery.html">Lukisan</a></li>
                      <li><a class="fitur-nav" href="gallery.html">Patung</a></li>
                    </ul>
                  </li>
                  <li><a a class="fitur-nav" href="services.html">Artikel</a></li>
                  <li><a a class="fitur-nav" href="contact.html">Event</a></li>
                  <li><a a class="fitur-nav" href="about.html">Tentang Kami</a></li>
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

        {{-- end Header Navbar --}}


{{-- Navbar Collapse For Sidebar --}}
          <nav class="navbar-collapse navbar-dark bg-dark d-md-none d-lg-none d-xl-none d-xxl-none ">
            <div class="container-fluid d-flex justify-content-end py-3">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-chevron-down dropdown-indicator"></i>
              </button>
            </div>
          </nav>

          <div class="collapse d-md-none d-lg-none d-xl-none d-xxl-none" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <ul class="text-white">
                    <li class="sidebar-fiture text-center"><a class="nav-link" href="blank.html">
                        <span>Dashboard</span></a></li>
                      <li class="sidebar-fiture text-center"><a class="nav-link" href="blank.html">
                        <span>Pemesanan</span></a></li>
                      <li class="sidebar-fiture text-center"><a class="nav-link" href="blank.html">
                        <span>Profile</span></a></li>
                </ul>
            </div>
          </div>
        {{-- End Navbar Collapse For Sidebar --}}


{{-- Sidebar --}}
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
      {{-- End Sidebar --}}


      <!-- Main Content -->
      <div class="main-content mt-5">
             <button type="button btn-lg" class="btn text-light" style="background-color: #AF1616"> Buat Pesanan</button>
             <table class="table-responsive mt-3 ">
                 <thead >
                     <tr class="">
                         <th class="text-light">No</th>
                         <th class="text-light">Nama</th>
                         <th class="text-light">Nomor</th>
                         <th class="text-light">Alamat</th>
                         <th class="text-light">gambar</th>
                         <th class="text-light">Deskripsi</th>
                         <th class="text-light">Status</th>
                         <th class="text-light">Catatan</th>
                     </tr>
                 </thead>
                 <tbody class="">
                     <tr>
                         <td>1</td>
                         <td>Irfannudin Ihsan</td>
                         <td>085831009476</td>
                         <td>Karang Kauman RT 05 Wijirejo Pandak Bantul Yogyakarta</td>
                         <td><img src="/sketsa.png" alt="" class="img-fluid" style="width : 80%"></td>

                         <td>Halo kak, tolong buatkan patung singa seperti gambar atau sketsa yang sama kirimkan. Tolong buatkan dengan bahan perunggu, terima kasih</td>
                         <td>Diterima</td>
                         <td>Pesanan sudah diterima, nanti akan dihubungi admin melalui WA</td>
                     </tr>
                     <tr >
                         <td>1</td>
                         <td>Irfannudin Ihsan</td>
                         <td>085831009476</td>
                         <td>Karang Kauman RT 05 Wijirejo Pandak Bantul Yogyakarta</td>
                         <td><img src="/sketsa.png" alt="" class="img-fluid" style="width : 80%"></td>

                         <td>Halo kak, tolong buatkan patung singa seperti gambar atau sketsa yang sama kirimkan. Tolong buatkan dengan bahan perunggu, terima kasih</td>
                         <td>Diterima</td>
                         <td>Pesanan sudah diterima, nanti akan dihubungi admin melalui WA</td>
                     </tr>
                     <tr >
                         <td>1</td>
                         <td>Irfannudin Ihsan</td>
                         <td>085831009476</td>
                         <td>Karang Kauman RT 05 Wijirejo Pandak Bantul Yogyakarta</td>
                         <td><img src="/sketsa.png" alt="" class="img-fluid" style="width : 80%"></td>

                         <td>Halo kak, tolong buatkan patung singa seperti gambar atau sketsa yang sama kirimkan. Tolong buatkan dengan bahan perunggu, terima kasih</td>
                         <td>Diterima</td>
                         <td>Pesanan sudah diterima, nanti akan dihubungi admin melalui WA</td>
                     </tr>
                     <tr >
                         <td>1</td>
                         <td>Irfannudin Ihsan</td>
                         <td>085831009476</td>
                         <td>Karang Kauman RT 05 Wijirejo Pandak Bantul Yogyakarta</td>
                         <td><img src="/sketsa.png" alt="" class="img-fluid" style="width : 80%"></td>

                         <td>Halo kak, tolong buatkan patung singa seperti gambar atau sketsa yang sama kirimkan. Tolong buatkan dengan bahan perunggu, terima kasih</td>
                         <td>Diterima</td>
                         <td>Pesanan sudah diterima, nanti akan dihubungi admin melalui WA</td>
                     </tr>
                 </tbody>

             </table>


       </div>
        <!-- End Main Content -->



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
