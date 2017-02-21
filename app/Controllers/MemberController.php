<?php

namespace App\Controllers;

use App\Models\Model;

class MemberController extends BaseController
{
	protected $table;

	public function index()
	{
		return $this->model->showAll();
	}

	public function addMember()
	{
		return $this;
	}
}