<!DOCTYPE html>
<html>

<!-- header  -->
<?php $this->load->view('admin/headers/customers') ?>
<!-- end -->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- topnav -->
  <?php $this->load->view('admin/layouts/topnav') ?>
  <!-- end -->

  <!-- sidenav -->
  <?php $this->load->view('admin/layouts/sidenav') ?>
  <!-- end -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <?php $this->load->view('admin/layouts/content_header') ?>

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
              <table class="table table-bordered table-striped DataTable">
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


      <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-primary">
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
                    <input type="text" class="form-control pull-right" id="datepicker">
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

      <div class="modal fade" id="modal-pets">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-info">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Edit Pet</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <table class="table table-bordered">
                    <thead>
                      <th></th>
                      <th>Name</th>
                      <th>Gender</th>
                      <th>Description</th>
                      <th>Type</th>
                    </thead>
                      <tbody>
                      <tr>
                        <td><strong>1</strong></td>
                        <td>Hannah</td>
                        <td>Female</td>
                        <td>Too good to be fucking true</td>
                        <td>Lion</td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <!-- <button type="button" class="btn btn-primary">Confirm</button> -->
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

  <!-- footer -->
  <?php $this->load->view('admin/layouts/footer') ?>
  <!-- end -->
  
</div>
<!-- ./wrapper -->

</body>
</html>
