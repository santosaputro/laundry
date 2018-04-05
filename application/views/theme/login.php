<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 4.0.0 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('theme/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css'); ?> ">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('theme/AdminLTE/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('theme/AdminLTE/dist/css/AdminLTE.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('theme/AdminLTE/plugins/iCheck/square/blue.css'); ?>">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- jQuery 3 -->
  <script src="<?php echo base_url('theme/AdminLTE/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html">Simple Clean<b> Laundry</b></a>
  </div>

  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to Admin</p>

    <form action="<?php echo base_url('user/protect/login'); ?>" method="POST">
      <?php
        echo "<div style='color: red;'>".$this->session->flashdata('error_message')."</div><br>";
        if (isset($logout_message)) {
          echo "<div style='color: green;'>".$logout_message."</div><br>";
        }
      ?>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username" id="username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="form-group">
      <div class="col-md-12 control">
          <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
            <a href="<?php echo base_url(); ?>"><i class="fa fa-long-arrow-left"></i> Back to home</a>
          </div>
      </div>
    </div>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('theme/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('theme/AdminLTE/plugins/iCheck/icheck.min.js'); ?>"></script>
</body>
</html>
