<?php $row = $query_siswa->row(); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

     <!-- Page Heading -->
  <div class="d-sm-flex mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title; ?>
    </h1>
  </div>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
               <h4>Data Pribadi</h4><hr>
               <div class="table-responsive">
                  <?php echo form_open_multipart('admin/update_bio/'.$row->siswa_id); ?>
                  <table class="table table-light text-dark" id="dataTable" width="100%" cellspacing="0">
                    <tbody>
                        <tr>
                            <td>Nomor KK.</td>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="siswa_no_kk" value="<?php echo $row->siswa_no_kk; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>NISN</td>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="siswa_no_nisn" value="<?php echo $row->siswa_no_nisn; ?>"></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="siswa_no_nik" value="<?php echo $row->siswa_no_nik; ?>"></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="siswa_nama" value="<?php echo $row->siswa_nama; ?>"></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>
                            	<input type="radio" name="siswa_jenis_kelamin" value="Laki-Laki" <?php echo ($row->siswa_jenis_kelamin == 'Laki-Laki')? 'checked' : '';?>> Laki-Laki
			            		<input type="radio" name="siswa_jenis_kelamin" value="Perempuan" <?php echo ($row->siswa_jenis_kelamin == 'Perempuan')? 'checked' : '';?>> Perempuan
                        </tr>
                        <tr>
                            <td>Tempat, Tanggal Lahir</td>
                            <td>:</td>
                            <td>
                            	<div class="row">
						        	<div class="col-6">
						        		<input type="text" class="form-control" name="siswa_tempat_lahir" value="<?php echo $row->siswa_tempat_lahir; ?>">
						        	</div>
						        	<div class="col-6">
						        		<input id="dtp" class="form-control" name="siswa_tanggal_lahir" value="<?php echo $row->siswa_tanggal_lahir; ?>">
						        	</div>
						        </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Anak Ke -</td>
                            <td>:</td>
                            <td>
                            	<input type="text"  class="form-control" name="siswa_anak_ke" value="<?php echo $row->siswa_anak_ke; ?>" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Saudara</td>
                            <td>:</td>
                            <td>
                            	<input type="text"  class="form-control" name="siswa_jumlah_saudara" value="<?php echo $row->siswa_jumlah_saudara; ?>" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
                            </td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td>:</td>
                            <td>
                            	<input type="radio" class="negara" name="siswa_kewarganegaraan" value="WNI" <?php echo ($row->siswa_kewarganegaraan == 'WNI')? 'checked' : '';?>> WNI
			            		<input type="radio" class="negara" name="siswa_kewarganegaraan" value="WNA" <?php echo ($row->siswa_kewarganegaraan == 'WNA')? 'checked' : '';?>> WNA
			            		<input type="text" maxlength="45" class="form-control" id="negara" placeholder="Negara Asal" name="siswa_isi_kewarganegaraan">
                            </td>
                        </tr>
                        <tr>
                            <td>Biaya Ditanggung</td>
                            <td>:</td>
                            <td>
                            	<input type="radio" class="biaya" name="siswa_penanggung_biaya" value="Sendiri" <?php echo ($row->siswa_penanggung_biaya == 'Sendiri')? 'checked' : '';?>> Sendiri
                            	<input type="radio" class="biaya" name="siswa_penanggung_biaya" value="Orang Tua" <?php echo ($row->siswa_penanggung_biaya == 'Orang Tua')? 'checked' : '';?>> Orang Tua
                            	<input type="radio" class="biaya" name="siswa_penanggung_biaya" value="Orang Lain" <?php echo ($row->siswa_penanggung_biaya == 'Orang Lain')? 'checked' : '';?>> Orang Lain
                            	<input type="text" maxlength="50" class="form-control" id="biaya" placeholder="Sebutkan" name="siswa_isi_penanggung_biaya">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><button type="submit" class="btn btn-primary"><i class="fa fa-sync"></i> Perbarui</button></td>
                        </tr>
                    </tbody>
                  </table>
                  </form>
               </div>
        </div>

      </div>
    </div>
  </div>

</div>

<script type="text/javascript" src="<?php echo base_url(); ?>dist/date/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>dist/date/jquery-ui.css">
<script>

		$(function(){
	        $("#dtp").datepicker({
	         dateFormat:'yy-mm-dd',
	         changeMonth: true,
	         changeYear: true,
	         yearRange:'1945:'+(new Date).getFullYear()
		    });

	        $("#negara").css("display","none"); 
			$(".negara").click(function(){ 
				if ($("input[name='siswa_kewarganegaraan']:checked").val() == "WNA" ) {
				$("#negara").slideDown("fast");
				} else {
				$("#negara").slideUp("fast"); 
				}
			});

			$("#biaya").css("display","none"); 
			$(".biaya").click(function(){ 
				if ($("input[name='siswa_penanggung_biaya']:checked").val() == "Orang Lain" ) {
				$("#biaya").slideDown("fast");
				} else {
				$("#biaya").slideUp("fast"); 
				}
			});

			$("#asalsekolah").css("display","none"); 
			$(".asalsekolah").click(function(){ 
				if ($("input[name='siswa_asal_sekolah']:checked").val() == "Lainnya" ) {
				$("#asalsekolah").slideDown("fast");
				} else {
				$("#asalsekolah").slideUp("fast"); 
				}
			});

			$("select[name=siswa_pilihan_pendidikan]").on("change", function(){
				if ( $(this).val() == "PONDOK" ) {
					$(".pilih-pondok").css('display', 'none');
				}else{
					$(".pilih-pondok").css('display', 'block');

				}
			})
	    });
	</script>