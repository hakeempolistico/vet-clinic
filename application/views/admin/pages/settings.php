
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      	<div class="col-md-12">
	      	<div class="box">
	        <div class="box-header">
	          <h3 class="box-title">Change Password</h3>
	        </div>
	        <!-- /.box-header -->
            <?php echo form_open(site_url('admin/settings/changePassword')); ?>
		        <div class="box-body">
		        	<div class="form-group">
	                  <label>Email address</label>
	                  <input type="email" class="form-control" value="admin@example.com" disabled>
	                </div>
		        	<div class="form-group">
	                  <label>Password</label>
	                  <input type="password" name="user_password" class="form-control" placeholder="Enter Password">
	                  <?php echo form_error('user_password', '<div class="text-danger">', '</div>'); ?>
	                </div>
		        	<div class="form-group">
	                  <label>New Password</label>
	                  <input type="password" name="new_password" class="form-control" placeholder="Enter New Password">
	                  <?php echo form_error('new_password', '<div class="text-danger">', '</div>'); ?>
	                </div>
		        	<div class="form-group">
	                  <label>Confirm Password</label>
	                  <input type="password" name="confirm_password" class="form-control" placeholder="Enter Confirm Password">
	                  <?php echo form_error('confirm_password', '<div class="text-danger">', '</div>'); ?>
	                </div>
		        </div>
		        <!-- /.box-body -->
		        <div class="box-footer">
		        	<button type="submit" class="btn btn-primary pull-right">Submit</button>
		        </div>
	    	</form>
	      </div>
      </div>
	  </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->