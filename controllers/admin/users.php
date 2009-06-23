<?php

class Users extends Application
{
	
	function Users()
	{
		parent::Application();
		$this->auth->restrict('admin'); // restrict this controller to admins only
		$this->load->model($this->models."usermodel", 'users'); // Load the user model - gets lists of users etc
	}
	
	function manage()
	{
		$data = $this->users->users(); // Grab an array of users from the database
		$this->table->set_heading('Username', 'Email', 'Actions'); // Setting headings for the table
		
		foreach($data as $value => $key)
		{
			$actions = anchor("admin/users/edit/".$key['id']."/", "Edit") . anchor("admin/users/delete/".$key['id']."/", "Delete"); // Build actions links
			$this->table->add_row($key['username'], $key['email'], $actions); // Adding row to table
		}
		
		$this->auth->view('users/manage'); // Load the view
	}
	
	function delete($id)
	{
		$this->users->delete($id);
		$this->auth->view('users/delete_success');
	}
	
	function add()
	{
		$this->auth->register(FALSE);
	}
	
	function edit($id)
	{
		$this->auth->register(FALSE, TRUE, $id);
	}
}

?>