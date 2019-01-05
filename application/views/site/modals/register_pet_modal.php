
<div class="modal fade" id="pet_form_modal" tabindex="-1" role="dialog" aria-labelledby="register_pet" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form id="form-register" method="post" action="<?= base_url('site/pet/registerPet'); ?>" accept-charset="utf-8">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pet Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
                <div class="form-group">
                    <label class="col-md-12 text-primary">Name</label>
                    <div class="col-md-12">
                        <input id="reg-pet-name" name="pet_name" type="text" value="" class="form-control form-control-line" required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12 text-primary">Species</label>
                    <div class="col-md-12">
                        <select id="reg-species" name="pet_type_id" class="form-control form-control-line" required="">
                            <option></option>
                            <?php foreach ($species as $species): ?>
                            <option value="<?= $species->pet_type_id; ?>"><?= $species->pet_type_name; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12 text-primary">Breed</label>
                    <div class="col-md-12">
                        <input id="reg-pet-breed" name="pet_breed" type="text" value="" class="form-control form-control-line" required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12 text-primary">Gender</label>
                    <div class="col-md-12">
                        <select id="reg-gender" name="gender_id" class="form-control form-control-line" required="">
                                <option></option>
                                <?php foreach ($gender as $gender): ?>
                                <option value="<?= $gender->gender_id; ?>"><?= $gender->gender_name; ?></option>
                                <?php endforeach ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12 text-primary">Age</label>
                    <div class="col-md-12">
                        <input id="reg-pet-age" name="pet_age" type="number" value="" class="form-control form-control-line" required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12 text-primary">Description</label>
                    <div class="col-md-12">
                        <textarea id="reg-pet-description" name="pet_description" rows="5" class="form-control form-control-line"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12 text-primary">Status</label>
                    <div class="col-md-12">
                        <select id="reg-pet-status" name="pet_status_id" class="form-control form-control-line" required="">
                                <option></option>
                                <?php foreach ($pet_status as $status): ?>
                                <option value="<?= $status->pet_status_id; ?>"><?= $status->pet_status_name; ?></option>
                                <?php endforeach ?>
                        </select>
                    </div>
                </div>
                            
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button id="btn-register-confirm" name="form_type" type="submit" class="btn btn-primary">Confirm</button>
          </div>

        </div>
     </form>
  </div>
</div>