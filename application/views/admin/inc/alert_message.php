<?php if($this->session->flashdata()): ?>
	<div class="alert alert-<?= $this->session->flashdata('alert-type') ?> alert-dismissible" style="border-radius: 0px">
	    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	    <h4><i class="icon fa fa-info"></i> <?= $this->session->flashdata('message') ?>!</h4>
	    </strong> <?= $this->session->flashdata('sub-message') ?>.
	</div>
<?php endif; ?>