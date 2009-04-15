<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Login</title>
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
				
				<div class="title">Login</div>
				<div class="box">
						<form method="POST">
						Username/Email:<br />
						<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" class="form" /><?php echo form_error('username'); ?><br /><br />
						Password:<br />
						<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" class="form" /><?php echo form_error('password'); ?><br /><br />
						<input type="submit" value="Login" name="login" />
						</form>
				</div>
			</div>
		</div>
</body>
</html>