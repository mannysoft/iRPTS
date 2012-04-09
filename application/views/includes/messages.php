<?php if (validation_errors()): ?>
	<div class="clean-red">
		<?php echo validation_errors(); ?>
		<?php echo $this->session->flashdata('msg');?>
    </div>
<?php elseif ($this->session->flashdata('msg')): ?>
	<div class="clean-green">
		<?php echo validation_errors(); ?>
        <?php echo $this->session->flashdata('msg');?>
    </div>
<?php elseif($msg != ''): ?>
	<div class="clean-green">
		<?php echo $msg; ?>
    </div>
<?php endif; ?>