<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Fresh</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<style type="text/css">
		body
		{
			background-image: none;
			background-color: white;
			color: #454545;
			background-repeat: no-repeat;
			margin: 0;
			font-family: Helvetica;
			font-size: 12px;
		}

		#container
		{
			width: 100%;
		}

		#login
		{
			width: 726px;
			margin: 0 auto;
			margin-top: 140px;
		}
		
		.title
		{
			font-size: 14px;
		}
		
		.box
		{
			width: 726px;
			padding: 15px;
		}
		</style>
	</head>
	<body>
		
		<div id="container">
			
			<div id="login">
				
				<div class="title">Register</div>
				<div class="box">
						<form method="post">
						Username:<br />
						<input type="text" name="username" size="50" class="form" value="<?php echo set_value('username'); ?>" /><br /><?php echo form_error('username'); ?><br />
						Password:<br />
						<input type="password" name="password" size="50" class="form" value="<?php echo set_value('password'); ?>" /><?php echo form_error('password'); ?><br /><br />
						Password confirmation:<br />
						<input type="password" name="conf_password" size="50" class="form" value="<?php echo set_value('conf_password'); ?>" /><?php echo form_error('conf_password'); ?><br /><br />
						Email:<br />
						<input type="text" name="email" size="50" class="form" value="<?php echo set_value('email'); ?>" /><?php echo form_error('email'); ?><br /><br />
						<input type="submit" value="Register" name="register" />
						</form>
				</div>
				
				<div class="box_bottom"></div>
			</div>
		</div>
</body>
</html>