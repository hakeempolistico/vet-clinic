
              <div class="tab-pane active" id="settings">
                  <?php echo form_open(site_url('admin/customers/updateCustomer'), array('class'=>'form-horizontal')); ?>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">First Name</label>

                      <div class="col-sm-10">
                        <input name="fname" type="text" class="form-control" value="<?= $cust_info->fname ?>" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Middle Name</label>

                      <div class="col-sm-10">
                        <input name="mname" type="text" class="form-control" value="<?= $cust_info->mname ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Last Name</label>

                      <div class="col-sm-10">
                        <input name="lname" type="text" class="form-control" value="<?= $cust_info->lname ?>" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Address</label>

                      <div class="col-sm-10">
                        <input name="address" type="text" class="form-control" value="<?= $cust_info->address ?>" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Gender</label>

                      <div class="col-sm-10">
                        <select name="gender_id" class="form-control" required>
                          <option></option>
                          <option value="1"  <?= ($cust_info->gender_id == 1) ? 'selected' : '' ; ?> >Male</option>
                          <option value="2"  <?= ($cust_info->gender_id == 2) ? 'selected' : '' ; ?>>Female</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Contact Number</label>

                      <div class="col-sm-10">
                        <input name="contact_num" type="text" class="form-control" value="<?= $cust_info->contact_num ?>" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Birthdate</label>

                      <div class="col-sm-10">
                        <input name="birthdate" type="text" class="form-control date-picker" value="<?= $cust_info->birthdate ?>" required>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button name="user_id" type="submit" class="btn btn-primary btn-sm" value="<?= $cust_info->user_id ?>">Update</button>
                      </div>
                    </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="pets">
                  <table class="table table-bordered">
                    <thead>
                      <th></th>
                      <th>Name</th>
                      <th>Breed</th>
                      <th>Type</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Description</th>
                      <th>Status</th>
                    </thead>
                      <tbody>
                      <tr>
                        <td><strong>1</strong></td>
                        <td>Hannah</td>
                        <td>Chinese</td>
                        <td>Cat</td>
                        <td>20</td>
                        <td>Female</td>
                        <td>CHINESE SHIT</td>
                        <td>Active</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
              <!-- /.tab-pane -->