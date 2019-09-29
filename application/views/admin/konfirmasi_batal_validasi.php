<!-- Begin Page Content -->
<div class="container-fluid">

     <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title; ?>
    </h1>
    
  </div>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
     <p>Anda akan membatalkan validasi pembayaran pendaftaran atas kode pendaftaran <b><?php echo $this->uri->segment(3); ?></b></p>
     <a href="<?php echo base_url(); ?>admin/batal_validasi/<?php echo $this->uri->segment(3); ?>" class="btn btn-primary">Ya</a>
     <a href="<?php echo base_url(); ?>admin/baru" class="btn btn-danger">Batal</a>

    </div>
  </div>

</div>
<!-- /.container-fluid -->