<?php


class Default_Controller extends Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->view('home');
		//$this->get->view('home');
	}

	public function index()
	{
		echo "WE are index control" . '<br />';
	}
}