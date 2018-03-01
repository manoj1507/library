<?php
namespace AvgiSolutions\Controller;

use AvgiSolutions\Model\Book;


class Books extends AppController
{

	public function index()
	{
		$this->render(['Users', 'index']);
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
?>