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
                <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <div class="col-md-7 col-4 align-self-center">
            </div>
        </div>
        <?php $this->session->flashdata() ? $this->load->view('site/inc/alert_message') : ''; ?>
        <div class="row">
            <!-- CONTENT START -->
            
        
            <!-- CONTENT END -->
        </div>
    </div>

<!-- include footer -->
<?php include 'footer.php';?>