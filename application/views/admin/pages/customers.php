
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
                <th>Name</th>
                <th>Addess</th>
                <th>Gender</th>
                <th>Contact Number</th>
                <th>Birthdate</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>1</strong></td>
                <td>Kim Arvin Toledo</td>
                <td>Panapaan 1, Bacoor, Cavite</td>
                <td>Male</td>
                <td>09558874822</td>
                <td>July 22, 1996</td>
                <td>
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit" ><i class="fa fa-fw fa-edit"></i></button>
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-pets"><i class="fa fa-fw fa-paw"></i></button>
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

  <?php $this->load->view('admin/modals/customers_edit_info_modal') ?>
  <?php $this->load->view('admin/modals/customers_pets_modal') ?>

</section>
<!-- /.content -->


<!-- Scripts -->
<script> 
  var ajaxUrl = '<?= base_url('admin/customers/ajaxGetCustomers') ?>';
</script>
<script src="<?= base_url('assets/custom_js/admin.customer.js') ?>"></script>