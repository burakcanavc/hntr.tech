<?php
/* Fonksiyon sayfalarını çağırma işlemi */
require '../classes/db.php';
require '../classes/safe.php';
require '../classes/routing.php';
/* İşlem sonu */

/* Yönetici fotoğrafı ve ismi için veritabanı tablo çağırma işlemi */
$db=new Database();
$myQuery=$db->getRow("Call sp_Profile()");
/* İşlem sonu */



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>hntr.tech Master</title>
    <script src="../ckeditor/ckeditor.js"></script>
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
    <link rel="shortcut icon" href="../images/h1.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo-hntr" href="index.php"><img src="../images/hntr.png" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.php"><img src="../images/hntr1.png" alt="logo" /></a>
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
                <i class="mdi mdi-message-text"></i>
              </span>
              <span class="menu-title">Mesajlar</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="comments.php">
              <span class="menu-icon">
                <i class="mdi mdi-comment"></i>
              </span>
              <span class="menu-title">Yorumlar</span>
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
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-blogger"></i>
              </span>
              <span class="menu-title">Blog</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="blog.php"> Blog Oluştur </a></li>
                <li class="nav-item"> <a class="nav-link" href="blogs.php"> Blog Yazıları </a></li>
              </ul>
            </div>
          </li> 
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.php"><img src="assets/images/hntr1.png" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            
            <ul class="navbar-nav navbar-nav-right">
              
              
              
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="../images/<?php echo $myQuery->img; ?>" alt="master">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $myQuery->name; ?></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profil</h6>
                  <div class="dropdown-divider"></div>
                  <a href="profile.php" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Ayarlar</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="logout.php"" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Çıkış Yap</p>
                    </div>
                  </a>
                  
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->