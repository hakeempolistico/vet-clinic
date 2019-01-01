
<div class="alert alert-<?= $this->session->flashdata('alert-type') ?> alert-dismissible fade show" role="alert" style="margin:-30px -30px 30px">
  <strong><?= $this->session->flashdata('message') ?>!</strong> <?= $this->session->flashdata('sub-message') ?>.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>