<?php

namespace App\Models;

class MemberModel extends BaseModel
{

	public function showAll()
	{
		$query = 'SELECT * FROM members WHERE deleted = 0';
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
	}

	public function add($data)
	{
		$query = 'INSERT INTO members (librarian_id, name, gender, photo, 
			date_expired) VALUES (:librarian_id, :name, :gender, :photo, 
			:date_expired)';

		$stmt = $this->db->prepare($query);
		$stmt->bindParam(':librarian_id', $data['librarian_id']);
		$stmt->bindParam(':name', $data['name']);
		$stmt->bindParam(':gender', $data['gender']);
		$stmt->bindParam(':photo', $data['photo']);
		$stmt->bindParam(':date_expired', $data['date_expired']);
		$stmt->execute();
	}
}