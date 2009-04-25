<?php

$this->load->view('auth/header');

if(isset($data))
{
	$this->load->view('auth/pages/'.$page, $data);
}
else
{
	$this->load->view('auth/pages/'.$page);
}

$this->load->view('auth/footer');

?>