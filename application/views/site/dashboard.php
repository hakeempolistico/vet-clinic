<!-- include header -->
<?php include 'header.php';?>

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