<?php

class Database
{
	public $db;
	public $db_host = 'localhost';
	public $db_user = 'root';
	public $db_pass = '';
	public $db_name = 'crud';

	public function __construct ()
	{
		$this->db = new mysqli(
			$this->db_host,
			$this->db_user,
			$this->db_pass,
			$this->db_name
		);
	}
}

$database = new Database;
