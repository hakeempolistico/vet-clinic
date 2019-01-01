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
                        <div class="btn waves-effect waves-light btn-danger hidden-md-down">Register Pet</div>
                    </div>
                     
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th class="text-center">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>
                                    <div class="text-center">
                                        <div class="btn waves-effect waves-light btn-warning hidden-md-down"> LOGOUT</div>
                                        <div class="btn waves-effect waves-light btn-info hidden-md-down"> LOGOUT</div>
                                    </div>
                                </td>
                            </tr>                           
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Manage</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>




        <!-- CONTENT END -->
    </div>
</div>

<!-- include footer -->
<!-- <?php include 'footer.php';?> -->