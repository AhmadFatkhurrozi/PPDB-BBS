<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title; ?></h1>
    <form action="" method="post" class="ml-5">
      <div class="input-group">
        <input type="text" class="form-control" name="tahun" value="<?php echo $tahun; ?>" required="" placeholder="Tahun pendaftaran">
        <button type="submit" class="btn btn-primary ml-2"><i class="fa fa-search"></i> Filter</button>
      </div>
    </form>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-4 mb-4">
      <div class="card border-left-info shadow">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pondok Saja</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h1 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $this->Model_dashboard->siswa_tervalidasi('PONDOK', $tahun ) ?></div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-3x mb-3 text-gray-300"></i><br>
              <a href="" class="btn btn-light btn-sm">Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-4 col-md-4 mb-4">
      <div class="card border-left-success shadow">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">RA</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h1 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $this->Model_dashboard->siswa_tervalidasi('RA', $tahun ) ?></div>
                </div>
              </div>
            </div>
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">+ Pondok</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h1 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $this->Model_dashboard->siswa_tervalidasi_plus_pondok('RA', $tahun ) ?></div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-3x mb-3 text-gray-300"></i><br>
              <a href="" class="btn btn-light btn-sm">Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-4 mb-4">
      <div class="card border-left-info shadow">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">MI</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h1 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $this->Model_dashboard->siswa_tervalidasi('MI', $tahun ) ?></div>
                </div>
              </div>
            </div>
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">+ Pondok</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h1 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $this->Model_dashboard->siswa_tervalidasi_plus_pondok('MI', $tahun ) ?></div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-3x mb-3 text-gray-300"></i><br>
              <a href="" class="btn btn-light btn-sm">Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="row">

    <!-- Pending Requests Card Example -->
    <div class="col-xl-4 col-md-4 mb-4">
      <div class="card border-left-success shadow">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">MTs</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h1 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $this->Model_dashboard->siswa_tervalidasi('MTs', $tahun ) ?></div>
                </div>
              </div>
            </div>
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">+ Pondok</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h1 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $this->Model_dashboard->siswa_tervalidasi_plus_pondok('MTs', $tahun ) ?></div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-3x mb-3 text-gray-300"></i><br>
              <a href="" class="btn btn-light btn-sm">Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-4 mb-4">
      <div class="card border-left-info shadow">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">MA</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h1 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $this->Model_dashboard->siswa_tervalidasi('MA', $tahun ) ?></div>
                </div>
              </div>
            </div>
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">+ Pondok</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h1 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $this->Model_dashboard->siswa_tervalidasi_plus_pondok('MA', $tahun ) ?></div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-3x mb-3 text-gray-300"></i><br>
              <a href="" class="btn btn-light btn-sm">Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-4 col-md-4 mb-4">
      <div class="card border-left-success shadow">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">STIES</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h1 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $this->Model_dashboard->siswa_tervalidasi('STIES', $tahun ) ?></div>
                </div>
              </div>
            </div>
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">+ Pondok</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h1 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $this->Model_dashboard->siswa_tervalidasi_plus_pondok('STIES', $tahun ) ?></div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-3x mb-3 text-gray-300"></i><br>
              <a href="" class="btn btn-light btn-sm">Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>


    
  </div>

  <!-- Content Row -->

</div>