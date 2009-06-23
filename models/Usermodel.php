<?php

class Usermodel extends Model
{

    function Usermodel()
    {
        parent::Model();
    }

	function users()
	{
		$query = $this->db->query("SELECT * FROM `users` ORDER BY `id` ASC");
		return $query->result_array();
	}
	
	function delete($id)
	{
		$this->db->query("DELETE FROM `users` WHERE `id` = '$id'");
	}
	
	function edit($id)
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[40]|callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[12]');
		$this->form_validation->set_rules('remember', 'Remember Me');
	}
}

?>