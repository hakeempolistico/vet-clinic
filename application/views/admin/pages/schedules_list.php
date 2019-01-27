
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
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
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


<!-- Modals -->
<?php $this->load->view('admin/modals/approvals_approve_confirm') ?>
<?php $this->load->view('admin/modals/approvals_disapprove_confirm') ?>
<!-- End Modals -->

<!-- Scripts -->
<script> 
  var ajaxUrl = '<?= base_url('admin/schedules/ajaxGetSchedules') ?>';
</script>
<script src="<?= base_url('assets/custom_js/admin.schedules.list.js') ?>"></script>