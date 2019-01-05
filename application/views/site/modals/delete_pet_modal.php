
<!-- Start Modal Confirmation -->
<div id="confirmation_modal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                    <i class="mdi mdi-close"></i>
                </div>              
                <h4 class="modal-title">Are you sure?</h4>  
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Do you really want to delete these records? This process cannot be undone.</p>
            </div>
            <div class="modal-footer">
                <form method="post" action="<?= base_url('site/pet/delete') ?>">
                    <input id="delete-pet-id" type="hidden" name="pet_id">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                    <button id="delete-confirm" type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>    
<!-- End modal confimation -->