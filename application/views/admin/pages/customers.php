<!DOCTYPE html>
<html>

<!-- Headers  -->
<?php $this->load->view('admin/headers/customers') ?>
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

    <?php $this->load->view('admin/layouts/content_header') ?>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-default" ><i class="fa fa-fw fa-edit"></i></button>
                    <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-fw fa-paw"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>
                    <button type="button" class="btn btn-info btn-sm"><i class="fa fa-fw fa-edit"></i></button>
                    <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-fw fa-paw"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5
                  </td>
                  <td>Win 95+</td>
                  <td>5.5</td>
                  <td>
                    <button type="button" class="btn btn-info btn-sm"><i class="fa fa-fw fa-edit"></i></button>
                    <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-fw fa-paw"></i></button>
                  </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>


      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Edit Customer Information</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" class="form-control" id="first-name" placeholder="Enter First Name">
                  </div>

                  <div class="form-group">
                    <label for="middle-name">Middle Name</label>
                    <input type="text" class="form-control" id="middle-name" placeholder="Enter Middle Name">
                  </div>

                  <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <input type="text" class="form-control" id="last-name" placeholder="Enter Last Name">
                  </div>

                  <div class="form-group">
                   <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email">
                  </div>

                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter Address">
                  </div>

                  <div class="form-group">
                    <label for="gender">Gender</label>
                    <select type="text" class="form-control" id="gender" placeholder="Enter Gender">
                      <option value=""></option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="contact">Contact Number</label>
                    <input type="text" class="form-control" id="contact-number" placeholder="Enter Contact Number">
                  </div>

                  <div class="form-group">
                    <label>Date:</label>

                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker">
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Confirm</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  <?php $this->load->view('admin/layouts/footer') ?>
  <!-- End -->
  
</div>
<!-- ./wrapper -->

</body>
</html>
