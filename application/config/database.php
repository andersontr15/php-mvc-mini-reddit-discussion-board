<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$active_group = 'default';
$active_record = TRUE;

if(ENVIRONMENT == 'production')
{
	$db['default']['hostname'] = 'ahmxn6q9c3.database.windows.net,1433';
	$db['default']['username'] = 'theo';
	$db['default']['password'] = 'Anderson1993!';
	$db['default']['database'] = '';
}
else
{
	$db['default']['hostname'] = 'ahmxn6q9c3.database.windows.net,1433';
	$db['default']['username'] = 'theo';
	$db['default']['password'] = 'Anderson1993!';
	$db['default']['database'] = '';
}
$db['default']['dbdriver'] = 'mysqli';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = FALSE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;

//end of database.php