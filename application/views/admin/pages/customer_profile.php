
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?= base_url('assets/adminlte/dist/img/default-user.jpg') ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?= $cust_info->fname.' '.$cust_info->lname ?></h3>

              <p class="text-muted text-center"><?= $cust_info->user_email ?></p>

              <a href="#" class="btn btn-danger btn-block btn-sm" data-toggle="modal" data-target="#modal-delete-confirm"><b>Delete</b></a>
              <a href="<?= site_url('admin/customers/') ?>" class="btn btn-info btn-block btn-sm"><b>Back</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#settings" data-toggle="tab">Settings</a></li>
              <li><a href="#pets" data-toggle="tab">Pets</a></li>
            </ul>
            <div class="tab-content">
              <?php $this->load->view('admin/tabs/customers_tab') ?>
              <?php $this->load->view('admin/tabs/customers_pets_tab') ?>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->

    <!-- Modal -->
    <?php $this->load->view('admin/modals/customers_delete_confirm') ?>
    <?php $this->load->view('admin/modals/customers_pet_diagnose') ?>
    <!-- End Modal -->

