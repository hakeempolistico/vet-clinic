<!DOCTYPE html>
<html>

<!-- Headers  -->
<?php $this->load->view('admin/layouts/header') ?>
<!-- End -->


  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <!-- Topnav -->
      <?php $this->load->view('admin/layouts/topnav') ?>
      <!-- End -->

      <!-- Sidenav -->
      <?php $this->load->view('admin/layouts/sidenav') ?>
      <!-- End -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <?php $this->load->view('admin/inc/alert_message') ?>
        <?php $this->load->view('admin/layouts/content_header') ?>
        <?php $this->load->view('admin/pages/'.$page) ?>

      </div>
      <!-- /.content-wrapper -->

      <!-- Footer -->
      <?php $this->load->view('admin/layouts/footer') ?>
      <!-- End -->
      
    </div>
    <!-- ./wrapper -->
  </body>
</html>
