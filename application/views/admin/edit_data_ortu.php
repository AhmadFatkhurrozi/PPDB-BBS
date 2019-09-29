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
               <h4>Data Orang Tua</h4><hr>
               <div class="table-responsive">
                  <?php echo form_open_multipart('admin/update_data_ortu/'.$row->siswa_id); ?>
                  <table class="table table-light text-dark" id="dataTable" width="100%" cellspacing="0">
                    <tbody>
                        <tr>
                            <td>NIK Ayah</td>
                            <td>:</td>
                            <td>
                                <input type="text" maxlength="27" name="siswa_nik" class="form-control" value="<?php echo $row->siswa_nik; ?>" required="" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
                            </td>
                        </tr>
                    	<tr>
                            <td>Nama Ayah</td>
                            <td>:</td>
                            <td>
                            	<input type="text"  class="form-control" name="siswa_nama_ayah" value="<?php echo $row->siswa_nama_ayah; ?>" required="">
                            </td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>
 								<select class="form-control" name="siswa_agama_ayah" required="">
						          <option value="<?php echo $row->siswa_agama_ayah; ?>"><?php echo $row->siswa_agama_ayah; ?></option>
						          <option value="Islam">Islam</option>
						          <option value="Kristen">Kristen</option>
						          <option value="Katolik">Katolik</option>
						          <option value="Hindu">Hindu</option>
						          <option value="Budha">Budha</option>
						          <option value="Kong Hu Cu">Kong Hu Cu</option>
						        </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>:</td>
                            <td>
                            	<select class="form-control" name="siswa_pendidikan_ayah" required="">
						         	<option value="<?php echo $row->siswa_pendidikan_ayah; ?>"><?php echo $row->siswa_pendidikan_ayah; ?></option>
						          	<option value="SD/MI">SD/MI</option>
									<option value="SMP/SLTP/MTs">SMP/SLTP/MTs</option>
									<option value="MA/SMA/SMK">MA/SMA/SMK</option>
									<option value="S1">S1</option>
									<option value="S2">S2</option>
									<option value="S3">S3</option>
						        </select>
							</td>
                        </tr>
                        <tr>
                            <td>NIK Ibu</td>
                            <td>:</td>
                            <td>
                                <input type="text" maxlength="27" name="siswa_nik2" class="form-control" value="<?php echo $row->siswa_nik2; ?>" required="" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Ibu</td>
                            <td>:</td>
                            <td>
                            	<input type="text" class="form-control" name="siswa_nama_ibu" value="<?php echo $row->siswa_nama_ibu; ?>" required="">
                            </td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>
                            	<select class="form-control" name="siswa_agama_ibu" required="">
						          <option value="<?php echo $row->siswa_agama_ibu; ?>"><?php echo $row->siswa_agama_ibu; ?></option>
						          <option value="Islam">Islam</option>
						          <option value="Kristen">Kristen</option>
						          <option value="Katolik">Katolik</option>
						          <option value="Hindu">Hindu</option>
						          <option value="Budha">Budha</option>
						          <option value="Kong Hu Cu">Kong Hu Cu</option>
						        </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>:</td>
                            <td>
                            	<select class="form-control" name="siswa_pendidikan_ibu" required="">
						          	<option value="<?php echo $row->siswa_pendidikan_ibu; ?>"><?php echo $row->siswa_pendidikan_ibu; ?></option>
						          	<option value="SD/MI">SD/MI</option>
									<option value="SMP/SLTP/MTs">SMP/SLTP/MTs</option>
									<option value="MA/SMA/SMK">MA/SMA/SMK</option>
									<option value="S1">S1</option>
									<option value="S2">S2</option>
									<option value="S3">S3</option>
						        </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Pekerjaan Wali</td>
                            <td>:</td>
                            <td>
                            	<select class="form-control" name="siswa_pekerjaan_wali" required="">
						          <option value="<?php echo $row->siswa_pekerjaan_wali; ?>"><?php echo $row->siswa_pekerjaan_wali; ?></option>
						          <option value="Pegawai Negeri">Pegawai Negeri</option>
						          <option value="ABRI">ABRI</option>
						          <option value="Anggota DPR">Anggota DPR</option>
						          <option value="Pegawai Swasta">Pegawai Swasta</option>
						          <option value="Pedagang">Pedagang</option>
						          <option value="Petani">Petani</option>
						          <option value="Pengusaha">Pengusaha</option>
						          <option value="Lain-lain">Lain-lain</option>
						        </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Penghasilan Wali</td>
                            <td>:</td>
                            <td>
                            	<select class="form-control" name="siswa_penghasilan_wali" required="">
						          <option value="<?php echo $row->siswa_penghasilan_wali; ?>"><?php echo $row->siswa_penghasilan_wali; ?></option>
						          <option value="Kurang Dari 500.000">Kurang Dari 500.000</option>
						          <option value="Lebih Dari 500.000 s/d 1.000.000"> Lebih Dari 500.000 s/d 1.000.000</option>
						          <option value="Lebih Dari 1.000.000 s/d 3.000.000">Lebih Dari 1.000.000 s/d 3.000.000</option>
						          <option value="Lebih Dari 3.000.000 s/d 5.000.000">Lebih Dari 3.000.000 s/d 5.000.000</option>
						          <option value="Lebih Dari 5.000.000">Lebih Dari 5.000.000</option>
						        </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>
                            	<div class="row">
						        	<div class="col-12">
						        		<textarea name="siswa_alamat" class="form-control" rows="5" required=""><?php echo $row->siswa_alamat; ?></textarea>
						        	</div>
				        		</div> 
							</td>
                        </tr>
                        <tr>
                            <td>Kode Pos</td>
                            <td>:</td>
                            <td>
                            	<div class="row">
                            		<div class="col-6">
						        		<input type="text" class="form-control" name="siswa_kode_pos" value="<?php echo $row->siswa_kode_pos; ?>" required="" maxlength="5" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
						        	</div>
                            	</div>
                            </td>
                        </tr>
                        <tr>
                            <td>No Telp</td>
                            <td>:</td>
                            <td>
                            	<input type="text"  class="form-control" name="siswa_no_telp" value="<?php echo $row->siswa_no_telp; ?>" required="">
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