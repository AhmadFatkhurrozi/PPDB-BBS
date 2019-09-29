<?php $row = $this->db->get('setting')->row(); ?>
<div class="container-fluid">
  <?php echo $this->session->flashdata('msg9'); ?>
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
                    <form action="<?php echo base_url(); ?>admin/update_akses" method="POST">
                      <table class="table">
                        <tbody>
                            <tr>
                                <td>Akses Pendaftaran</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="akses">
                                      <option value="<?php echo $row->akses; ?>" disabled selected><?php echo $row->akses; ?></option>
                                      <option value="admin">admin</option>
                                      <option value="siswa">siswa</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><button type="submit" class="btn btn-primary">Update</button></td>
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
