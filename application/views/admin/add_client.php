<?php echo form_open('admin/add_client'); ?>
	<div class="form">
		Client Name: <input type="text" name="client_name" /> <br />
		Client Email: <input type="text" name="client_email" /> <br />
		Client Password: <input type="text" name="client_password" />  <br />
		<?php echo form_submit('submit', 'Add Client'); ?>
	</div>


<?php echo form_close(); ?>