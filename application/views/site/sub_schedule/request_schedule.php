<div class="card">
    <div class="card-block">
        <?php echo form_open(site_url('site/schedule')); ?>
            <center><h2>Request Schedule Form</h2></center>
            <div class="form-horizontal form-material">
               <div class="form-group">
                    <label>Date:</label>
                    <div class="input-group date">
                      <input type="text" name="date" class="form-control pull-right" id="datepicker" required="">
                    </div>
                     <?php if(form_error('date')): ?>
                            <label class="text-danger"><?= form_error('date'); ?></label>
                     <?php endif ?>
                </div>

                <div class="form-group">
                    <label for="subject">Subject: </label>
                    <div>
                        <input type="text" name="subject" class="form-control"  required="">
                    </div>
                    <?php if(form_error('subject')): ?>
                            <label class="text-danger"><?= form_error('subject'); ?></label>
                     <?php endif ?>
                </div>



                <div class="bootstrap-timepicker">
                    <div class="form-group">
                      <label>Time picker:</label>
                      <div class="input-group">
                        <input type="text" name="time" class="form-control timepicker"  required="">
                      </div>
                      <?php if(form_error('time')): ?>
                            <label class="text-danger"><?= form_error('time'); ?></label>
                     <?php endif ?>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="pet_id">Pet: </label>
                    <div>
                        <select class="form-control form-control-line"  id="pet_id" name="pet_id"  required="">
                            <option></option>
                            <?php foreach ($pet as $pet): ?>
                            <option value="<?= $pet->pet_id; ?>"><?= $pet->pet_name; ?></option>
                            <?php endforeach ?>          
                        </select>
                    </div>
                    <?php if(form_error('pet_id')): ?>
                            <label class="text-danger"><?= form_error('pet_id'); ?></label>
                     <?php endif ?>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Description:</label>
                    <div class="col-md-12">
                        <textarea rows="5" class="form-control form-control-line" name="description"></textarea>
                    </div>
                    <?php if(form_error('description')): ?>
                            <label class="text-danger"><?= form_error('description'); ?></label>
                     <?php endif ?>
                </div>

                <div class="form-group">
                    <label for="example-email" class="col-md-12">Status: <span>Pending</span> </label>
                </div>
                
                <div class="form-group text-center">
                    <div class="col-sm-12">
                        <button name="form_type" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>