<?php

namespace App\Libs;

class DatabaseConfig extends \PDO
{
	private $db;

	public function __construct()
	{
		$this->db = parent::__construct(
			'mysql:host=localhost; dbname=db_library_v1', 'root', 'root'
		);
		$this->setAttribute(parent::ATTR_DEFAULT_FETCH_MODE, 
			parent::FETCH_ASSOC);
	}
}