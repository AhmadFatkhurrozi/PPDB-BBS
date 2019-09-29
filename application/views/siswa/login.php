<div class="container" style="padding-top: 50px;">
	<div class="row">
		<div class="col-md-12 text-center">
			<img src="<?=base_url()?>dist/img/logo.png" class="img-fluid" style="width: 400px;">
			<p class="text-muted">Telp. (0321) 489009 - 081231919636 - 085655419681 - 085109132700</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 offset-md-4 bg-light" style="padding-top: 30px;">
			<?php echo $this->session->flashdata('msg'); ?>
			<form action="<?php echo base_url() ?>home/checking" method="POST">
				<div class="form-title bg-dark text-white"><i class="fa fa-key"></i> Masukkan Kode Pendaftaran & Password</div>
				<div class="form-group">
					<input type="kode" class="form-control" placeholder="Kode" name="siswa_kode" required="">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Password" name="siswa_password" required="">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Lihat Status</button>
					<a href="<?php echo base_url()?>home" class="btn btn-success">Kembali</a>
				</div>
			</form><hr>
			<p>Belum punya akun ? <a href="<?php echo base_url(); ?>home/formulir">Daftar sekarang</a></p>
		</div>
	</div>
</div>