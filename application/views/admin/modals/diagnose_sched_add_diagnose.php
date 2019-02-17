
<div class="modal fade" id="modal-add-diagnose">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Pet Diagnose</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <?php echo form_open(site_url('admin/diagnose/addDiagnose')); ?>
          <div class="col-md-12">
            <div class="form-group">
              <label for="first-name">Diagnose</label>
              <input type="text" class="form-control" id="diagnose" name="diagnose_details" placeholder="Enter Diagnose" required>
            </div>
            <div class="form-group">
              <label>Treatment</label>
              <textarea id="treatment" name="treatment_details" class="form-control" rows="3" placeholder="Enter Treatment"></textarea>
            </div>
            <div class="form-group">
              <label>Note</label>
              <textarea id="Note" name="Note" class="form-control" rows="3" placeholder="Enter Note"></textarea>
            </div>
            <input type="hidden" name="schedule_id" value="<?= $schedules[0]->id ?>">
            <input type="hidden" name="created_at" value="<?= date("Y-m-d h:i:s") ?>">

          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" id="btn-update-cust-confirm" class="btn btn-danger">Confirm</button>
      </div>

      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->