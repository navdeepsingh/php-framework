<?php

/**
 * 
 * Base Model of Framework
 * 
 */
require "Database.class.php";

class Model extends Database {

	public function open_db_connection() {		
		$connection = $this->connection('mysql');
		return $connection;
	}

	function close_database_connection(&$connection)
	{
	    $connection = null;
	}

	function get_all_posts()
	{
	    $connection = $this->open_db_connection();
	    print_r($connection);

	   $result = $connection->query('SELECT id, source_link FROM qrcodes');

	    $qrcodes = [];
	    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
	        $qrcodes[] = $row;
	    }
	    $this->close_database_connection($connection);

	    return $qrcodes;
	}


}
