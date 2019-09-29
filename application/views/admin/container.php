<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?php echo base_url(); ?>dist/img/icon.png">

  <title>Admin PPDB YPP Babussalam</title>
  <link href="<?=base_url()?>dist/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>dist/sweetalert2/sweetalert2.min.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>dist/sweetalert2/sweetalert2.min.js"></script>
  <link href="<?=base_url()?>dist/admin/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>dist/google-font/css.css">

  <script src="<?=base_url()?>dist/admin/vendor/jquery/jquery.min.js"></script>
  <style type="text/css">
    body{
      font-family: 'Muli', sans-serif;
    }
    .row div{
      margin-bottom: 10px;
    }
  </style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

      <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url()?>admin/dashboard">
        <div class="sidebar-brand-text mx-3">PPDB ADMIN</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      
      <!-- Heading -->
      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php echo ( isset($dashboard) )? 'active' : '' ?> ">
        <a class="nav-link" href="<?=base_url()?>admin/dashboard">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?php echo ( isset($data_siswa) )? 'active' : '' ?> ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-users"></i>
          <span>Data Pendaftar</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Pendaftar</h6>
            <a class="collapse-item" href="<?=base_url()?>admin/baru">Baru</a>
            <a class="collapse-item" href="<?=base_url()?>admin/tervalidasi">Tervalidasi</a>
          </div>
        </div>
      </li>
      <li class="nav-item" <?php echo ( isset($export) )? 'active' : '' ?> >
        <a class="nav-link" href="<?php echo base_url(); ?>admin/export">
          <i class="fa fa-fw fa-file-excel"></i> 
          <span>Export Data</span>
        </a>
      </li>
      <li class="nav-item" <?php echo ( isset($setting) )? 'active' : '' ?> >
        <a class="nav-link" href="<?php echo base_url(); ?>admin/setting">
          <i class="fa fa-fw fa-cog"></i> 
          <span>Setting</span>
        </a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter"><?php echo $this->db->where('siswa_status', 'Baru')->get('siswa')->num_rows(); ?></span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Pemberitahuan
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-user text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"><?php echo date('F d, Y'); ?></div>
                    <span class="font-weight-bold"><?php echo $this->db->where('siswa_status', 'Baru')->get('siswa')->num_rows(); ?> Pendaftar Masuk</span>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="<?php echo base_url() ?>admin/baru">Tampilkan Semua Pemberitahuan</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('username'); ?></span>
                <img class="img-profile rounded-circle" src="<?=base_url()?>dist/img/foto.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo base_url(); ?>admin/profil">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <?php echo $content; ?>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Yayasan Pondok Pesantren Babussalam</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin untuk keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Ya" jika anda ingin keluar dari aplikasi .</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="<?php echo base_url(); ?>admin/out">Ya</a>
        </div>
      </div>
    </div>
  </div>
  <script src="<?=base_url()?>dist/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>dist/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?=base_url()?>dist/admin/js/sb-admin-2.min.js"></script>
  <script type="text/javascript">
    jQuery(function(){
      jQuery(".swal").click(function(e){
          e.preventDefault();
          var url = jQuery(this).attr('href');
          swal({
              title:"Perhatian !",
              text:"Apakah anda ingin melanjutkan aksi ini?",
              type:"warning",
              showCancelButton:!0,
              confirmButtonClass:"btn btn-success",
              cancelButtonClass:"btn btn-danger m-l-10"
          }).then((result) => {
              window.location = url;
          })
      })
    })
  </script>
</body>

</html>
