
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Filter By</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <a class="btn btn-app" id="filter-all">
            <i class="fa fa-calendar text-info"></i> All
          </a>
          <a class="btn btn-app" id="filter-today">
            <i class="fa fa-calendar-check-o text-navy"></i> Today
          </a>
          <a class="btn btn-app" id="filter-approved">
            <i class="fa fa-check-circle-o text-success"></i> Approved
          </a>
          <a class="btn btn-app" id="filter-pending">
            <i class="fa fa-spinner text-warning"></i> Pending
          </a>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Table</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="tbl-customers" class="table table-bordered table-striped DataTable">
            <thead>
              <tr>
                <th></th>
                <th>Customer Name</th>
                <th>Pet Name</th>
                <th>Schedule</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>1</strong></td>
                <td>Kim Arvin Toledo</td>
                <td>Cookie</td>
                <td>01/19/2019 - 12:30</td>
                <td><span class="badge bg-green">approved</span></td>
              </tr>
              <tr>
                <td><strong>2</strong></td>
                <td>Kim Arvin Toledo</td>
                <td>Cookie</td>
                <td>01/20/2019 - 12:30</td>
                <td><span class="badge bg-yellow">pending</span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->


<!-- Scripts -->
<script> 
  //var ajaxUrl = '<?= base_url('admin/customers/ajaxGetCustomers') ?>';
</script>
<script src="<?= base_url('assets/custom_js/admin.schedules.list.js') ?>"></script>