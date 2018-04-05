<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add Users
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="<?php echo base_url('dashboard/users'); ?>"> Users</a></li>
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
                <form class="form-horizontal" method="POST" action="<?php echo base_url('dashboard/saveUsers'); ?>">
                  <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Full Name</label>
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $id_user; ?>">
                      <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>">
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
