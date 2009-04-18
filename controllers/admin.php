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

class Admin extends Application
{
	function Admin()
	{
		parent::Application();
	}
	
	function index()
	{
		if($this->auth->logged_in())
		{
			echo("This is the admin section.");
		}
		else
		{
			echo("This is the client section.");
		}
	}
	
	function admin_area()
	{
		// This is only accessible to admins
		$this->auth->restrict('admin');
		echo("admin area");
	}
	
	function editor_area()
	{
		// This is accessible to editors and admins
		$this->auth->restrict('editor');
		echo("editor area");
	}
	
	function user_area()
	{
		// This is accessible to all users
		$this->auth->restrict('user');
		echo("user area");
	}
	
	function users_area()
	{
		// This is accessible to all users too
		$this->auth->restrict();
		echo("user area");
	}
	
	function just_user()
	{
		// This is accessible to only 'users'
		$this->auth->restrict('user', TRUE);
		echo("user area only");
	}
}

?>