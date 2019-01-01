<link href="<?= base_url('assets/site/css/bootstrap.min.css') ?>" rel="stylesheet" id="bootstrap-css">
<!--custom css-->
<link href="<?= base_url('assets/site/css/signin.css') ?>" rel="stylesheet" id="bootstrap-css">
<script src="<?= base_url('assets/site/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/site/js/jquery-3.2.1.min.js') ?>"></script>
<!------ Include the above in your HEAD tag ---------->


<style type="text/css">

    @import url("<?= base_url('assets/site/css/font-awesome.css') ?>");
    .login-block{
        background: #DE6262;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to bottom, #8ee2ff, #006486);
        float:left;
        width:100%;
        height: auto;
        padding : 50px 0;
    }
    .banner-sec{background:url(<?= base_url('assets/site/images/signup_bg.jpg') ?>)  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
    .form-control{
        font-size: 0.8rem;
    }
    label{
        font-size: small;
    }
</style>



<section class="login-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 login-sec">
                <h2 class="text-center">Register Now</h2>
                <?php echo form_open(site_url('site/signup')); ?>
                    <!-- <label class="text-danger"><?php echo validation_errors(); ?></label> -->
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="fname" class="text-uppercase">First Name</label>
                                <input type="text" class="form-control" minlength="2" name="fname" required>
                                <label class="text-danger"><?= form_error('fname'); ?></label>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="lname" class="text-uppercase">Last Name</label>
                                <input type="text" class="form-control" minlength="2" name="lname" required>
                                <label class="text-danger"><?= form_error('lname'); ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="user_email" class="text-uppercase">Email Address</label>
                        <input type="email" class="form-control" name="user_email" required>
                        <label class="text-danger"><?= form_error('user_email'); ?></label>
                    </div>

                    <div class="form-group">
                        <label for="contact_num" class="text-uppercase">Contact Number</label>
                        <input type="number" name="contact_num" class="form-control" maxlength="11" placeholder="09XXXXXXXXX" required>
                        <label class="text-danger"><?= form_error('contact_num'); ?></label>
                    </div>

                    <div class="form-group">
                        <label for="address" class="text-uppercase">Address</label>
                        <textarea class="form-control" rows="2" id="comment" name="address"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="user_password" class="text-uppercase">Password</label>
                                <input name="user_password" type="password" class="form-control" minlength="6" placeholder="" required>
                                <label class="text-danger"><?= form_error('password'); ?></label>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="confirm_password" class="text-uppercase">Confirm Password</label>
                                <input name="confirm_password" type="password" class="form-control" minlength="6" placeholder="" required>
                                <label class="text-danger"><?= form_error('confirm_password'); ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="form-check">
                        <button type="submit" class="btn btn-login float-right">Submit</button>
                    </div>

                </form>

                <div class="copy-text">Already member <a href="signin">click here..</a></div>
            </div>
            <div class="col-md-8 banner-sec">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                </div>
            </div>
        </div>
</section>