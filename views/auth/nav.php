<ul id="navigation">
<?php
	if(logged_in())
	{
	?>
		<li><?php echo anchor('admin/dashboard', 'Dashboard'); ?></li>
		<li><?php if(user_group('admin')) { echo anchor('admin/users/manage', 'Manage Users'); } ?></li>
		<li><?php echo anchor('logout', 'Logout'); ?></li>
	<?php
	}
	else
	{
	?>
		<li><?php echo anchor('login', 'Login'); ?></li>
		<li><?php echo anchor('register', 'Register'); ?></li>
	<?php
	}
	
?>
</ul>