<div class="container-fluid">
  <?php echo $this->session->flashdata('msg'); ?>
  <div class="d-sm-flex mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title; ?>
    </h1>
    
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <form action="" method="POST">
      <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-3">
          <input type="text" class="form-control" name="keyword" placeholder="Kode atau Nama ">
        </div>
        <div class="col-md-1">
          <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-search"></i> cari</button>
        </div>
      </div>
      </form>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
           <thead>
            <tr>
              <th>No.</th>
              <th>Kode</th>
              <th>Nama</th>
              <th>TTL</th>
              <th>Jenis Kelamin</th>
              <th>Pilihan Pendidikan</th>
              <th>Pilih Pondok</th>
              <th>Kelengkapan Berkas</th>
              <th>Tanggal Daftar</th>
              <th>Pilihan</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; foreach( $query_siswa->result() as $row ){ ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $row->siswa_kode; ?></td>
              <td><?php echo $row->siswa_nama; ?></td>
              <td><?php echo $row->siswa_tempat_lahir; ?>, <?php echo date('d-F-Y', strtotime($row->siswa_tanggal_lahir)); ?></td>
              <td><?php echo $row->siswa_jenis_kelamin; ?></td>
              <td><?php echo $row->siswa_pilihan_pendidikan; ?></td>
              <td>
                <?php if( $row->siswa_pilihan_pondok == 'ya'){ ?>
                  <span class="badge badge-success">Ya</span>
                <?php }else{ ?>
                  <span class="badge badge-danger">Tidak</span>
                <?php } ?>
              </td>
              <td>
                <ol>
                  <li>Foto &nbsp; <?php echo ( $row->siswa_file_foto == NULL )? "<i class='fa fa-times text-danger'></i>" : "<i class='fa fa-check text-success'></i>"; ?></li>
                  <li>KTP &nbsp; <?php echo ( $row->siswa_file_ktp == NULL )? "<i class='fa fa-times text-danger'></i>" : "<i class='fa fa-check text-success'></i>"; ?></li>
                  <li>NISN &nbsp; <?php echo ( $row->siswa_file_nisn == NULL )? "<i class='fa fa-times text-danger'></i>" : "<i class='fa fa-check text-success'></i>"; ?></li>
                  <li>KK &nbsp; <?php echo ( $row->siswa_file_kk == NULL )? "<i class='fa fa-times text-danger'></i>" : "<i class='fa fa-check text-success'></i>"; ?></li>
                  <li>Akte &nbsp; <?php echo ( $row->siswa_file_akte == NULL )? "<i class='fa fa-times text-danger'></i>" : "<i class='fa fa-check text-success'></i>"; ?></li>
                  <li>Ijazah &nbsp; <?php echo ( $row->siswa_file_ijazah == NULL )? "<i class='fa fa-times text-danger'></i>" : "<i class='fa fa-check text-success'></i>"; ?></li>
                </ol>
              </td>
              <td><?php echo date('d-m-Y H:i:s', strtotime($row->siswa_tanggal_daftar)); ?></td>
              <td>
                <a href="<?=base_url()?>admin/detail/<?php echo $row->siswa_id; ?>" class="btn btn-success btn-sm">Detail</a>
                <a href="<?=base_url()?>admin/konfirmasi_batal_validasi/<?php echo $row->siswa_kode; ?>" class="btn btn-danger btn-sm">Batal Validasi</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>

        <p class="left">Menampilkan <?php echo $limit; ?> 
        dari <?php echo $total_rows; ?> baris 
        <?php echo ( is_null($keyword))? '' : 'Dari pencarian : '. $keyword; ?></p>
        <?php echo $paginasi; ?>
      </div>
    </div>
  </div>

</div>