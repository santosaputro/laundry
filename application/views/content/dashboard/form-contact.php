<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Contact
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="<?php echo base_url('dashboard/contact'); ?>"> Contact</a></li>
      <li class="active">Edit Contact</li>
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
                <form class="form-horizontal" method="POST" action="<?php echo base_url('dashboard/saveContact'); ?>">
                  <input type="text" id="id_contact" name="id_contact" value="<?php echo $id_contact; ?>">
                  <input type="text" id="author" name="author" value="<?php echo $this->session->userdata('name'); ?>">
                  <textarea id="editor1" name="contact" rows="10" cols="80">
                      <?php echo $contact; ?>
                  </textarea>

                  <div class="form-group">
                    <div class="col-sm-10">
                      <br>
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
