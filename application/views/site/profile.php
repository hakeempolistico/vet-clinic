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
                <h3 class="text-themecolor m-b-0 m-t-0">Profile</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
            <div class="col-md-7 col-4 align-self-center">
              
            </div>
        </div>

        <?php $this->session->flashdata() ? $this->load->view('site/inc/alert_message') : ''; ?>

        <div class="row">
        <!-- CONTENT START -->


            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-block">
                        <center class="m-t-30"> <img src="<?= base_url('assets/site/') ?>/images/users/5.jpg" class="img-circle" width="150" />
                            <h4 class="card-title m-t-10"><?= $profile->fname.' '.$profile->lname ?></h4>
                            <h6 class="card-subtitle"><?= $user->user_email ?></h6>
                           <!--  <div class="row text-center justify-content-md-center">
                                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                            </div> -->
                        </center>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-block">
                        <?php echo form_open(site_url('site/profile/updateProfile')); ?>
                            <div class="form-group">
                                <label class="col-md-12 text-primary">First Name</label>
                                <div class="col-md-12">
                                    <input name="fname" type="text" value="<?= $profile->fname ?>" class="form-control form-control-line">
                                </div>
                                <?php if(form_error('fname')): ?>
                                    <label class="text-danger"><?= form_error('fname'); ?></label>
                                <?php endif ?>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 text-primary">Middle Name</label>
                                <div class="col-md-12">
                                    <input name="mname" type="text" value="<?= $profile->mname ?>" class="form-control form-control-line">
                                </div>
                                <?php if(form_error('mname')): ?>
                                    <label class="text-danger"><?= form_error('mname'); ?></label>
                                <?php endif ?>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 text-primary">Last Name</label>
                                <div class="col-md-12">
                                    <input name="lname" type="text" value="<?= $profile->lname ?>" class="form-control form-control-line">
                                </div>
                                <?php if(form_error('lname')): ?>
                                    <label class="text-danger"><?= form_error('lname'); ?></label>
                                <?php endif ?>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 text-primary">Address</label>
                                <div class="col-md-12">
                                    <textarea name="address" rows="5" class="form-control form-control-line"><?= $profile->address ?></textarea>
                                </div>
                                <?php if(form_error('address')): ?>
                                    <label class="text-danger"><?= form_error('address'); ?></label>
                                <?php endif ?>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12 text-primary">Gender</label>
                                <div class="col-sm-12">
                                    <select name="gender_id" class="form-control form-control-line" required="">
                                        <option></option>
                                        <option value="1" <?= $profile->gender_id == 1 ? 'selected' : ''  ?> >Male</option>
                                        <option value="2" <?= $profile->gender_id == 2 ? 'selected' : ''  ?> >Female</option>
                                    </select>
                                </div>
                                <?php if(form_error('gender_id')): ?>
                                    <label class="text-danger"><?= form_error('gender_id'); ?></label>
                                <?php endif ?>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 text-primary">Contact No</label>
                                <div class="col-md-12">
                                    <input name="contact_num" value="<?= $profile->contact_num ?>" type="text" class="form-control form-control-line">
                                </div>
                                <?php if(form_error('contact_num')): ?>
                                    <label class="text-danger"><?= form_error('contact_num'); ?></label>
                                <?php endif ?>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 text-primary">
                                    <button type="submit" class="btn btn-success">Update Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!-- CONTENT END -->
        </div>
    </div>

<!-- include footer -->
<?php include 'footer.php';?>