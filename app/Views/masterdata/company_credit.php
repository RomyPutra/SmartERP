<?php echo view('partial/header'); ?>
<?php echo view('partial/top_menu'); ?>
<?php echo view('partial/side_menu'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<?php if (isset($company)) { ?>
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <div class="container-fluid">
	        <div class="row mb-2">
	          <div class="col-sm-6">
	            <h1>Create Company</h1>
	          </div>
	          <div class="col-sm-6">
	            <ol class="breadcrumb float-sm-right">
	              <li class="breadcrumb-item"><a href="#">Home</a></li>
	              <li class="breadcrumb-item active">Create Company</li>
	            </ol>
	          </div>
	        </div>
	      </div><!-- /.container-fluid -->
	    </section>

	    <!-- Main content -->
	    <section class="content">
	        <div class="container-fluid">
	            <div class="row">
	                <div class="col-md-12">
			            <form action="<?php echo base_url('company/update'); ?>" method="post">
			              <div class="card">
			                <div class="card-body">
			                  <?php 
			                  $inputs = session()->getFlashdata('inputs');
			                  $errors = session()->getFlashdata('errors');
			                  if(!empty($errors)){ ?>
			                  <div class="alert alert-danger" role="alert">
			                    Whoops! Ada kesalahan saat input data, yaitu:
			                    <ul>
			                    <?php foreach ($errors as $error) : ?>
			                        <li><?= esc($error) ?></li>
			                    <?php endforeach ?>
			                    </ul>
			                  </div>
			                  <?php } ?>

		                      <input type="hidden" class="form-control" name="internalid" placeholder="" value="<?php echo $company == null ? '' : $company['InternalID']; ?>">
			                  <div class="form-group">
			                      <label for="">Nama Perusahaan</label>
			                      <input type="text" class="form-control" name="companyname" placeholder="" value="<?php echo $company == null ? '' : $company['CompanyName']; ?>">
			                  </div>
			                  <div class="form-group">
			                      <label for="">Initial Perusahaan</label>
			                      <input type="text" class="form-control" name="initial" placeholder="" value="<?php echo $company == null ? '' : $company['CompanyID']; ?>">
			                  </div>
			                  <div class="form-group">
			                      <label for="">Nama Pengguna</label>
			                      <input type="text" class="form-control" name="username" placeholder="" value="<?php echo $company == null ? '' : $company['UserName']; ?>">
			                  </div>
			                </div>
			                <div class="card-footer">
			                    <a href="<?php echo base_url('company'); ?>" class="btn btn-outline-info">Back</a>
			                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
			                </div>
			              </div>
			            </form>
	                </div>
	            </div>

	        </div>
	    </section>
	    <!-- /.content -->
  	<?php } else { ?>
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <div class="container-fluid">
	        <div class="row mb-2">
	          <div class="col-sm-6">
	            <h1>Create Company</h1>
	          </div>
	          <div class="col-sm-6">
	            <ol class="breadcrumb float-sm-right">
	              <li class="breadcrumb-item"><a href="#">Home</a></li>
	              <li class="breadcrumb-item active">Create Company</li>
	            </ol>
	          </div>
	        </div>
	      </div><!-- /.container-fluid -->
	    </section>

	    <!-- Main content -->
	    <section class="content">
	        <div class="container-fluid">
	            <div class="row">
	                <div class="col-md-12">
			            <form action="<?php echo base_url('company/store'); ?>" method="post">
			              <div class="card">
			                <div class="card-body">
			                  <?php 
			                  $inputs = session()->getFlashdata('inputs');
			                  $errors = session()->getFlashdata('errors');
			                  if(!empty($errors)){ ?>
			                  <div class="alert alert-danger" role="alert">
			                    Whoops! Ada kesalahan saat input data, yaitu:
			                    <ul>
			                    <?php foreach ($errors as $error) : ?>
			                        <li><?= esc($error) ?></li>
			                    <?php endforeach ?>
			                    </ul>
			                  </div>
			                  <?php } ?>

			                  <div class="form-group">
			                      <label for="">Nama Perusahaan</label>
			                      <input type="text" class="form-control" name="companyname" placeholder="" value="<?php echo $inputs == null ? '' : $inputs['companyname']; ?>">
			                  </div>
			                  <div class="form-group">
			                      <label for="">Initial Perusahaan</label>
			                      <input type="text" class="form-control" name="initial" placeholder="" value="<?php echo $inputs == null ? '' : $inputs['initial']; ?>">
			                  </div>
			                  <div class="form-group">
			                      <label for="">Nama Pengguna</label>
			                      <input type="text" class="form-control" name="username" placeholder="" value="<?php echo $inputs == null ? '' : $inputs['username']; ?>">
			                  </div>
			                </div>
			                <div class="card-footer">
			                    <a href="<?php echo base_url('company'); ?>" class="btn btn-outline-info">Back</a>
			                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
			                </div>
			              </div>
			            </form>
	                </div>
	            </div>

	        </div>
	    </section>
	    <!-- /.content -->
  	<?php } ?>
  </div>
  <!-- /.content-wrapper -->
<?php echo view('partial/footer'); ?>
