<?php

namespace AvgiSolutions\Core;

use AvgiSolutions\Core\Utility\Inflector;
use Illuminate\Support\Arr;

class Controller
{
	/**
	 * The name of the controller.
	 *
	 * @var string
	 */
	public $name = '';

	/**
	 * The name of the controller.
	 *
	 * @var string
	 */
	public $action = '';

	/**
	 * The posted data
	 *
	 * @var array
	 */
	public $data = [];

	/**
	 * The URL data
	 *
	 * @var array
	 */
	public $params = [];

	/**
	 * The controller constructor
	 *
	 * @return void
	 */
	public function __construct()
	{
		if ($this->isPost()) {
			$this->data = collect($_POST);
		}

		if ($this->isGet()) {
			$url = collect(explode('/', $_GET['url']));
			$this->name   = Inflector::classify($url->get(0));
			$this->action = Inflector::camelize(Arr::getNotEmpty($url->toArray(), 1, 'index'));
			$this->params = $url->forget(0)->forget(1)->values();
		}
	}

	/**
	 * To check if the request is post
	 *
	 * @return boolean
	 */
	public function isPost()
	{
		return (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST');
	}

	/**
	 * To check if the request if get
	 *
	 * @return boolean
	 */
	public function isGet()
	{
		return (strtoupper($_SERVER['REQUEST_METHOD']) == 'GET');
	}

	/**
	 * Renders the view.
	 *
	 * @param array $path The Render Path.
	 *
	 * @return string
	 */
	public function render(array $path)
	{
		array_unshift($path, 'View');
		array_unshift($path, PROJECT_PATH);

		echo require_once sprintf('%s.php', path($path));
	}

}
