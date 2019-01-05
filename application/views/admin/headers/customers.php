<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/bower_components/Ionicons/css/ionicons.min.css') ?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/AdminLTE.min.css') ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/skins/_all-skins.min.css') ?>">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  <!-- jQuery 3 -->
  <script src="<?= base_url('assets/adminlte/bower_components/jquery/dist/jquery.min.js') ?>"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?= base_url('assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
  <!-- DataTables -->
  <script src="<?= base_url('assets/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
  <script src="<?= base_url('assets/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
  <!-- SlimScroll -->
  <script src="<?= base_url('assets/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>
  <!-- FastClick -->
  <script src="<?= base_url('assets/adminlte/bower_components/fastclick/lib/fastclick.js') ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/adminlte/dist/js/adminlte.min.js') ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('assets/adminlte/dist/js/demo.js') ?>"></script>
  <!-- bootstrap datepicker -->
  <script src="<?= base_url('assets/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?> "></script>
  <!-- page script -->
  <script>
    $(function () {
      //DataTable
      $('.DataTable').DataTable({
        "ajax":  '<?= base_url('admin/customers/ajaxGetCustPet') ?>',
          
      })

      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      })
    })
  </script>
</head>