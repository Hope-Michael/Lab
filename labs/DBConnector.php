<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'btc3205');

// Creating connection
class DBConnector{
	public $conn;

		function _construct(){
		$this->conn=mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die("Error:" .mysql_error());
		mysql_select_db(DB_NAME, $this->conn);
	}
	public function closeDatabase(){
		mysql_close($this->conn);
	}
}