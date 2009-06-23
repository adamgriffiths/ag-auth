<h2>Manage Users</h2>

<h3><?php echo anchor($this->config->item('auth_controllers_root') . "users/add", "Add User"); ?></h3>

<?php echo $this->table->generate(); ?>