<?php

namespace AvgiSolutions\Core;

use AvgiSolutions\Core\Module;
use AvgiSolutions\Core\Utility\Inflector;
use AvgiSolutions\Core\Utility\Validate;

class Request
{
	/**
	 * The URL
	 *
	 * @var \Illuminate\Support\Collection
	 */
	protected $url;

	/**
	 * Default Controller.
	 *
	 * @var string
	 */
	protected $controller = 'Users';

	/**
	 * Default Action.
	 *
	 * @var string
	 */
	protected $action = 'login';

	/**
	 * Default Parameters.
	 *
	 * @var string
	 */
	protected $params = [];

	/**
	 * The class constructor.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->_parseUrl();
	}

	/**
	 * Dispatches the request.
	 *
	 * @return void
	 */
	public function dispatch()
	{
		$this->controller = Inflector::classify($this->url->first());
		$this->action     = $this->url->get(1, $this->action);
		$this->params     = $this->url->forget(0)->forget(1)->values()->toArray();

		$request = Module::getClass($this->controller, Module::CONTROLLER);
		if (!Validate::classExists($request)) {
			return http_response_code(404);
		}

		if (!Validate::classHasMethod($request, $this->action)) {
			return http_response_code(500);
		}

		call_user_func_array([(new $request), $this->action], $this->params);
	}

	/**
	 * Parses the URL.
	 *
	 * @return array
	 */
	private function _parseUrl()
	{
		$this->url = isset($_GET['url']) ?
			collect(explode('/', filter_var(rtrim($_GET['url'], '/')), FILTER_SANITIZE_URL)) :
			collect([$this->controller, $this->action]);

		return $this;
	}

}
