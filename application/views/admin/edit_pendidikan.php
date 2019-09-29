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
        	<?php echo form_open_multipart('admin/update_pendidikan/'.$row->siswa_id); ?>
				<div class="form-group">
					<label>Pilihan Pendidikan</label>
					<select class="form-control" name="siswa_pilihan_pendidikan" required="">
						<option value="<?php echo $row->siswa_pilihan_pendidikan; ?>"><?php echo $row->siswa_pilihan_pendidikan; ?></option>
						<option value="PONDOK">Pondok</option>
						<option value="RA">RA</option>
						<option value="MI">MI</option>
						<option value="MTs">MTs</option>
						<option value="MA">MA</option>
						<option value="STIES">STIES</option>
					</select>
				</div>
				<div class="form-group pilih-pondok">
					<label class="radio-inline"> Pilih Pondok? <br>
			            <input type="radio" name="siswa_pilih_pondok" value="ya" <?php echo ($row->siswa_pilihan_pondok == 'ya')? 'checked' : '';?>> ya
			            <input type="radio" name="siswa_pilih_pondok" value="tidak"  <?php echo ($row->siswa_pilihan_pondok == 'tidak')? 'checked' : ''; ?>> tidak
			        </label>
				</div>
				<button type="submit" class="btn btn-primary"><i class="fa fa-sync"></i> Perbarui</button>
			</form>
        </div>

      </div>
    </div>
  </div>

</div>

<script type="text/javascript" src="<?php echo base_url(); ?>dist/date/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>dist/date/jquery-ui.css">

<script>
	$(function(){

			$("select[name=siswa_pilihan_pendidikan]").on("change", function(){
				if ( $(this).val() == "PONDOK" ) {
					$(".pilih-pondok").css('display', 'none');
				}else{
					$(".pilih-pondok").css('display', 'block');

				}
			})
	    });
</script>