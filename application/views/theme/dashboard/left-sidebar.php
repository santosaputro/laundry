<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image" style="color: #fff;">
          <b><h4><?php echo $this->session->userdata('name') ?></h4></b>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
        <!-- <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div> -->
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php echo $menu1; ?>"><a href="<?php echo base_url('dashboard'); ?>"><i class="ion-ios-home-outline text-aqua"></i> &nbsp;&nbsp;<span>Dashboard</span></a></li>
        <li class="<?php echo $menu2; ?>"><a href="<?php echo base_url('dashboard/paket'); ?>"><i class="ion-cash text-aqua"></i> &nbsp;&nbsp;<span>Paket</span></a></li>
        <li class="<?php echo $menu3; ?>"><a href="<?php echo base_url('dashboard/visi_misi'); ?>"><i class="ion-arrow-graph-up-right text-aqua"></i> &nbsp;&nbsp;<span>Visi & Misi</span></a></li>
        <li class="<?php echo $menu4; ?>"><a href="<?php echo base_url('dashboard/contact'); ?>"><i class="ion-ios-navigate-outline text-aqua"></i> &nbsp;&nbsp;<span>Contact</span></a></li>
        <li class="<?php echo $menu5; ?>"><a href="<?php echo base_url('dashboard/users'); ?>"><i class="ion-person-stalker text-aqua"></i> &nbsp;&nbsp;<span>User</span></a></li>

        <!-- <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li> -->
        <li class="header">LABELS</li>
        <li><a href="<?php echo base_url(); ?>" target="_blank"><i class="ion-ios-world-outline text-aqua"></i> &nbsp;&nbsp;<span>Check Website</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
