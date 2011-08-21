<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<style type="text/css">
		body{background-image:none;background-color:white;color:#231e18;background-repeat:no-repeat;margin:0;font-family:Helvetica;font-size:12px;}
			#container{width:1000px;margin:0 auto;}
			#header{width:100%;margin:0;padding:0;}
			#logo{width:1000px;margin:0 auto;color:#231e18;}
			#nav_bg{background:#231e18;width:100%;height:52px;}
			ul#navigation{list-style-type:none;width:1000px;margin:0 auto;}
			ul#navigation li a{color:white;font-size:18px;float:left;padding:15px 20px 20px 20px;margin-right:10px;}
			ul#navigation li a:hover{color:#231e18;background:white;font-size:18px;float:left;padding:15px 20px 20px 20px;margin-right:10px;}
			ul#navigation li a.selected{color:#231e18;background:white;font-size:18px;float:left;padding:15px 20px 20px 20px;}

			#login{margin:0 auto;margin-left:40px;}
			.box{width:726px;margin:0;padding:0;}
			
			p{margin-left:40px;}
			
			input.clean{padding:4px;border:1px solid #231e18;}
			
			table{width:900px;text-align:left;margin:20px 0 0 0;}
			table tr.alt{background:#ECECEC;}
			a{color:#231e18;margin-right:10px;}
		</style>
		
		<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/fonts/fonts-min.css" />
		
		<title>The Authentication Library Control Panel</title>
	
	</head>
	<body>

		<div id="header">
			<div id="logo">
				<h1>The Authentication Library Admin Panel</h1>
			</div>
		</div>
	
		<div id="nav_bg">
			<?php $this->load->view($this->config->item('auth_views_root') . 'nav'); ?>
		</div>
		
		<div id="container">