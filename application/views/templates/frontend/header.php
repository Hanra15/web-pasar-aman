<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PUSPAMAN - <?=$title;?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url();?>assets/img/frontend/logo_bpom.png" rel="icon">
  <!-- <link href="<?=base_url();?>assets/img/frontend/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url();?>assets/vendor/frontend/aos/aos.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/frontend/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/frontend/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/frontend/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/frontend/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url();?>assets/css/frontend/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- Uncomment below if you prefer to use an text logo -->
        <!-- <h1><a href="index.html">NewBiz</a></h1> -->
        <a href="<?=base_url();?>"><img src="<?=base_url();?>assets/img/frontend/logo_bpom_nav.png" alt=""></a>
				<a href="<?=base_url();?>"><img src="<?=base_url();?>assets/img/frontend/logo_ppabk.jpeg" alt=""></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?=base_url();?>">Beranda</a></li>
					<li class="dropdown"><a href="#"><span>Informasi pasar</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?=site_url('frontend/PasarAman/index')?>">Pasar Aman</a></li>
              <li><a href="<?=site_url('frontend/BahanBerbahaya/index')?>">Bahan Berbahaya</a></li>
            </ul>
          </li>
					
					<li class="dropdown"><a href="#"><span>Media</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?=site_url('frontend/Galeri/index')?>">Galeri</a></li>
              <li class="dropdown"><a href="#"><span>Publikasi</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="<?=site_url('frontend/Program/index')?>">Program</a></li>
                  <li><a href="<?=site_url('frontend/Pedoman/index')?>">Pedoman</a></li>
                  <li><a href="<?=site_url('frontend/Promosi/index')?>">Promosi</a></li>
                </ul>
              </li>
              <li><a href="<?=site_url('frontend/Berita/index')?>">Berita</a></li>
            </ul>
          </li>
					<li><a class="nav-link scrollto" href="<?=site_url('Login/loginfasilitator')?>">Fasilitator</a></li>
					<li><a class="nav-link scrollto" href="<?=site_url('Login/loginsipaman')?>">SIPAMAN</a></li>
					<li><a class="nav-link scrollto" href="<?=site_url('Kontak/index')?>">Kontak</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->
