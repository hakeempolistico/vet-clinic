
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
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
                <th>Customer</th>
                <th>Pet</th>
                <th>Schedule</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>1</strong></td>
                <td>Kim Arvin Toledo</td>
                <td>Cookie</td>
                <td>Schedule</td>
                <td>
                  <a type="button" class="btn btn-info btn-xs" href="<?= site_url('admin/diagnose/schedule/1') ?>" ><i class="fa fa-fw fa-search"></i></a>
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
      <!-- /.row -->
    </section>
    <!-- /.content -->

    <script>
    	var ajaxUrl = '<?= site_url('admin/diagnose/ajaxGetSchedule') ?>'
    </script>
    