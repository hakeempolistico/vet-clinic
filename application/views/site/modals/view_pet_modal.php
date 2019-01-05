
<!-- Start View Pet History -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="pet_view_modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pet Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                    <div class="card">
                        <div class="card-block">
                            
                            <div class="row">
                                <div class="col-lg-6 col-xlg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="col-md-12 text-primary">Name: <span class="text-black lbl-name" >insert pet name</span></label> 
                                        <label class="col-md-12 text-primary">Species: <span class="text-black lbl-type" >insert pet Species</span></label> 
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xlg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="col-md-12 text-primary">Gender: <span class="text-black lbl-gender" >insert pet gender</span></label>  
                                        <label class="col-md-12 text-primary">Status: <span class="text-black lbl-status" >insert pet status</span></label> 
                                    </div>   
                                </div>

                                <h4 class="col-md-12 text-black text-center">Pet History</h4> 
                               
                            </div>
                            
                            <div class="card">
                                <div class="card-block">

                                    <table id="tbl_pet_view_history" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Date Chekup</th>
                                            <th>Diagnose</th>
                                            <th>Description</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Date Chekup</th>
                                            <th>Diagnose</th>
                                            <th>Description</th>
                                            <th>Amount</th>
                                        </tr>                           
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Date Chekup</th>
                                            <th>Diagnose</th>
                                            <th>Description</th>
                                            <th>Amount</th>
                                        </tr>
                                    </tfoot>
                                </table>

                                </div>
                            </div>
                                                     
                                
                        </div>
                    </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>

            </div>
    </div>
  </div>
</div>

<!-- End  View Pet History -->