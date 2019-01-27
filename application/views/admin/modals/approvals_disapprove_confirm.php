

<div class="modal fade" id="modal-disapprove-confirm">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Disapprove Pending Schedule</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <h4>Are you sure you want to disapprove schedule?</h4>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left btn-sm" data-dismiss="modal">Close</button>
        <?php echo form_open(site_url('admin/schedules/setSchedStatus')); ?>
          <input name="schedule_id" type="hidden" value="">
          <input name="status_name" type="hidden" value="">
        <button type="submit" class="btn btn-danger btn-sm" name="user_id">Confirm</button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->