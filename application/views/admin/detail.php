<?php $row = $query_siswa->row(); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

     <!-- Page Heading -->
  <div class="d-sm-flex mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title; ?>
    </h1>
    <?php if( $row->siswa_status == 'tervalidasi' ){ ?>
    <a class="btn btn-primary btn-sm ml-5" href="<?php echo site_url('admin/download/'.$row->siswa_id.''); ?>">
      <i class="fa fa-download"></i> Download Berkas (.zip)
    </a>
    <a class="btn btn-danger btn-sm ml-2" target="_blank" href="<?php echo site_url('admin/cetak_pdf/').$row->siswa_id; ?>">
      <i class="fa fa-file-pdf"></i> Cetak Identitas (.pdf)
    </a>
    <a class="btn btn-danger btn-sm ml-2" target="_blank" href="<?php echo site_url('admin/cetak_bukti/').$row->siswa_id; ?>">
      <i class="fa fa-id-card"></i> Cetak Bukti Validasi (.pdf) 
    </a>
    <?php } ?>
  </div>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
            <h4>Akun Siswa</h4><hr>
            <table class="table table-light text-dark">
                <tr>
                    <td>No Registrasi</td>
                    <td>Password</td>
                </tr>
                <tr>
                    <td><b><?php echo $row->siswa_kode; ?></b></td>
                    <td><b><?php echo $row->siswa_password; ?></b></td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
               <h4>Pilihan Pendidikan</h4><hr>
               <div id="notifications"><?php echo $this->session->flashdata('msgg'); ?></div>
               <div class="table-responsive">
                  <table class="table table-light text-dark" id="dataTable" width="100%" cellspacing="0">
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
                                <span class="badge badge-success">Ya</span>
                              <?php }else{ ?>
                                <span class="badge badge-danger">Tidak</span>
                              <?php } ?>
                            </td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><a href="<?php echo base_url()?>admin/edit_pendidikan/<?php echo $row->siswa_id; ?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a></td>
                        </tr>
                    </tbody>
                  </table>
               </div>
               <br>

               <h4>Data Pribadi</h4><hr>
               <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
               <div class="table-responsive">
                  <form>
                  <table class="table table-light text-dark" id="dataTable" width="100%" cellspacing="0">
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td><a href="<?php echo base_url()?>admin/edit_data_pribadi/<?php echo $row->siswa_id; ?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a></td>
                        </tr>
                    </tbody>
                  </table>
                  </form>

               </div>

               <br>

               <h4>Asal Sekolah</h4><hr>
               <div id="notifications"><?php echo $this->session->flashdata('msg1'); ?></div>
               <div class="table-responsive">
                  <table class="table table-light text-dark" id="dataTable" width="100%" cellspacing="0">
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td><a href="<?php echo base_url()?>admin/edit_asal_sekolah/<?php echo $row->siswa_id; ?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a></td>
                        </tr>
                    </tbody>
                  </table>
               </div>
        </div>
        <div class="col-md-6">
               <h4>Data Orang Tua</h4><hr>
               <div id="notifications"><?php echo $this->session->flashdata('msg2'); ?></div>
               <div class="table-responsive">
                  <table class="table table-light text-dark" id="dataTable" width="100%" cellspacing="0">
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td><a href="<?php echo base_url()?>admin/edit_data_ortu/<?php echo $row->siswa_id; ?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a></td>
                        </tr>
                    </tbody>
                  </table>
               </div>
               <br>
               <h4>Kelengkapan Upload Berkas</h4><hr>
               <div class="table-responsive">
                 <table class="table table-light">
                    <?php if( $row->siswa_file_foto == '' ){ ?>
                    <tr>
                        <td>
                            <label>Foto</label>
                            <form action="<?php echo base_url(); ?>admin/upload_file/<?php echo $row->siswa_id ?>?type=foto" method="post" enctype="multipart/form-data">
                                <input type="file" name="siswa_file_foto" class="form-control-file" onchange="return validasifile(this)" required="">
                                <small>(Ukuran Maximal 1 Mb Format JPG/PNG, Background Merah)</small>
                                <br>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </td>
                    </tr>
                    <?php }else{ ?>
                    <tr class="bg-light">
                        <td>Foto</td>
                        <td>:</td>
                        <td>
                            <a target="_blank" href="<?php echo base_url() ?>uploads/<?php echo $row->siswa_file_foto; ?>">Lihat</a> &nbsp;|&nbsp;
                            <a href="<?php echo base_url() ?>admin/delete_file/<?php echo $row->siswa_id; ?>?type=foto" class="swal">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                    <?php if( $row->siswa_file_ktp == '' ){ ?>
                    <tr>
                        <td>
                            <label>KTP Orang Tua (Ayah/Ibu)</label>
                            <form action="<?php echo base_url(); ?>admin/upload_file/<?php echo $row->siswa_id ?>?type=ktp" method="post" enctype="multipart/form-data">
                                <input type="file" name="siswa_file_ktp" class="form-control-file" onchange="return validasifile(this)" required="">
                                <small>(Ukuran Maximal 1 Mb Format JPG/PNG)</small>
                                <br>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </td>
                    </tr>
                    <?php }else{ ?>
                    <tr class="bg-light">
                        <td>KTP Orang Tua (Ayah/Ibu)</td>
                        <td>:</td>
                        <td>
                            <a target="_blank" href="<?php echo base_url() ?>uploads/<?php echo $row->siswa_file_ktp; ?>">Lihat</a> &nbsp;|&nbsp;
                            <a href="<?php echo base_url() ?>admin/delete_file/<?php echo $row->siswa_id; ?>?type=ktp" class="swal">Hapus</a>
                        </td>
                    </tr> 
                    <?php } ?>
                    <?php if( $row->siswa_file_nisn == '' ){ ?>
                    <tr>
                        <td>
                            <label>NISN</label>
                            <form action="<?php echo base_url(); ?>admin/upload_file/<?php echo $row->siswa_id ?>?type=nisn" method="post" enctype="multipart/form-data">
                                <input type="file" name="siswa_file_nisn" class="form-control-file" onchange="return validasifile(this)" required="">
                                <small>(Ukuran Maximal 1 Mb Format JPG/PNG)</small>
                                <br>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </td>
                    </tr>
                    <?php }else{ ?>
                    <tr class="bg-light">
                        <td>NISN</td>
                        <td>:</td>
                        <td>
                            <a target="_blank" href="<?php echo base_url() ?>uploads/<?php echo $row->siswa_file_nisn; ?>">Lihat</a> &nbsp;|&nbsp;
                            <a href="<?php echo base_url() ?>admin/delete_file/<?php echo $row->siswa_id; ?>?type=nisn" class="swal">Hapus</a>
                        </td>
                    </tr>  
                    <?php } ?>
                    <?php if( $row->siswa_file_kk == '' ){ ?>
                    <tr>
                        <td>
                            <label>Kartu Keluarga</label>
                            <form action="<?php echo base_url(); ?>admin/upload_file/<?php echo $row->siswa_id ?>?type=kk" method="post" enctype="multipart/form-data">
                                <input type="file" name="siswa_file_kk" class="form-control-file" onchange="return validasifile(this)" required="">
                                <small>(Ukuran Maximal 1 Mb Format JPG/PNG)</small>
                                <br>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </td>
                    </tr>
                    <?php }else{ ?>
                    <tr class="bg-light">
                        <td>Kartu Keluarga</td>
                        <td>:</td>
                        <td>
                            <a target="_blank" href="<?php echo base_url() ?>uploads/<?php echo $row->siswa_file_kk; ?>">Lihat</a> &nbsp;|&nbsp;
                            <a href="<?php echo base_url() ?>admin/delete_file/<?php echo $row->siswa_id; ?>?type=kk" class="swal">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                    <?php if( $row->siswa_file_akte == '' ){ ?>
                    <tr>
                        <td>
                            <label>Akte Kelahiran</label>
                            <form action="<?php echo base_url(); ?>admin/upload_file/<?php echo $row->siswa_id ?>?type=akte" method="post" enctype="multipart/form-data">
                                <input type="file" name="siswa_file_akte" class="form-control-file" onchange="return validasifile(this)" required="">
                                <small>(Ukuran Maximal 1 Mb Format JPG/PNG)</small>
                                <br>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </td>
                    </tr>
                    <?php }else{ ?>
                    <tr class="bg-light">
                        <td>Akte Kelahiran</td>
                        <td>:</td>
                        <td>
                            <a target="_blank" href="<?php echo base_url() ?>uploads/<?php echo $row->siswa_file_akte; ?>">Lihat</a> &nbsp;|&nbsp;
                            <a href="<?php echo base_url() ?>admin/delete_file/<?php echo $row->siswa_id; ?>?type=akte" class="swal">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                    <?php if( $row->siswa_file_ijazah == '' ){ ?>
                    <tr>
                        <td>
                            <label>Ijazah</label>
                            <form action="<?php echo base_url(); ?>admin/upload_file/<?php echo $row->siswa_id ?>?type=ijazah" method="post" enctype="multipart/form-data">
                                <input id="file" type="file" name="siswa_file_ijazah" class="form-control-file" onchange="return validasifile(this)" required="">
                                <small>(Ukuran Maximal 1 Mb Format JPG/PNG)</small>
                                <br>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </td>
                    </tr>
                    <?php }else{ ?>
                    <tr class="bg-light">
                        <td>Ijazah</td>
                        <td>:</td>
                        <td>
                            <a target="_blank" href="<?php echo base_url() ?>uploads/<?php echo $row->siswa_file_ijazah; ?>">Lihat</a> &nbsp;|&nbsp;
                            <a href="<?php echo base_url() ?>admin/delete_file/<?php echo $row->siswa_id; ?>?type=ijazah" class="swal">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
               </div>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
<script type="text/javascript">
        function __alert(type,msg) {
            swal({
              title:"Perhatian !",
              text :msg,
              type :type,
              confirmButtonClass:"btn btn-success",
              cancelButtonClass :"btn btn-danger m-l-10"
          })
        }
        function validasifile(inputFile){
            var pathFile = inputFile.value;
            var ekstensiOk = /(\.jpg|\.jpeg|\.png)$/i;
            var sizeOk = inputFile.files[0].size;
            if(!ekstensiOk.exec(pathFile)){
                __alert("warning","Maaf! File yang kamu pilih bukan gambar, Silahkan pilih lagi!");
                inputFile.value = '';
                return false;
            }else if(sizeOk > 1000000){
                __alert("warning","Maaf! Ukuran File yang kamu pilih terlalu besar, Silahkan pilih lagi usahakan kurang atau sama dengan 1 megabyte");
                inputFile.value = '';
                return false;
            }else{
                __alert("success","OK! Kamu memilih file yang sesuai, Silahkan melanjutkan");
                //Pratinjau gambar
                // if (inputFile.files && inputFile.files[0]) {
                //     var reader = new FileReader();
                //     reader.onload = function(e) {
                //         document.getElementById('pratinjauGambar').innerHTML = '<img src="'+e.target.result+'" width="200px"/>';
                //     };
                //     reader.readAsDataURL(inputFile.files[0]);
                // }
            }
        }
</script>