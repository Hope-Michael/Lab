<?php 
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('Db_NAME','btc3205');

class DBConnector{
    public $conn;

    function __construct()
    {
        $this->conn=mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die("Error:" .mysql_error());
		mysql_select_db(Db_NAME, $this->conn);
    }

    public function closeDatabase(){
        mysqli_close($this->conn);
    }
}
?>