<!-- include header -->
<?php include 'header.php';?>
 <!-- Bootstrap 3.3.7 -->
<!-- <link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">  -->
<!-- 
<style type="text/css">
    form{
        padding: 2.5rem;
    }
    body{
            color: #99abb4;
    }
</style> -->

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
                <?php echo form_open(site_url('site/schedule')); ?>
                    <div class="form-horizontal form-material">
                       <div class="form-group">
                            <label>Date:</label>
                            <div class="input-group date">
                              <input type="text" name="date" class="form-control pull-right" id="datepicker">
                            </div>
                             <?php if(form_error('date')): ?>
                                    <label class="text-danger"><?= form_error('date'); ?></label>
                             <?php endif ?>
                        </div>

                        <div class="bootstrap-timepicker">
                            <div class="form-group">
                              <label>Time picker:</label>
                              <div class="input-group">
                                <input type="text" name="time" class="form-control timepicker" >
                              </div>
                              <?php if(form_error('time')): ?>
                                    <label class="text-danger"><?= form_error('time'); ?></label>
                             <?php endif ?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="pet_id" class="col-md-12">Pet: </label>
                            <div class="col-md-12">
                                <select class="form-control form-control-line"  id="pet_id" name="pet_id">
                                    <option></option>
                                    <?php foreach ($pet as $pet): ?>
                                    <option value="<?= $pet->pet_id; ?>"><?= $pet->pet_name; ?></option>
                                    <?php endforeach ?>                               
                                </select>
                            </div>
                            <?php if(form_error('pet_id')): ?>
                                    <label class="text-danger"><?= form_error('pet_id'); ?></label>
                             <?php endif ?>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Description:</label>
                            <div class="col-md-12">
                                <textarea rows="5" class="form-control form-control-line" name="description"></textarea>
                            </div>
                            <?php if(form_error('description')): ?>
                                    <label class="text-danger"><?= form_error('description'); ?></label>
                             <?php endif ?>
                        </div>

                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Status: <span>Pending</span> </label>
                        </div>
                        
                        <div class="form-group text-center">
                            <div class="col-sm-12">
                                <button name="form_type" type="submit" class="btn btn-primary">Save</button>
                            </div>
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