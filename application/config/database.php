<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'default';
$active_record = TRUE;

$db['default']['hostname'] = 'localhost';
$db['default']['username'] = '';
$db['default']['password'] = '';
$db['default']['database'] = '';
$db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;

$db['dataL0']['hostname'] = 'sqlite:'.APPPATH.'db/dataL0.sql3';
$db['dataL0']['username'] = '';
$db['dataL0']['password'] = '';
$db['dataL0']['database'] = '';
$db['dataL0']['dbdriver'] = 'pdo';
$db['dataL0']['dbprefix'] = '';
$db['dataL0']['pconnect'] = TRUE;
$db['dataL0']['db_debug'] = TRUE;
$db['dataL0']['cache_on'] = FALSE;
$db['dataL0']['cachedir'] = '';
$db['dataL0']['char_set'] = 'utf8';
$db['dataL0']['dbcollat'] = 'utf8_general_ci';
$db['dataL0']['swap_pre'] = '';
$db['dataL0']['autoinit'] = TRUE;
$db['dataL0']['stricton'] = FALSE;

$db['dataL1']['hostname'] = 'sqlite:'.APPPATH.'db/dataL1.sql3';
$db['dataL1']['username'] = '';
$db['dataL1']['password'] = '';
$db['dataL1']['database'] = '';
$db['dataL1']['dbdriver'] = 'pdo';
$db['dataL1']['dbprefix'] = '';
$db['dataL1']['pconnect'] = TRUE;
$db['dataL1']['db_debug'] = TRUE;
$db['dataL1']['cache_on'] = FALSE;
$db['dataL1']['cachedir'] = '';
$db['dataL1']['char_set'] = 'utf8';
$db['dataL1']['dbcollat'] = 'utf8_general_ci';
$db['dataL1']['swap_pre'] = '';
$db['dataL1']['autoinit'] = TRUE;
$db['dataL1']['stricton'] = FALSE;

$db['dataL2']['hostname'] = 'sqlite:'.APPPATH.'db/dataL2.sql3';
$db['dataL2']['username'] = '';
$db['dataL2']['password'] = '';
$db['dataL2']['database'] = '';
$db['dataL2']['dbdriver'] = 'pdo';
$db['dataL2']['dbprefix'] = '';
$db['dataL2']['pconnect'] = TRUE;
$db['dataL2']['db_debug'] = TRUE;
$db['dataL2']['cache_on'] = FALSE;
$db['dataL2']['cachedir'] = '';
$db['dataL2']['char_set'] = 'utf8';
$db['dataL2']['dbcollat'] = 'utf8_general_ci';
$db['dataL2']['swap_pre'] = '';
$db['dataL2']['autoinit'] = TRUE;
$db['dataL2']['stricton'] = FALSE;

$db['dataL3']['hostname'] = 'sqlite:'.APPPATH.'db/dataL3.sql3';
$db['dataL3']['username'] = '';
$db['dataL3']['password'] = '';
$db['dataL3']['database'] = '';
$db['dataL3']['dbdriver'] = 'pdo';
$db['dataL3']['dbprefix'] = '';
$db['dataL3']['pconnect'] = TRUE;
$db['dataL3']['db_debug'] = TRUE;
$db['dataL3']['cache_on'] = FALSE;
$db['dataL3']['cachedir'] = '';
$db['dataL3']['char_set'] = 'utf8';
$db['dataL3']['dbcollat'] = 'utf8_general_ci';
$db['dataL3']['swap_pre'] = '';
$db['dataL3']['autoinit'] = TRUE;
$db['dataL3']['stricton'] = FALSE;

$db['dataL4']['hostname'] = 'sqlite:'.APPPATH.'db/dataL4.sql3';
$db['dataL4']['username'] = '';
$db['dataL4']['password'] = '';
$db['dataL4']['database'] = '';
$db['dataL4']['dbdriver'] = 'pdo';
$db['dataL4']['dbprefix'] = '';
$db['dataL4']['pconnect'] = TRUE;
$db['dataL4']['db_debug'] = TRUE;
$db['dataL4']['cache_on'] = FALSE;
$db['dataL4']['cachedir'] = '';
$db['dataL4']['char_set'] = 'utf8';
$db['dataL4']['dbcollat'] = 'utf8_general_ci';
$db['dataL4']['swap_pre'] = '';
$db['dataL4']['autoinit'] = TRUE;
$db['dataL4']['stricton'] = FALSE;


/* End of file database.php */
/* Location: ./application/config/database.php */