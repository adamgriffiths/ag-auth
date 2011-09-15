<?php
/**
* Authentication Library
*
* @package Authentication
* @category Libraries
* @author Adam Griffiths
* @link http://adamgriffiths.co.uk
* @version 2.0.3
* @copyright Adam Griffiths 2011
*
* Auth provides a powerful, lightweight and simple interface for user authentication .
*/

class AG_Auth_model extends CI_Model
{
	var $user_table; // The user table (prefix + config)
	var $group_table; // The group table (prefix + config)
	
	public function __construct()
	{
		parent::__construct();

		log_message('debug', 'Auth Model Loaded');
		
		$this->config->load('ag_auth');
		$this->load->database();

		$this->user_table = $this->config->item('auth_user_table');
		$this->group_table = $this->config->item('auth_group_table');
	}
	
	public function login_check($username, $field_type)
	{
		$query = $this->db->get_where($this->user_table, array($field_type => $username));
		$result = $query->row_array();
		
		return $result;
	}
	
	public function register($username, $password, $email)
	{
		if($this->db->set('username', $username)->set('password', $password)->set('email', $email)->set('group_id', '100')->insert($this->user_table))
		{
			return TRUE;
		}
		
		return FALSE;
	}
	
	public function field_exists($value)
	{
		
		$field_name = (valid_email($value)  ? 'email' : 'username');
		
		$query = $this->db->get_where($this->user_table, array($field_name => $value));
		
		if($query->num_rows() <> 0)
		{
			return FALSE;
		}
		
		return TRUE;
	}
}

/* End of file: ag_auth_model.php */
/* Location: application/models/auth_model.php */