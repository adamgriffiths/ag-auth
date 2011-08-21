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
$config['auth_login'] = 'admin/dashboard';

/**
* The default URI string to redirect to after a successful logout.
*/
$config['auth_logout'] = 'login';

/**
* The URI string to redirect to when a user entered incorrect login details or is not authenticated
*/
$config['auth_incorrect_login'] = 'login';


/**
* bool TRUE / FALSE
* Determines whether or not users will be remembered by the auth library
*/
$config['auth_remember'] = TRUE;

/**
* The following options provide the ability to easily rename the directories
* for your auth views, models, and controllers.
*
* Remember to also update your routes file if you change the controller directory
* MUST HAVE A TRAILING SLASH!
*/
$config['auth_controllers_root'] = 'admin/';
$config['auth_models_root'] = '';
$config['auth_views_root'] = 'auth/';
 
/**
* Set the names for your user tables below (sans prefix, which will be automatically added)
* ex.: your table is named `ci_users` with 'ci_' defined as your dbprefix in config/database.php, so set it to 'users' below
*/
$config['auth_user_table'] = 'users';
$config['auth_group_table'] = 'groups';

?>