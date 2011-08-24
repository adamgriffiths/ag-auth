<?php

function logged_in()
{
	$CI =& get_instance();
	if($CI->ag_auth->logged_in() == TRUE)
	{
		return TRUE;
	}
	
	return FALSE;
}

function username()
{
	$CI =& get_instance();
	return $CI->session->userdata('username');
}

function user_group($group)
{
	$CI =& get_instance();
	
	$system_group = $CI->ag_auth->config['auth_groups'][$group];
	
	if($system_group === $CI->session->userdata('group_id'))
	{
		return TRUE;
	}
}

function user_table()
{
	$CI =& get_instance();
	
	return $CI->ag_auth->user_table;
}

function group_table()
{
	$CI =& get_instance();
	
	return $CI->ag_auth->group_table;
}

?>