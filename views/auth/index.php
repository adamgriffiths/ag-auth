<?php

$this->load->view($this->config->item('auth_views_root') . 'header');

if(isset($data))
{
	$this->load->view($this->config->item('auth_views_root') . 'pages/'.$page, $data);
}
else
{
	$this->load->view($this->config->item('auth_views_root') . 'pages/'.$page);
}

$this->load->view($this->config->item('auth_views_root') . 'footer');

?>