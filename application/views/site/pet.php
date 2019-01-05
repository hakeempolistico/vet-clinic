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
            <?php $this->load->view('site/inc/alert_message'); ?>
            <div class="card">
                <div class="card-block">
                     
                    <div class="text-right" style="padding: 1rem 0rem ;">

                        <button id="btn-register" type="button" class="btn btn-primary" data-toggle="modal" data-target="#pet_form_modal">
                         Register Pet
                        </button>

                    </div>
                     
                    <table id="tbl_pet" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
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
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
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

<?php $this->load->view('site/modals/register_pet_modal') ?>
<?php $this->load->view('site/modals/delete_pet_modal') ?>
<?php $this->load->view('site/modals/view_pet_modal') ?>

<!-- include footer -->
<!-- <?php include 'footer.php';?> -->

<script>
    
    $(function () {

        //DataTable
        $('#tbl_pet').DataTable({
            "ajax":  '<?= base_url('site/pet/ajaxGetCustPet') ?>',
        })

        //
        $('#btn-register').on('click', function(){
            $('#btn-register-confirm').val('')
            $('#form-register input').val('')
            $('#form-register select').val('').change()
            $('#form-register textarea').val('').change()
        })

        //
        $("#tbl_pet").on('click', '#btn-action-update', function () {
            var pet_id = $(this).attr('data-pet-id');
            $('#btn-register-confirm').val(pet_id)

            $.ajax({
                url: "<?= base_url('site/pet/ajaxGetPetInfo') ?>", 
                type: 'post',
                dataType: "json",
                data: {pet_id: pet_id},
                success: function(res) {
                    $('#reg-pet-name').val(res.pet_name)
                    $('#reg-species').val(res.pet_type_id).change()
                    $('#reg-pet-breed').val(res.pet_breed)
                    $('#reg-pet-age').val(res.pet_age)
                    $('#reg-pet-description').val(res.pet_description)
                    $('#reg-gender').val(res.gender_id).change()
                    $('#reg-pet-status').val(res.pet_status_id).change()
                }
            });
        })

        $("#tbl_pet").on('click', '#btn-action-delete', function () {
            $('#delete-pet-id').val($(this).attr('data-pet-id'));
        })


        //
        $("#tbl_pet").on('click', '#btn-action-view', function () {
            var pet_id = $(this).attr('data-pet-id');
            $('#tbl_pet_view_history').DataTable().destroy()
            $('#tbl_pet_view_history').DataTable({
                ajax:  {
                    url: '<?= base_url('site/pet/ajaxGetDiagnose') ?>',
                    type: "POST",
                    data: {pet_id: pet_id},
                },
            })

            $.ajax({
                url: "<?= base_url('site/pet/ajaxGetPetInfo') ?>", 
                type: 'post',
                dataType: "json",
                data: {pet_id: pet_id},
                success: function(res) {

                    $('#view-pet-name').html(res.pet_name)
                    $('#view-pet-species').html(res.pet_type_name)
                    $('#view-pet-gender').html(res.gender_name)
                    $('#view-pet-status').html(res.pet_status_name)
                }
            })
        })
    })

</script>

