<?php
/**
* Authentication Library
*
* @package Authentication
* @category Libraries
* @author Adam Griffiths
* @link http://adamgriffiths.co.uk
* @version 1.0.6
* @copyright Adam Griffiths 2009
*
* Auth provides a powerful, lightweight and simple interface for user authentication 
*/



class Application extends Controller 
{

	var $controllers; // These all track root folders for views, models, controllers; specified in Auth config
	var $models;
	var $views;
	
	function Application()
	{
		parent::Controller();
		$this->load->library(array('auth', 'table'));
		$this->load->database();
		$this->load->helper(array('auth', 'url'));
		$this->config->load('auth');
		
		$tmpl = array (
		                    'table_open'          => '<table border="0" cellpadding="4" cellspacing="0">',

		                    'heading_row_start'   => '<tr>',
		                    'heading_row_end'     => '</tr>',
		                    'heading_cell_start'  => '<th>',
		                    'heading_cell_end'    => '</th>',

		                    'row_start'           => '<tr>',
		                    'row_end'             => '</tr>',
		                    'cell_start'          => '<td>',
		                    'cell_end'            => '</td>',

		                    'row_alt_start'       => '<tr class="alt">',
		                    'row_alt_end'         => '</tr>',
		                    'cell_alt_start'      => '<td>',
		                    'cell_alt_end'        => '</td>',

		                    'table_close'         => '</table>'
		              );

		$this->table->set_template($tmpl);

		$this->controllers = $this->config->item('auth_controllers_root');
		$this->models = $this->config->item('auth_models_root');
		$this->views = $this->config->item('auth_views_root');
	}

	function login()
	{
		$this->auth->login();
	}
	
	function logout()
	{
		$this->auth->logout();
	}
	
	function register()
	{
		$this->auth->register();
	}
	
	function username_check($str)
	{
		
		$auth_type = $this->auth->_auth_type($str);
		
		$query = $this->db->query("SELECT * FROM `users` WHERE `$auth_type` = '$str'");
		
		if($query->num_rows === 1)
		{
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('username_check', $this->lang->line('username_callback_error'));
			return FALSE;
		}

	} // function username_check()
	
	function reg_username_check($str)
	{
		$query = $this->db->query("SELECT * FROM `users` WHERE `username` = '$str'");
		
		if($query->num_rows <> 0)
		{
			$this->form_validation->set_message('reg_username_check', $this->lang->line('reg_username_callback_error'));
			return FALSE;
		}
		else
		{
			return TRUE;
		}

	} // function reg_username_check()
	
	function reg_email_check($str)
	{	
		$query = $this->db->query("SELECT * FROM `users` WHERE `email` = '$str'");
		
		if($query->num_rows <> 1)
		{
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('reg_email_check', $this->lang->line('reg_email_callback_error'));
			return FALSE;
		}

	} // function reg_email_check()

}

?>