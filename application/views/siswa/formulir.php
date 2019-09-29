<div class="container" style="padding-top: 50px;">
	<center>
		<img src="<?=base_url()?>dist/img/logo.png" class="img-fluid" style="width: 400px;">
		<p class="text-muted">Telp. (0321) 489009 - 081231919636 - 085655419681 - 085109132700</p>
	</center>
	<div class="box">
		<div class="row bg-white" style="padding-top: 20px;">
			<div class="col-md-12 text-center">
				<h2 class="text-success" style="font-weight: 900;margin-bottom: 50px;">Formulir Pendaftaran Siswa Baru</h2>
			</div>
			<div class="col-12">
				<p>Sudah pernah mendaftar? <a href="<?php echo base_url() ?>home/check">Periksa pendaftaran.</a></p>
			</div>
		</div>
		<form action="<?php echo base_url() ?>home/registrasi" method="POST" enctype="multipart/form-data">

			<div class="row bg-white">
				<div class="col-12">
					<?php echo $this->session->flashdata('msg'); ?>
				</div>
				<div class="col-md-6">
					<div class="form-title bg-dark text-white"><i class="ti-plus"></i> Pilihan Pendidikan</div>
					<div class="form-group">
						<label>Pilihan Pendidikan</label>
						<select class="form-control" name="siswa_pilihan_pendidikan" required="">
							<option value="">---Pilih Pendidikan---</option>
							<option value="PONDOK">Pondok</option>
							<option value="RA">RA</option>
							<option value="MI">MI</option>
							<option value="MTs">MTs</option>
							<option value="MA">MA</option>
							<option value="STIES">STIES</option>
						</select>
					</div>
					<div class="form-group pilih-pondok">
						<label>Pilih Pondok?</label><br>
						<input type="radio" name="siswa_pilih_pondok" value="ya" checked=""> Ya
						<input type="radio" name="siswa_pilih_pondok" value="tidak"> Tidak
					</div>
					<div class="form-title bg-dark text-white"><i class="ti-plus"></i> Data Pribadi</div>
					<div class="form-group">
						<label>No. KK</label>
						<input type="text" maxlength="27" name="siswa_no_kk" class="form-control" placeholder="Nomor KK" required="" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
					</div>
					<div class="form-group">
						<label>NISN <small class="text-danger">Opsional</small></label>
						<input type="text" maxlength="27" name="siswa_no_nisn" class="form-control" placeholder="NISN" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
					</div>
					<div class="form-group">
						<label>NIK Siswa</label>
						<input type="text" maxlength="27" name="siswa_no_nik" class="form-control" placeholder="NIK Siswa" required="" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
					</div>
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" maxlength="95"  class="form-control" placeholder="Nama Lengkap Sesuai Ijazah" name="siswa_nama" required="">
					</div>
					<div class="form-group">
				        <label>Tempat Tanggal Lahir</label>
				        <div class="row">
				        	<div class="col-6">
				        		<input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="siswa_tempat_lahir">
				        	</div>
				        	<div class="col-6">
				        		<input id="dtp" class="form-control" name="siswa_tanggal_lahir" placeholder="Tanggal Lahir" required="">
				        	</div>
				        </div>
			      	</div>
			      	<div class="form-group">
						<label>Anak Ke </label>
						<div class="row">
							<div class="col-6">
								<input type="text"  class="form-control" placeholder="Anak Ke-" name="siswa_anak_ke" required="" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
							</div>
							<div class="col-6">
								<input type="text"  class="form-control" placeholder="Jumlah Saudara" name="siswa_jumlah_saudara" required="" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
							</div>
						</div>
					</div>
					<div class="form-group">
			          <label class="radio-inline"> Jenis Kelamin <br>
			            <input type="radio" checked="" name="siswa_jenis_kelamin" value="Laki-Laki"> Laki-laki
			            <input type="radio" name="siswa_jenis_kelamin" value="Perempuan"> Perempuan
			          </label>
				    </div>
				    <div class="form-group">
			          <label class="radio-inline"> Kewarganegaraan <br>
			            <input type="radio" checked="" class="negara" name="siswa_kewarganegaraan" value="WNI"> WNI
			            <input type="radio" class="negara" name="siswa_kewarganegaraan" value="WNA"> WNA
			          </label>
			          <input type="text" maxlength="45" class="form-control" id="negara" placeholder="Negara Asal" name="siswa_isi_kewarganegaraan">
				    </div>
				    <div class="form-group">
			          <label class="radio-inline"> Biaya Ditanggung <br>
			            <input type="radio" checked="" class="biaya" name="siswa_penanggung_biaya" value="Sendiri"> Sendiri
			            <input type="radio" class="biaya" name="siswa_penanggung_biaya" value="Orang Tua"> Orang Tua
			            <input type="radio" class="biaya" name="siswa_penanggung_biaya" value="Orang Lain"> Orang Lain
			          </label>
			          <input type="text" maxlength="50" class="form-control" id="biaya" placeholder="Sebutkan" name="siswa_isi_penanggung_biaya">
				    </div>
				    <div class="form-title bg-dark text-white"><i class="ti-plus"></i> Asal Sekolah</div>
					<div class="form-group">
						<label class="radio-inline"> Asal Sekolah <small class="text-danger">Opsional</small> <br>
				            <input type="radio" class="asalsekolah" name="siswa_asal_sekolah" value="TK/RA"> TK/RA
				            <input type="radio" class="asalsekolah" name="siswa_asal_sekolah" value="SD/MI"> SD/MI
				            <input type="radio" class="asalsekolah" name="siswa_asal_sekolah" value="SMP/SLTP/MTs"> SMP/SLTP/MTs
				            <input type="radio" class="asalsekolah" name="siswa_asal_sekolah" value="MA/SMA/SMK"> MA/SMA/SMK
				            <input type="radio" class="asalsekolah" name="siswa_asal_sekolah" value="Lainnya"> Lainnya
				          </label>
				        <input type="text" class="form-control" id="asalsekolah" placeholder="Sebutkan" name="siswa_isi_asal_sekolah">
					</div>
					<div class="form-group">
						<label class="radio-inline"> Status Sekolah <small class="text-danger">Opsional</small><br>
				            <input type="radio" name="siswa_status_asal_sekolah" value="Negeri"> Negeri
				            <input type="radio" name="siswa_status_asal_sekolah" value="Swasta"> Swasta
				        </label>
				    </div>
				    <div class="form-group">
						<label>Nama Lengkap Sekolah <small class="text-danger">Opsional</small></label>
						<input type="text" maxlength="90" class="form-control" placeholder="Nama Lengkap Sekolah" name="siswa_nama_asal_sekolah">
					</div>
					<div class="form-group">
				        <label>Alamat Asal Sekolah</label>
				        <div class="row">
				        	<div class="col-12">
				        		<textarea name="siswa_alamat_asal_sekolah" class="form-control" rows="3" placeholder="masukkan alamat asal sekolah"></textarea>
				        	</div>
				        </div> 
			      	</div>
					<div class="form-group">
						<label>No. Telp <small class="text-danger">Opsional</small></label>
						<input type="text"  class="form-control" placeholder="Opsional" name="siswa_telp_asal_sekolah" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />  
					</div>
					<div class="form-group">
						<label>NPSN <small class="text-danger">Opsional</small></label>
						<input type="text"  class="form-control" placeholder="NPSN" name="siswa_npsn_asal_sekolah" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />  
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-6">

								<label>Ijazah <small class="text-danger">Opsional</small></label><br>
								<input type="text"  class="form-control" placeholder="Nomor Seri Ijazah" name="siswa_no_ijazah">
							</div>
							<div class="col-6">
								<label>Tahun Terbit Ijazah <small class="text-danger">Opsional</small></label>
								<input type="text"  class="form-control" placeholder="Tahun Ijazah" name="siswa_th_ijazah" maxlength="4" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-title bg-dark text-white"><i class="ti-plus"></i> Data Orang Tua</div>
					<div class="form-group">
						<label>NIK Ayah</label>
						<input type="text" maxlength="27" name="siswa_nik" class="form-control" placeholder="NIK Ayah" required="" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
					</div>
					<div class="form-group">
						<label>Nama Ayah</label>
						<input type="text"  class="form-control" name="siswa_nama_ayah" placeholder="Nama Ayah" required="">
					</div>
					<div class="form-group">
				        <label>Agama Ayah</label>
				        <select class="form-control" name="siswa_agama_ayah" required="">
				          <option value="" disabled selected>---Pilih Agama Ayah---</option>
				          <option value="Islam">Islam</option>
				          <option value="Kristen">Kristen</option>
				          <option value="Katolik">Katolik</option>
				          <option value="Hindu">Hindu</option>
				          <option value="Budha">Budha</option>
				          <option value="Kong Hu Cu">Kong Hu Cu</option>
				        </select>
				    </div>
				    <div class="form-group">
						<label>NIK Ibu</label>
						<input type="text" maxlength="27" name="siswa_nik2" class="form-control" placeholder="NIK Ibu" required="" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
					</div>
					<div class="form-group">
						<label>Nama Ibu</label>
						<input type="text"  class="form-control" name="siswa_nama_ibu" placeholder="Nama Ibu" required="">
					</div>
					<div class="form-group">
				        <label>Agama Ibu</label>
				        <select class="form-control" name="siswa_agama_ibu" required="">
				          <option value="" disabled selected>---Pilih Agama Ibu---</option>
				          <option value="Islam">Islam</option>
				          <option value="Kristen">Kristen</option>
				          <option value="Katolik">Katolik</option>
				          <option value="Hindu">Hindu</option>
				          <option value="Budha">Budha</option>
				          <option value="Kong Hu Cu">Kong Hu Cu</option>
				        </select>
				    </div>
					<div class="form-group">
				        <label>Pekerjaan Ayah/ Wali</label>
				        <select class="form-control" name="siswa_pekerjaan_wali" required="">
				          <option value="" disabled selected>---Pilih Pekerjaan Ayah---</option>
				          <option value="Pegawai Negeri">Pegawai Negeri</option>
				          <option value="ABRI">ABRI</option>
				          <option value="Anggota DPR">Anggota DPR</option>
				          <option value="Pegawai Swasta">Pegawai Swasta</option>
				          <option value="Pedagang">Pedagang</option>
				          <option value="Petani">Petani</option>
				          <option value="Pengusaha">Pengusaha</option>
				          <option value="Lain-lain">Lain-lain</option>
				        </select>
			      	</div>
			      	<div class="form-group">
				        <label>Penghasilan Ayah/ Wali per Bulan</label>
				        <select class="form-control" name="siswa_penghasilan_wali" required="">
				          <option value="" disabled selected>---Pilih Penghasilan Ayah---</option>
				          <option value="Kurang Dari 500.000">Kurang Dari 500.000</option>
				          <option value="Lebih Dari 500.000 s/d 1.000.000"> Lebih Dari 500.000 s/d 1.000.000</option>
				          <option value="Lebih Dari 1.000.000 s/d 3.000.000">Lebih Dari 1.000.000 s/d 3.000.000</option>
				          <option value="Lebih Dari 3.000.000 s/d 5.000.000">Lebih Dari 3.000.000 s/d 5.000.000</option>
				          <option value="Lebih Dari 5.000.000">Lebih Dari 5.000.000</option>
				        </select>
			      	</div>
			      	<div class="form-group">
				        <label>Alamat Lengkap</label>
				          
				        <div class="row">
				        	<div class="col-12">
				        		<textarea name="siswa_alamat" class="form-control" rows="5" placeholder="masukkan alamat lengkap" required=""></textarea>
				        	</div>
				        	<div class="col-6">
				        		<input type="text" class="form-control" name="siswa_kode_pos" placeholder="Kode Pos" required="" maxlength="5" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
				        	</div>
				        </div> 
			      	</div>
			      	<div class="form-group">
						<label>No. Telp Orang Tua</label>
						<input type="text"  class="form-control" name="siswa_no_telp" placeholder="No Telp" required="">
					</div>
			      	<div class="form-group">
				        <label>Pendidikan Ayah</label>
				        <select class="form-control" name="siswa_pendidikan_ayah" required="">
				          	<option value="" disabled selected>---Pilih Pendidikan Ayah---</option>
				          	<option value="SD/MI">SD/MI</option>
							<option value="SMP/SLTP/MTs">SMP/SLTP/MTs</option>
							<option value="MA/SMA/SMK">MA/SMA/SMK</option>
							<option value="S1">S1</option>
							<option value="S2">S2</option>
							<option value="S3">S3</option>
				        </select>
				    </div>
				    <div class="form-group">
				        <label>Pendidikan Ibu</label>
				        <select class="form-control" name="siswa_pendidikan_ibu" required="">
				          	<option value="" disabled selected>---Pilih Pendidikan Ibu---</option>
				          	<option value="SD/MI">SD/MI</option>
							<option value="SMP/SLTP/MTs">SMP/SLTP/MTs</option>
							<option value="MA/SMA/SMK">MA/SMA/SMK</option>
							<option value="S1">S1</option>
							<option value="S2">S2</option>
							<option value="S3">S3</option>
				        </select>
				    </div>

				    <br>
				    <div class="alert alert-warning mb-5" style="text-align: justify;">
						<p class="text-center"><b>PERNYATAAN</b></p>
						<input type="checkbox" name="agree" required=""> Saya yang tersebut diatas menyatakan dengan sungguh-sungguh akan menaati segala peraturan yang ada di Yayasan Pondok Pesantren Babussalam Kalibening Mojoagung Jombang Jawa Timur dan apabila dikemudian hari ternyata saya melanggar, maka saya sanggup menerima segala sanksi yang telah ditetapkan oleh Lembaga Pendidikan.
						<p>
							Demikian pernyataan ini saya buat dengan sebenar-benarnya tanpa paksaan siapapun.
						</p>
					</div>
					
					<button type="submit" class="btn btn-primary btn-lg mb-1">Daftar Sekarang</button>
					<a href="<?=base_url()?>home" class="btn btn-success btn-lg mb-1">Kembali</a>
				    	    
				</div>
			</div>
		</form>
	</div>
</div>
    <script type="text/javascript" src="<?php echo base_url(); ?>dist/date/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>dist/date/jquery-ui.css">
    <script type="text/javascript">
	function __sapa(type,msg) {
		swal({
				title:"Selamat Datang!",
				text:"Di Sistem pendaftaran peserta didik baru Yayasan Pondok Pesantren Babussalam<br><br>Jika anda mengalami kesulitan silahkan menghubungi panitia, Trims",
				imageUrl:"<?php echo base_url()?>dist/img/logo.png",
				imageHeight:70,
				animation:!0
			})
	}
</script>
	<script>
		function __alert(type,msg) {
			swal({
              title:"Perhatian !",
              text :msg,
              type :type,
              confirmButtonClass:"btn btn-success",
              cancelButtonClass :"btn btn-danger m-l-10"
          })
		}

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