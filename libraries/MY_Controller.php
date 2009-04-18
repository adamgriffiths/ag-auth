<?php
/**
* Authentication Library
*
* @package Authentication
* @category Libraries
* @author Adam Griffiths
* @link http://programmersvoice.com
* @version 1.0.4
* @copyright Adam Griffiths 2009
*
* Auth provides a powerful, lightweight and simple interface for user authentication 
*/

class Application extends Controller 
{

	function Application()
	{
		parent::Controller();
		$this->load->library('auth');
		$this->load->database();
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