<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Simple Clean Laundry - Admin Dashboard</title>

  <!-- ico -->
  <link rel="icon" href="<?php echo base_url('assets/img/ico.jpg'); ?>" type="image/x-icon"/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('theme/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('theme/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('theme/AdminLTE/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('theme/AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('theme/AdminLTE/dist/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('theme/AdminLTE/dist/css/skins/_all-skins.min.css'); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- jQuery 3 -->
  <script src="<?php echo base_url('theme/AdminLTE/bower_components/jquery/dist/jquery.min.js');?>"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">

  <?php $this->load->view('theme/dashboard/header'); ?>

  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('theme/dashboard/left-sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <?php $this->load->view($content); ?>
  <!-- /.content-wrapper -->

  <?php $this->load->view('theme/dashboard/footer'); ?>

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('theme/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('theme/AdminLTE/bower_components/fastclick/lib/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('theme/AdminLTE/dist/js/adminlte.min.js');?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('theme/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('theme/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('theme/AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('theme/AdminLTE/dist/js/demo.js');?>"></script>
<!-- CK Editor -->
<script src="<?php echo base_url('theme/AdminLTE/bower_components/ckeditor/ckeditor.js'); ?>"></script>

<script>
  $(function () {
    $('#DataTables').DataTable()
    CKEDITOR.replace('editor1')
  });
</script>
</body>
</html>
