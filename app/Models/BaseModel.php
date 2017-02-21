<?php

namespace App\Models;

use App\Libs\DatabaseConfig;

abstract class BaseModel
{
	protected $db;

	public function __construct()
	{
		$this->db = new DatabaseConfig;
	}

	// public function showAll()
	// {
	// 	$query = "SELECT * FROM " . $this->table . " WHERE deleted = 0";
	// 	$stmt = $this->db->prepare($query);
	// 	$stmt->execute();

	// 	return $stmt->fetchAll($this->db::FETCH_ASSOC);
	// }
}