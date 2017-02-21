<?php

namespace App\Controllers;

class ErrorController extends BaseController
{
	public function index()
	{
		$this->message = "PAGE NOT FOUND";
		return $this->message;
	}
	public function noAction()
	{
		echo "ACTION NOT FOUND";
	}

	public function noMethod()
	{
		echo "PAGE NOT FOUND";
	}
}