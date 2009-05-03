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

/**
* The array which holds your user groups and their ID.
* If you have a database table for groups, these ID's must be the same as in the database.
*/
$config['auth_groups'] = array(
							'admin' => '1',
							'editor' => '2',
							'user' => '100'
							);

/**
* The default URI string to redirect to after a successful login.
*/
$config['auth_login'] = 'admin/dashboard/';


/**
* bool TRUE / FALSE
* Determines whether or not users will be remembered by the auth library
*/
$config['auth_remember'] = TRUE;

?>