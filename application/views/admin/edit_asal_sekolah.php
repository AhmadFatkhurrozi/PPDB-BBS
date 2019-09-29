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
               <h4>Data Asal Sekolah</h4><hr>
               <div class="table-responsive">
                  <?php echo form_open_multipart('admin/update_asal_sekolah/'.$row->siswa_id); ?>
                  <table class="table table-light text-dark" id="dataTable" width="100%" cellspacing="0">
                    <tbody>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td>:</td>
                            <td>
                                <input type="radio" class="asalsekolah" name="siswa_asal_sekolah" value="TK/RA" <?php echo ($row->siswa_asal_sekolah == 'TK/RA')? 'checked' : '';?>> TK/RA
                                <input type="radio" class="asalsekolah" name="siswa_asal_sekolah" value="SD/MI" <?php echo ($row->siswa_asal_sekolah == 'SD/MI')? 'checked' : '';?>> SD/MI
                                <input type="radio" class="asalsekolah" name="siswa_asal_sekolah" value="SMP/SLTP/MTs" <?php echo ($row->siswa_asal_sekolah == 'SMP/SLTP/MTs')? 'checked' : '';?>> SMP/SLTP/MTs
                                <input type="radio" class="asalsekolah" name="siswa_asal_sekolah" value="MA/SMA/SMK" <?php echo ($row->siswa_asal_sekolah == 'MA/SMA/SMK')? 'checked' : '';?>> MA/SMA/SMK
                                <input type="radio" class="asalsekolah" name="siswa_asal_sekolah" value="Lainnya" <?php echo ($row->siswa_asal_sekolah == 'Lainnya')? 'checked' : '';?>> Lainnya

                                <input type="text" class="form-control" id="asalsekolah" placeholder="Sebutkan" name="siswa_isi_asal_sekolah">
                            </td>
                        </tr>
                        <tr>
                            <td>Status Sekolah</td>
                            <td>:</td>
                            <td>
                                <input type="radio" name="siswa_status_asal_sekolah" value="Negeri" <?php echo ($row->siswa_status_asal_sekolah == 'Negeri')? 'checked' : '';?>> Negeri
                                <input type="radio" name="siswa_status_asal_sekolah" value="Swasta" <?php echo ($row->siswa_status_asal_sekolah == 'Swasta')? 'checked' : '';?>> Swasta
                        </tr>
                        <tr>
                            <td>Nama Sekolah</td>
                            <td>:</td>
                            <td>
                                <input type="text" maxlength="90" class="form-control" name="siswa_nama_asal_sekolah" value="<?php echo $row->siswa_nama_asal_sekolah; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat Asal Sekolah</td>
                            <td>:</td>
                            <td>
                                <div class="row">
                                    <div class="col-12">
                                        <textarea name="siswa_alamat_asal_sekolah" class="form-control" rows="3"><?php echo $row->siswa_alamat_asal_sekolah; ?></textarea>
                                    </div>
                                </div> 
                            </td>
                        </tr>
                        <tr>
                            <td>No Telp</td>
                            <td>:</td>
                            <td>
                                <input type="text"  class="form-control" value="<?php echo $row->siswa_telp_asal_sekolah; ?>" name="siswa_telp_asal_sekolah" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />  
                            </td>
                        </tr>
                        <tr>
                            <td>No NPSN</td>
                            <td>:</td>
                            <td>
                                <input type="text"  class="form-control" value="<?php echo $row->siswa_npsn_asal_sekolah; ?>" name="siswa_npsn_asal_sekolah" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />  
                            </td>
                        </tr>
                        <tr>
                            <td>No Seri Ijazah</td>
                            <td>:</td>
                            <td>
                                <input type="text"  class="form-control" value="<?php echo $row->siswa_no_ijazah; ?>" name="siswa_no_ijazah">
                            </td>
                        </tr>
                        <tr>
                            <td>Tahun Ijazah</td>
                            <td>:</td>
                            <td>
                                <input type="text"  class="form-control" value="<?php echo $row->siswa_th_ijazah; ?>" name="siswa_th_ijazah" maxlength="4" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
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