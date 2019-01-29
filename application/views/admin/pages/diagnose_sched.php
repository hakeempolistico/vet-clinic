
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
    <div class="col-md-12">

      <div class="box box-info">
        <div class="box-header">
          <h3 class="box-title">Customer Details</h3>
        </div>
        <div class="box-body">
          <table id="tbl-pet-diagnose" class="table table-bordered">
            <thead>
              <th>Customer Name</th>
              <th>Contact</th>
              <th>Schedule Date</th>
            </thead>
            <tbody>
              <tr>
                <td>Hakeem Polistico</td>
                <td>0955-887-4822</td>
                <td>Jan 29, 2019</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="box box-info">
        <div class="box-header">
          <h3 class="box-title">Pet Details</h3>
        </div>
        <div class="box-body">
          <table id="tbl-pet-diagnose" class="table table-bordered">
            <thead>
              <th>Name</th>
              <th>Type</th>
              <th>Breed</th>
              <th>Age</th>
              <th>Gender</th>
              <th>Description</th>
            </thead>
            <tbody>
              <tr>
                <td>Cookie</td>
                <td>Cat</td>
                <td>Persian</td>
                <td>5</td>
                <td>Male</td>
                <td>Lazy as fuck. Needs diet.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="box box-danger">
        <div class="box-header">
          <h3 class="box-title">Diagnose Details</h3>
        </div>
        <div class="box-body">
          <table id="tbl-pet-diagnose" class="table table-striped">
            <thead>
              <th></th>
              <th>Diagnose</th>
              <th>Treatment</th>
              <th>Note</th>
              <th>Date</th>
              <th>Time</th>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Flea</td>
                <td>Anti flea shampoo</td>
                <td>Do not put anything stupid</td>
                <td>July 29, 2019</td>
                <td>5:30pm</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

    <script>
    	var ajaxUrl = '<?= site_url('admin/diagnose/ajaxGetSchedule') ?>'
    </script>
    