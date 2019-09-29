<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?php echo base_url(); ?>dist/img/icon.png">
  <title>Yayasan Pondok Pesantren Babussalam</title>
  
  <?php 
    echo __css('creative');
    echo __css('popup');
  ?>

</head>

<body id="page-top">
<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <img src="<?=base_url()?>dist/img/logo.png" class="img-fluid" style="height: 40px;">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Pendaftaran Peserta Didik Baru 2019/2020</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">dibuka pendaftaran peserta didik baru tahun pelajaran 2019/2020!</p>
          <?php 
             $setting = $this->db->where('id_setting', '1')
                        ->get('setting')
                        ->row('akses');

            if ($setting == "admin") { ?>

             <a class="btn btn-primary" href="<?=base_url()?>home/login">Daftar</a>
            
            <?php } else { ?>

              <a class="btn btn-primary" href="<?=base_url()?>home/formulir">Daftar</a>

            <?php } ?>

          <a class="btn btn-info" href="<?=base_url()?>home/check">Cek Status</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">About</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-left">
          <div class="mt-5">
            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
            <h3 class="h4 mb-2">Alamat Kantor</h3>
            <p class="text-muted mb-0">
              Yayasan Pondok Pesantren Babussalam Jl. KH. Nur Syahid 110
              Kalibening Mojoagung Jombang 61482
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-left">
          <div class="mt-5">
            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
            <h3 class="h4 mb-2">Kontak Kami</h3>
            <p class="text-muted mb-0">
              Telp. (0321) 489009 - 081231919636 - 085655419681 - 085109132700
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-left">
          <div class="mt-5">
            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
            <h3 class="h4 mb-2">Pendidikan Formal</h3>
              <ul class="list-unstyled text-muted">
                <li>Roudlotul Athfal (RA)</li>
                <li>Madrasah Ibtida'iyah (MI)</li>
                <li>Madrasah Tsanawiyah (MTs)</li>
                <li>Madrasah Aliyah (MA)</li>
                <li>Sekolah Tingi Agama Islam (STAI)</li>
              </ul>
            <h3 class="h4 mb-2">Pendidikan Non Formal</h3>
              <ul class="list-unstyled text-muted">
                <li>Tahfidhul Qur'an</li>
                <li>Madrasah Diniyah (MADIN)</li>
              </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-left">
          <div class="mt-5">
            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
            <h3 class="h4 mb-2">Pendidikan Informal</h3>
              <ul class="list-unstyled text-muted">
                <li>Jam'iyatul Qurra' Wal-Hufadz</li>
                <li>Pengajian Kitab Kuning dan Takhasus</li>
                <li>Pendidikan Komputer</li>
                <li>Pendidikan Bahasa (Arab-Inggris)</li>
              </ul>
            <h3 class="h4 mb-2">Unit Pendukung</h3>
              <ul class="list-unstyled text-muted">
                <li>Baitul Maal Wat Tamwil (BMT)</li>
                <li>Klinik Gavrilla Medika Babussalam</li>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php echo $footer; ?>

  <?php
    echo __js('jquery'); 
    echo __js('bootstrap-bundle');
    echo __js('creative');
   ?>

</body>

</html>