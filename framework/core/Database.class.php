<?php
/**
*
* Database Class
* Factory Pattern
*/
class Database {

	private $host, $dbname, $username, $password;

	public function __construct($host, $username, $password, $dbname = '') {
		$this->host = $host;		
		$this->username = $username;
		$this->password = $password;
		$this->dbname = $dbname;
	}

	public function connection($type) {
		switch ($type) {
	      case 'mysql':	        
	        $connection = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->username, $this->password);
	        return $connection;
	      case 'mongodb':
	        $connection = 'mongodb://' . $this->host . ':27017';
	        return $connection;
	      default:
	        throw new Exception("Unrecognized database");
    	}
	}

}