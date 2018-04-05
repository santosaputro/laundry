<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Users
      <small><a href="<?php echo base_url('dashboard/addUpdateUser'); ?>" class="btn btn-primary">Add User</a></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">users</li>
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
                <table id="DataTables" class="table table-hover table-striped">
                  <thead>
                    <td>No</td>
                    <td>Name</td>
                    <td>Last Modified</td>
                    <td>Option</td>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($user as $data) : ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data->name; ?></td>
                      <td><?php echo $data->last_update; ?></td>
                      <td>
                        <a href="<?php echo base_url('dashboard/addUpdateUser/'.$data->id_user) ?>" class="btn btn-success">Edit <i class="ion-edit"></i></a>
                        <a href="<?php echo base_url('dashboard/deleteUser/'.$data->id_user) ?>" class="btn btn-warning" onclick="return confirm('Are you sure you want to delete <?php echo strtoupper($data->name); ?> ?');">Hapus <i class="ion-trash-a"></i></a>
                      </td>
                    </tr>
                  <?php endforeach ?>
                  </tbody>
                </table>
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
