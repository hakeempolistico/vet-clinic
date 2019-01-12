
<div class="modal fade" id="modal-edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Customer Information</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <?php echo form_open(site_url('admin/customers/updateCustomer')); ?>
          <div class="col-md-12">
            <div class="form-group">
              <label for="first-name">First Name</label>
              <input type="text" class="form-control" id="cust-first-name" name="fname" placeholder="Enter First Name" required>
            </div>

            <div class="form-group">
              <label for="middle-name">Middle Name</label>
              <input type="text" class="form-control" id="cust-middle-name" name="mname" placeholder="Enter Middle Name">
            </div>

            <div class="form-group">
              <label for="last-name">Last Name</label>
              <input type="text" class="form-control" id="cust-last-name" name="lname" placeholder="Enter Last Name" required>
            </div>

            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="cust-address" name="address" placeholder="Enter Address" required>
            </div>

            <div class="form-group">
              <label for="gender">Gender</label>
              <select type="text" class="form-control" id="cust-gender" name="gender_id" placeholder="Enter Gender" required>
                <option value=""></option>
                <option value="1">Male</option>
                <option value="2">Female</option>
              </select>
            </div>

            <div class="form-group">
              <label for="contact">Contact Number</label>
              <input type="text" class="form-control" id="cust-contact-number" name="contact_num" placeholder="Enter Contact Number" required>
            </div>

            <div class="form-group">
              <label>Birthdate:</label>
              <input type="text" class="form-control pull-right" id="cust-birthdate" name="birthdate" required>
            </div>

          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" id="btn-update-cust-confirm" name="user_id" class="btn btn-primary">Confirm</button>
      </div>

      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->