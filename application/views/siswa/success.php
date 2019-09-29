<?php $row = $query_siswa->row(); ?>
<div class="container" style="padding-top: 50px;">
		<div class="row">
			<div class="col-md-12 text-center">
				<img src="<?=base_url()?>dist/img/logo.png" class="img-fluid" style="width: 400px;">
				<p class="text-muted">Telp. (0321) 489009 - 081231919636 - 085655419681 - 085109132700</p>
			</div>
		</div>
		
		<div class="row bg-light" style="padding: 30px 15px;">
			<div class="col-md-6 offset-md-3 box p-5">
				<h2 class="text-success text-center">Registrasi Berhasil</h2>
				<br>
				<p class="text-danger text-center"><i class="fa fa-bullhorn"></i> Selanjutnya silahkan selesaikan pembayaran administrasi pendaftaran anda</p>
				<p class="text-center">Silahkan simpan <i>sreenshoot</i> informasi akun pendaftaran anda dibawah ini.</p>
				<table class="table table-bordered">
					<tr>
						<td>Kode Pendaftaran</td>
						<td><b><?php echo $row->siswa_kode; ?></b></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><h4 class="text-success"><?php echo $row->siswa_password; ?></h4>
							<!--<small class="text-muted">* Jangan berikan password anda kepada orang lain</small>-->
						</td>
					</tr>
					<tr>
						<td>Nama</td>
						<td> <?php echo $row->siswa_nama; ?></td>
					</tr>
					<tr>
						<td>Tanggal Daftar</td>
						<td> <?php echo date('d-m-Y H:i', strtotime($row->siswa_tanggal_daftar)); ?></td>
					</tr>
					<tr>
						<td>Berkas Yang Harus Disetorkan</td>
						<td><small>
						    <ul>
						        <li>Foto</li>
						        <li>KTP Orang Tua</li>
						        <li>KK</li>
						        <li>NISN</li>
						        <li>Akte Kelahiran</li>
						        <li>Ijazah</li>
						    </ul></small>
						</td>
					</tr>
				</table>
				<p><a href="<?php echo base_url() ?>home/check" target="_blank">Periksa pendaftaran.</a></p>
				<a class="btn btn-success ml-2 mb-1 btn-sm" target="_blank" href="<?php echo site_url('admin/cetak_pdf/').$row->siswa_id; ?>">
                    <i class="fa fa-file-pdf"></i> Cetak Identitas (.pdf)
                </a>
				<a href="<?php echo base_url(); ?>home/formulir" class="btn btn-primary ml-2 mb-1 btn-sm">Kembali</a>
			</div>
		</div>
	</div>