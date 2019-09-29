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
                    <form action="<?php echo base_url(); ?>admin/update_profil" method="POST">
                      <table class="table table-light text-dark" id="dataTable" width="100%" cellspacing="0">
                        <tbody>
                            <tr>
                                <td>Username</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" name="username" value="<?php echo $row->admin_username; ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Password Baru</td>
                                <td>:</td>
                                <td>
                                    <input type="password" class="form-control" name="password">
                                    <p class="text-muted">Kosongi bila tidak ingin menganti</p>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><button type="submit" class="btn btn-primary">Simpan</button></td>
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