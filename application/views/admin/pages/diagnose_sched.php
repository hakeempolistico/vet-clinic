
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
    <div class="col-md-12">

      <div class="box box-info">
        <div class="box-header">
          <h3 class="box-title"><i class="fa fa-fw fa-user"></i> Customer Details</h3>
        </div>
        <div class="box-body">
          <table id="tbl-pet-diagnose" class="table table-bordered">
            <thead>
              <th>Customer Name</th>
              <th>Contact</th>
              <th>Schedule Date</th>
            </thead>
            <tbody>
              <?php foreach($schedules as $customer_details): ?>
                <tr>
                  <td><?= $customer_details->fname.' '.$customer_details->lname ?></td>
                  <td><?= $customer_details->contact_num ?></td>
                  <td><?= $customer_details->date ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>

      <div class="box box-info">
        <div class="box-header">
          <h3 class="box-title"><i class="fa fa-fw fa-paw"></i> Pet Details</h3>
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
              <?php foreach($pet as $info): ?>
                <tr>
                  <td><?= $info->pet_name ?></td>
                  <td><?= $info->pet_type_name ?></td>
                  <td><?= $info->pet_breed ?></td>
                  <td><?= $info->pet_age ?></td>
                  <td><?= $info->gender_name ?></td>
                  <td><?= $info->pet_description ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>

      <div class="box box-danger">
        <div class="box-header">
          <h3 class="box-title"><i class="fa fa-fw fa-heartbeat"></i> Diagnose Details</h3>
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
              <?php foreach($diagnose as $key=>$diagnose): ?>
                <tr>
                  <td><?= $key+1 ?></td>
                  <td><strong class="text-danger"><?= $diagnose->diagnose_details ?></strong></td>
                  <td><?= $diagnose->treatment_details ?></td>
                  <td><?= $diagnose->note ?></td>
                  <td><?= DateTime::createFromFormat("Y-m-d H:i:s", $diagnose->created_at)->format("M d, Y"); ?></td>
                  <td><?= DateTime::createFromFormat("Y-m-d H:i:s", $diagnose->created_at)->format("H:i"); ?></td>
                </tr>
              <?php endforeach; ?>
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
    