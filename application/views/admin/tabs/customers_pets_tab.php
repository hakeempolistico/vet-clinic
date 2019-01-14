
<!-- /.tab-pane -->
<div class="tab-pane" id="pets">
    <table class="table table-striped">
      <thead>
        <th></th>
        <th>Name</th>
        <th>Breed</th>
        <th>Type</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Description</th>
        <th>Status</th>
        <th>Action</th>
      </thead>
        <tbody>
        <?php if(empty($pets)): ?>
          <tr>
            <td colspan="8"><center> NO DATA AVAILABLE </center> </td>
          </tr>
        <?php endif ?>
        <?php foreach($pets as $key=>$pet): ?>
          <tr>
            <td><strong><?= $key+1 ?></strong></td>
            <td><?= $pet->pet_name ?></td>
            <td><?= $pet->pet_breed ?></td>
            <td><?= $pet->pet_type_name?></td>
            <td><?= $pet->pet_age ?></td>
            <td><?= $pet->gender_name ?></td>
            <td><?= $pet->pet_description ?></td>
            <td><?= $pet->pet_status_name ?></td>
            <td><button type="button" class="btn btn-block btn-info btn-xs"><i class="fa fa-fw fa-medkit"></i></button></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
</div>
<!-- /.tab-pane -->