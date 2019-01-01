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
        height: -webkit-fill-available;
        padding : 50px 0;
    }
    .banner-sec{background:url(<?= base_url('assets/site/images/signup_bg.jpg') ?>)  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}

</style>



<section class="login-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 login-sec">
                <h2 class="text-center">Login Now</h2>

                <?php echo form_open(site_url('site/signin')); ?>
                    <label class="text-danger">
                        <?= $this->session->flashdata('error_message') ? $this->session->flashdata('error_message'): ''; ?>
                    </label>
                    <div class="form-group">
                        <label for="user_email" class="text-uppercase">Email</label>
                        <input name="user_email" type="email" class="form-control" placeholder="" required="">
                    </div>
                    <div class="form-group">
                        <label for="user_password" class="text-uppercase">Password</label>
                        <input name="user_password" type="password" class="form-control" placeholder="" required="">
                    </div>
                    
                    <div class="form-check">
                        <button type="submit" class="btn btn-login float-right">Submit</button>
                    </div>
                </form>

                <div class="copy-text">Create Account <a href="signup">click here..</a></div>
            </div>
            <div class="col-md-8 banner-sec">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                </div>
            </div>
        </div>
</section>