<!-- include header -->
<?php include 'header.php';?>
<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        
    <?php $this->load->view('site/layouts/topnav') ?>
    <?php $this->load->view('site/layouts/sidenav') ?>
    <div class="page-wrapper">

<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Pet</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Pet</li>
            </ol> 
        </div>
        <div class="col-md-7 col-4 align-self-center">
          
        </div>
    </div>
    <div class="row">
        <!-- CONTENT START -->


        <div class="col-lg-12 col-xlg-12 col-md-12">
            <div class="card">
                <div class="card-block">
                     
                    <div class="text-right" style="padding: 1rem 0rem ;">

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pet_form_modal">
                         Register Pet
                        </button>

                    </div>
                     
                    <table id="tbl_pet" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Species</th>
                                <th>Breed</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th class="text-center">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <th>Species</th>
                                <th>Breed</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Description</th>
                                <th>Status</th>
                                <td>
                                    <div class="text-center">

                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#pet_view_modal">
                                         View
                                        </button>

                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#pet_form_modal">
                                         Update
                                        </button>

                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmation_modal">
                                         Delete
                                        </button>

                                    </div>
                                </td>
                            </tr>                           
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Species</th>
                                <th>Breed</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th class="text-center">Manage</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>




        <!-- CONTENT END -->
    </div>
</div>




<!-- Start Modal Register Pet-->
<div class="modal fade" id="pet_form_modal" tabindex="-1" role="dialog" aria-labelledby="register_pet" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="post" accept-charset="utf-8">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pet Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
                <div class="card">
                    <div class="card-block">
                    
                        <div class="form-group">
                            <label class="col-md-12 text-primary">Name</label>
                            <div class="col-md-12">
                                <input name="fname" type="text" value="" class="form-control form-control-line" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 text-primary">Species</label>
                            <div class="col-md-12">
                                <select name="species" class="form-control form-control-line" required="">
                                        <option></option>
                                        <option value="1" selected="">Dog</option>
                                        <option value="2">Cat</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 text-primary">Gender</label>
                            <div class="col-md-12">
                                <select name="gender_id" class="form-control form-control-line" required="">
                                        <option></option>
                                        <option value="1" selected="">Male</option>
                                        <option value="2">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 text-primary">Description</label>
                            <div class="col-md-12">
                                <textarea name="description" rows="5" class="form-control form-control-line"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 text-primary">Status</label>
                            <div class="col-md-12">
                                <select name="status_id" class="form-control form-control-line" required="">
                                        <option></option>
                                        <option value="1" selected="">Active</option>
                                        <option value="2">Inactive</option>
                                </select>
                            </div>
                        </div>
                            
                    </div>
                </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Register</button>
          </div>

        </div>
     </form>
  </div>
</div>
<!-- End Modal Register Pet-->

<!-- Start Modal Confirmation -->
<div id="confirmation_modal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                    <i class="mdi mdi-close"></i>
                </div>              
                <h4 class="modal-title">Are you sure?</h4>  
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Do you really want to delete these records? This process cannot be undone.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>    
<!-- End modal confimation -->

<!-- Start View Pet History -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="pet_view_modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pet Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                    <div class="card">
                        <div class="card-block">
                            
                            <div class="row">
                                <div class="col-lg-6 col-xlg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="col-md-12 text-primary">Name: <span class="text-black lbl-name" >insert pet name</span></label> 
                                        <label class="col-md-12 text-primary">Species: <span class="text-black lbl-type" >insert pet Species</span></label> 
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xlg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="col-md-12 text-primary">Gender: <span class="text-black lbl-gender" >insert pet gender</span></label>  
                                        <label class="col-md-12 text-primary">Status: <span class="text-black lbl-status" >insert pet status</span></label> 
                                    </div>   
                                </div>

                                <h4 class="col-md-12 text-black text-center">Pet History</h4> 
                               
                            </div>
                            
                            <div class="card">
                                <div class="card-block">

                                    <table id="tbl_pet_view_history" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Date Chekup</th>
                                            <th>Diagnose</th>
                                            <th>Description</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Date Chekup</th>
                                            <th>Diagnose</th>
                                            <th>Description</th>
                                            <th>Amount</th>
                                        </tr>                           
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Date Chekup</th>
                                            <th>Diagnose</th>
                                            <th>Description</th>
                                            <th>Amount</th>
                                        </tr>
                                    </tfoot>
                                </table>

                                </div>
                            </div>
                                                     
                                
                        </div>
                    </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>

            </div>
    </div>
  </div>
</div>

<!-- End  View Pet History -->




<!-- include footer -->
<!-- <?php include 'footer.php';?>