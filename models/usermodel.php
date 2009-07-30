<?php

class Usermodel extends Model
{

    function Usermodel()
    {
        parent::Model();
    }

	function users()
	{
		$user_table = user_table();
		$query = $this->db->query("SELECT * FROM `$user_table` ORDER BY `id` ASC");
		return $query->result_array();
	}
	
	function delete($id)
	{
		$user_table = user_table();
		$this->db->query("DELETE FROM `$user_table` WHERE `id` = '$id'");
	}
	
	function edit($id)
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[40]|callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[12]');
		$this->form_validation->set_rules('remember', 'Remember Me');
	}
}

?>