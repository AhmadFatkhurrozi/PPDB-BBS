<?php $row = $this->db->get('admin')->row(); ?>
<div class="container-fluid">
  <?php echo $this->session->flashdata('msg'); ?>
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title; ?>
    </h1>
    
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <div class="table-responsive">
                    <form action="<?php echo base_url(); ?>admin/export_pendaftar" method="POST">
                      <table class="table">
                        <tbody>
                            <tr>
                                <td>Unit Pendaftar</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="unit" required="">
                                      <option value="">--Pilih--</option>
                                      <option value="PONDOK">Pondok</option>
                                      <option value="RA">RA</option>
                                      <option value="MI">MI</option>
                                      <option value="MTs">MTs</option>
                                      <option value="MA">MA</option>
                                      <option value="STIES">STIES</option>
                                    </select>
                                </td>
                            </tr>
                            <tr id="pondok">
                                <td>Pemilih Pondok?</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="pondok">
                                      <option value="ya">Ya</option>
                                      <option value="tidak">Tidak</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Status Pendaftar</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="status" required="">
                                      <option value="">--Pilih--</option>
                                      <option value="baru">Baru</option>
                                      <option value="tervalidasi">Tervalidasi</option>
                                    </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Tahun Daftar</td>
                                <td>:</td>
                                <td>
                                    <input type="number" class="form-control" name="tahun" placeholder="Tahun Daftar" required="">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><button type="submit" class="btn btn-primary">Export</button></td>
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

<script type="text/javascript">
  jQuery(function(){
    jQuery("select[name=unit]").on("change", function(){
      if( jQuery(this).val() == 'PONDOK' ){
        jQuery("#pondok").hide();
      }else{
        jQuery("#pondok").show();
      }
    })
  })
</script>