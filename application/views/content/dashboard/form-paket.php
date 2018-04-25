<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add Paket
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="<?php echo base_url('dashboard/paket'); ?>"> Paket</a></li>
      <li class="active">paket</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->
    <div class="row">
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box box-primary">
              <div class="box-header">

              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <form class="form-horizontal" method="POST" action="<?php echo base_url('dashboard/savePaket'); ?>">
                  <div class="form-group">
                    <label for="nama_paket" class="col-sm-2 control-label">Nama Paket</label>
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control" id="id_paket" name="id_paket" value="<?php echo $id_paket; ?>">
                      <input type="hidden" class="form-control" id="author" name="author" value="<?php echo $this->session->userdata('name'); ?>">
                      <input type="text" class="form-control" id="nama_paket" name="nama_paket" value="<?php echo $nama_paket; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="detail" class="col-sm-2 control-label">Detail</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="detail" name="detail" value="<?php echo $detail; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="harga" class="col-sm-2 control-label">Harga</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $harga; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
