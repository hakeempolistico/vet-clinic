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

<div class="row" style="padding: 2em;">

    <div class="col-lg-4 col-xlg-4 col-md-4">
        <div class="card">
            <div class="card-block">

                <form class="form-horizontal form-material">
                    <div class="form-group">
                        <label class="col-md-12">Date and time:</label>
                        <div class="col-md-12">
                           <div class="form-group">
                                <div class='input-group date' id='datetimepicker_request'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Pet: </label>
                        <div class="col-md-12">
                            <select class="form-control form-control-line" required="">
                                <option></option>
                                <option>name of pet 1</option>
                                <option>name of pet 2</option>
                                <option>name of pet 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Description:</label>
                        <div class="col-md-12">
                            <textarea rows="5" class="form-control form-control-line"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Status: <span>Pending</span> </label>
                    </div>
                    
                    <div class="form-group text-center">
                        <div class="col-sm-12">
                            <button class="btn btn-danger">Save</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>


    <div class="col-lg-8 col-xlg-8 col-md-8">
        <div class="card">
            <div class="card-block">

                <div id='wrap'>

                <div id='calendar'></div>

                <div style='clear:both'></div>
                </div>

            </div>
        </div>
    </div>

</div>

<!-- include footer -->
<?php include 'footer.php';?>