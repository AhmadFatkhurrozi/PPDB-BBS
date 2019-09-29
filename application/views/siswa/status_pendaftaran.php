<?php $row = $query_siswa->row(); ?>

<div class="container" style="padding-top: 50px;">
	<div class="row">
		<div class="col-md-12 text-center">
			<img src="<?=base_url()?>dist/img/logo.png" class="img-fluid" style="width: 400px;">
			<p class="text-muted">Telp. (0321) 489009 - 081231919636 - 085655419681 - 085109132700</p>
		</div>
	</div>
	
  <?php $status = $this->db->where('siswa_kode', $this->session->userdata('kode'))
                       ->get('siswa')
                       ->row()->siswa_status;
 
  if ($status == 'Baru') { ?>
       
	<p class="alert alert-danger text-center"><i class="fa fa-bullhorn"></i> Silahkan menyetorkan semua berkas (print identitas & berkas terlampir) dan selesaikan pembayaran administrasi pendaftaran anda </p>

  <?php } else { ?>

  <p class="alert alert-success text-center"><i class="fa fa-check"></i> Status Pendaftaran Tervalidasi </p>
  
  <?php }   ?>
  
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
            <h4>Akun Siswa</h4><hr>
            <div class="float-right">
                <a class="btn btn-success ml-2 mb-1 btn-sm" target="_blank" href="<?php echo site_url('admin/cetak_pdf/').$row->siswa_id; ?>">
                    <i class="fa fa-file-pdf"></i> Cetak Identitas (.pdf)
                </a>
                <a href="<?php echo base_url(); ?>home/out" class="swal btn btn-danger ml-2 mb-1 btn-sm">Keluar</a>
            </div>
            <table class="table table-striped">
                <tr>
                    <td>No Registrasi</td>
                    <td>Password</td>
                    <td></td>
                </tr>
                <tr>
                    <td><b><?php echo $row->siswa_kode; ?></b></td>
                    <td><b><?php echo $row->siswa_password; ?></b></td>
                    <td>
                     
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
               <h4>Pilihan Pendidikan</h4><hr>
               <div class="table-responsive">
                  <table class="table">
                    <tbody>
                        <tr>
                            <td>Pendidikan</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_pilihan_pendidikan; ?></td>
                        </tr>
                        <?php if( $row->siswa_pilihan_pendidikan != 'PONDOK' ){ ?>
                        <tr>
                            <td>Pilih Pondok?</td>
                            <td>:</td>
                            <td>
                              <?php if( $row->siswa_pilihan_pondok == 'ya'){ ?>
                                <span class="badge badge-danger">Ya</span>
                              <?php }else{ ?>
                                <span class="badge badge-danger">Tidak</span>
                              <?php } ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                  </table>
               </div>
               <br>
               <h4>Data Pribadi</h4><hr>
               <div class="table-responsive">
                  <table class="table">
                    <tbody>
                        <tr>
                            <td>Nomor KK.</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_no_kk; ?></td>
                        </tr>
                        <tr>
                            <td>NISN</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_no_nisn; ?></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_no_nik; ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_nama; ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_jenis_kelamin; ?></td>
                        </tr>
                        <tr>
                            <td>Tempat, Tanggal Lahir</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_tempat_lahir; ?>, <?php echo date('d-m-Y', strtotime($row->siswa_tanggal_lahir)); ?></td>
                        </tr>
                        <tr>
                            <td>Anak Ke -</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_anak_ke; ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Saudara</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_jumlah_saudara; ?></td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_kewarganegaraan; ?></td>
                        </tr>
                        <tr>
                            <td>Biaya Ditanggung</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_penanggung_biaya; ?></td>
                        </tr>
                    </tbody>
                  </table>
               </div>

               <br>

               <h4>Asal Sekolah</h4><hr>
               <div class="table-responsive">
                  <table class="table">
                    <tbody>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_asal_sekolah; ?>
                              <?php echo ($row->siswa_isi_asal_sekolah != null)? '( '.$row->siswa_isi_asal_sekolah.' )' : '' ; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Status Sekolah</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_status_asal_sekolah; ?> </td>
                        </tr>
                        <tr>
                            <td>Nama Sekolah</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_nama_asal_sekolah; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat Asal Sekolah</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_alamat_asal_sekolah; ?></td>
                        </tr>
                        <tr>
                            <td>No Telp</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_telp_asal_sekolah; ?></td>
                        </tr>
                        <tr>
                            <td>No NPSN</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_npsn_asal_sekolah; ?></td>
                        </tr>
                        <tr>
                            <td>No Seri Ijazah</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_no_ijazah; ?></td>
                        </tr>
                        <tr>
                            <td>Tahun Ijazah</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_th_ijazah; ?></td>
                        </tr>
                    </tbody>
                  </table>
               </div>
        </div>
        <div class="col-md-6">
               <h4>Data Orang Tua</h4><hr>
               <div class="table-responsive">
                  <table class="table">
                    <tbody>
                        <tr>
                            <td>NIK Ayah</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_nik; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Ayah</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_nama_ayah; ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_agama_ayah; ?></td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_pendidikan_ayah; ?></td>
                        </tr>
                        <tr>
                            <td>NIK Ibu</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_nik2; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Ibu</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_nama_ibu; ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_agama_ibu; ?></td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_pendidikan_ibu; ?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan Wali</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_pekerjaan_wali; ?></td>
                        </tr>
                        <tr>
                            <td>Penghasilan Wali</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_penghasilan_wali; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_alamat; ?></td>
                        </tr>
                        <tr>
                            <td>No Telp</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_no_telp; ?></td>
                        </tr>
                        <tr>
                            <td>Kode Pos</td>
                            <td>:</td>
                            <td><?php echo $row->siswa_kode_pos; ?></td>
                        </tr>
                    </tbody>
                  </table>
               </div>
               <br>
               <h4>Kelengkapan Upload Berkas</h4><hr>
               <div class="table-responsive">
                 <table class="table">
                    <tr>
                        <td>Foto</td>
                        <td>:</td>
                        <td>
                          <?php if( $row->siswa_file_foto == NULL ){ ?>
                            <span class="badge badge-danger">Belum Mengumpulkan</span>
                          <?php }else{ ?>
                            <a target="_blank" href="<?php echo base_url() ?>uploads/<?php echo $row->siswa_file_foto; ?>">Lihat</a>
                          <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>KTP Orang Tua (Ayah/Ibu)</td>
                        <td>:</td>
                        <td>
                          <?php if( $row->siswa_file_ktp == NULL ){ ?>
                            <span class="badge badge-danger">Belum Mengumpulkan</span>
                          <?php }else{ ?>
                            <a target="_blank" href="<?php echo base_url() ?>uploads/<?php echo $row->siswa_file_ktp; ?>">Lihat</a>
                          <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td>:</td>
                        <td>
                          <?php if( $row->siswa_file_nisn == NULL ){ ?>
                            <span class="badge badge-danger">Belum Mengumpulkan</span>
                          <?php }else{ ?>
                            <a target="_blank" href="<?php echo base_url() ?>uploads/<?php echo $row->siswa_file_nisn; ?>">Lihat</a>
                          <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Kartu Keluarga</td>
                        <td>:</td>
                        <td>
                          <?php if( $row->siswa_file_kk == NULL ){ ?>
                            <span class="badge badge-danger">Belum Mengumpulkan</span>
                          <?php }else{ ?>
                            <a target="_blank" href="<?php echo base_url() ?>uploads/<?php echo $row->siswa_file_kk; ?>">Lihat</a>
                          <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Akte Kelahiran</td>
                        <td>:</td>
                        <td>
                          <?php if( $row->siswa_file_akte == NULL ){ ?>
                            <span class="badge badge-danger">Belum Mengumpulkan</span>
                          <?php }else{ ?>
                            <a target="_blank" href="<?php echo base_url() ?>uploads/<?php echo $row->siswa_file_akte; ?>">Lihat</a>
                          <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Ijazah</td>
                        <td>:</td>
                        <td>
                          <?php if( $row->siswa_file_ijazah == NULL ){ ?>
                            <span class="badge badge-danger">Belum Mengumpulkan</span>
                          <?php }else{ ?>
                            <a target="_blank" href="<?php echo base_url() ?>uploads/<?php echo $row->siswa_file_ijazah; ?>">Lihat</a>
                          <?php } ?>
                        </td>
                    </tr>
                </table>
               </div>
        </div>
      </div>
    </div>
  </div>
</div>

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