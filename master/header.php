<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>hntr.tech Admin</title>
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/h1.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo-hntr" href="index.php"><img src="assets/images/hntr.png" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.php"><img src="assets/images/hntr1.png" alt="logo" /></a>
        </div>  
        <ul class="nav">
          <li class="nav-item nav-category">
            <span class="nav-link">Yönetim Paneli</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Giriş Sayfası</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="messages.php">
              <span class="menu-icon">
                <i class="mdi mdi-email"></i>
              </span>
              <span class="menu-title">Mesajlar</span>
            </a>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Website Ayarları</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="home.php">
              <span class="menu-icon">
                <i class="mdi mdi-home"></i>
              </span>
              <span class="menu-title">Anasayfa</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="about.php">
              <span class="menu-icon">
                <i class="mdi mdi-account-card-details"></i>
              </span>
              <span class="menu-title">Hakkımızda</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="services.php">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Hizmetlerimiz</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="contact.php">
              <span class="menu-icon">
                <i class="mdi mdi-email"></i>
              </span>
              <span class="menu-title">İletişim</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="blog.php">
              <span class="menu-icon">
                <i class="mdi mdi-blogger"></i>
              </span>
              <span class="menu-title">Blog</span>
            </a>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Admin Paneli Elemanları</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Basic UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="buttons.php">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="dropdowns.php">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="typography.php">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="basic_elements.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Form Elements</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="basic-table.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="chartjs.php">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="mdi.php">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="blank-page.php"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="error-404.php"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="error-500.php"> 500 </a></li>
                <li class="nav-item"> <a class="nav-link" href="login.php"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="register.php"> Register </a></li>
              </ul>
            </div>
          </li> 
        </ul>
      </nav>
      <!-- partial -->