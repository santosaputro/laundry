<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Visi-Misi
      <small><a href="<?php echo base_url('dashboard/addUpdateVisi_misi/1'); ?>" class="btn btn-primary">Edit Visi-Misi</a></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Visi-Misi</li>
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
                <?php foreach ($visi_misi as $data) : ?>
                  <p><?php echo $data->visi_misi; ?></p>
                  <br><br>
                  <span class="label label-danger"><?php echo $data->author; ?></span>
                  <span class="pull-right"><?php echo $data->last_update; ?></span>
                <?php endforeach ?>
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
