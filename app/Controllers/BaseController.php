<?php

namespace App\Controllers;

abstract class BaseController
{
	protected $url;
	protected $action;
	protected $namespace = "App\\Models\\";

	public function __construct($url, $action)
	{
		$this->url = $url;
		$this->action = $action;

		if (isset($this->url)) {
			$model = $this->namespace . ucfirst($url['page']) . "Model";
			$this->model = new $model;
			// var_dump($this->model);
		}
	}

	public function executeAction()
	{
		if (isset($this->action)) {
			return $this->{$this->action}();
		}
	}

	public function executeView()
	{
		// var_dump($this->url);
		// var_dump($this->model->showAll());

		if (!isset($this->url)) {
			$this->url['page'] = "home";
		// } elseif ($this->url[] != "page") {
		// 	$this->url['page'] = "error";
		}

		$viewFile = "app/Views/" . ucfirst($this->url['page']) 
			. "/" . $this->action . ".php";
		// var_dump($this->action);
		// var_dump($viewFile);
		if (file_exists($viewFile)) {
			require $viewFile;
		// } else {
		// 	$this->message = "File Not Found";
		// 	echo $this->message;
		} 
	}
}