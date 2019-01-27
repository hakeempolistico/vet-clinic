
<!-- Main content -->
<section class="content">
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
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>1</strong></td>
                <td>Kim Arvin Toledo</td>
                <td>Cookie</td>
                <td>01/19/2019 - 12:30</td>
                <td>
                  <a type="button" class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#modal-approve-confirm"><i class="fa fa-fw fa-check"></i></a>
                  <a type="button" class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#modal-disapprove-confirm"><i class="fa fa-fw fa-close"></i></a>
                </td>
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

<!-- Modals -->
<?php $this->load->view('admin/modals/approvals_approve_confirm') ?>
<?php $this->load->view('admin/modals/approvals_disapprove_confirm') ?>
<!-- End Modals -->

<!-- Scripts -->
<script> 
  //var ajaxUrl = '<?= base_url('admin/customers/ajaxGetCustomers') ?>';
</script>
<script src="<?= base_url('assets/custom_js/admin.schedules.list.js') ?>"></script>