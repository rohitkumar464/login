<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
date_default_timezone_set('Asia/Kolkata');
$root = "http://" . $_SERVER['HTTP_HOST'];
$root .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
$constants['base_url'] = $root;
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'webkul');
define('DB_DATABASE', 'myDB');

define('SITE_URL', $constants['base_url']);
define('HTTP_BOOTSTRAP_PATH', $constants['base_url'] . 'assets/vendor/');
define('HTTP_CSS_PATH', $constants['base_url'] . 'assets/css/');
define('HTTP_JS_PATH', $constants['base_url'] . 'assets/js/');
// windows path
//define('BASH_PATH', 'C:/xampp/htdocs/login-registration-system-using-php-oops-mysql/');
// ubuntu path
define('BASH_PATH', '/var/www/login-registration-system-/');
// MAC path
// define('BASH_PATH', '/Applications/XAMPP/htdocs/login-registration-system-using-php-oops-mysql/');

class DBConnection {
	private $_con;
	function __construct(){
		$this->_con = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE);		
		if ($this->_con->connect_error) die('Database error -> ' . $this->_con->connect_error);
	}
	// return Connection
	function returnConnection() {
		return $this->_con;
	}
}
