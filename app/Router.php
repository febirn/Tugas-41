<?php

namespace App;

class Router
{
	private $url;
	private $controller;
	private $action;

	private $namespace = "App\\Controllers\\";

	public function __construct($url)
	{
		$this->error = $this->namespace . 'ErrorController';
		
		if (!empty($_GET)) {
			$this->url = $_GET;
		}

		if (isset($this->url['page'])) {
			$this->controller = $this->namespace . ucfirst($this->url['page'] 
				. "Controller");
		} elseif (!isset($this->url)) {
			$this->controller = $this->namespace . 'HomeController';
		}

		if (isset($this->url['action'])) {
			$this->action = $this->url['action'];
		} else {
			$this->action = 'index';
		}
	}

	public function createController()
	{ 
		if (class_exists($this->controller)) {
			$parent = class_parents($this->controller);
			// var_dump($this->controller);
			if (in_array($this->namespace . 'BaseController', $parent)) {
				if (method_exists($this->controller, $this->action)) {
					return new $this->controller($this->url, $this->action);
				} else {
					// $this->message = "Action {$this->action} not exists";
					// echo $this->message;
					$this->controller = $this->error;
					$this->action = 'noAction';
					return new $this->controller($this->url, $this->action);
				}
			} else {
				$this->message = "Method {$this->action} not exists";
				echo $this->message;
			}
		} else {
			// $this->message = "Method {$this->action} not exists";
			// echo $this->message;
			$this->controller = $this->error;
			$this->action = 'noMethod';
			return new $this->controller($this->url, $this->action);
		}
	}
}