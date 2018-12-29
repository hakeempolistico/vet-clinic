
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('assets/adminlte/dist/img/default-user.jpg') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!-- <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li> -->
        <li class="<?= $contentHeader['contentTitle'] == 'Dashboard' ? 'active' : '' ?>">
          <a href="<?= site_url('admin/dashboard') ?>">
            <i class="fa fa-dashboard"></i><span> Dashboard</span>
          </a>
        </li>
        <li class="<?= $contentHeader['contentTitle'] == 'Customers' ? 'active' : '' ?>">
          <a href="<?= site_url('admin/customers') ?>">
            <i class="fa fa-users"></i><span> Customers</span>
          </a>
        </li>
        <li class="<?= $contentHeader['contentTitle'] == 'Schedules' ? 'active' : '' ?>">
          <a href="<?= site_url('admin/schedules') ?>">
            <i class="fa fa-calendar-check-o"></i><span> Schedules</span>
          </a>
        </li>
        <li class="<?= $contentHeader['contentTitle'] == 'Approvals' ? 'active' : '' ?>">
          <a href="<?= site_url('admin/approvals') ?>">
            <i class="fa  fa-check-circle-o"></i><span> Approvals</span>
          </a>
        </li>
        <li class="<?= $contentHeader['contentTitle'] == 'Reports' ? 'active' : '' ?>">
          <a href="<?= site_url('admin/reports') ?>">
            <i class="fa fa-file-text-o"></i><span> Reports</span>
          </a>
        </li>
        <li class="<?= $contentHeader['contentTitle'] == 'Settings' ? 'active' : '' ?>">
          <a href="<?= site_url('admin/settings') ?>">
            <i class="fa fa-gear"></i><span> Settings</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>