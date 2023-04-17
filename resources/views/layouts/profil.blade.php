<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard User</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg bg-success">
      </div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Irfannudin Ihsan</div></a>
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
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Erhouse Gallery</a>
          </div>
          <ul class="sidebar-menu">
               {{-- untuk sidebar --}}
               <li class="d-flex justify-content-center"> <img alt="image" style="width: 30%" src="../assets/img/avatar/avatar-1.png" class="rounded-circle "></li>
               <br>
              <li class="active"><a class="nav-link" href="blank.html"><i class="fas fa-th"></i>
                <span>Dashboard</span></a></li>
              <li class="active"><a class="nav-link" href="blank.html"><i class="fas fa-shopping-cart"></i>
                <span>Pemesanan</span></a></li>
              <li class="active"><a class="nav-link" href="blank.html"><i class="fas fa-user"></i>
                <span>Profile</span></a></li>
            </ul>
        </aside>
      </div>


      <!-- Main Content -->
      <div class="main-content ">
      <div class="row mt-5 mx-5">
        <div class="col-5">
            <h1>Profil</h1>
            <div class="card-profil">

                <img  style="width: 30%"  src="/sketsa.png" class="rounded-circle " alt="">
                <table class="mt-3">
                    <tr>
                        <th>Nama : </th>
                        <th>Irfannudin Ihsan</th>
                    </tr>
                    <tr>
                        <th>Email : </th>
                        <th>irfannudinihsan56@gmail.com</th>
                    </tr>
                    <tr>
                        <th>Nomor : </th>
                        <th>085831008476</th>
                    </tr>
                </table>
                <button type="button btn-lg" class="btn text-light mt-2" style="background-color: #AF1616"> Edit</button>
            </div>
        </div>
      </div>
      </div>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>
