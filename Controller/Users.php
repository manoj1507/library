<?php

namespace AvgiSolutions\Controller;

class Users extends AppController
{

	public function index()
	{
		$this->render(['Users', 'login']);
	}

	public function add()
	{

	}

	public function edit($id)
	{
		pr($id);
	}

	public function view($id)
	{
		pr($id);
	}

	public function delete($id)
	{
		pr($id);
	}

	public function login()
	{
		pr($id);
	}

}
