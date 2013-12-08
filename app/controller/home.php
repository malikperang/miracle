<?php

class Home extends Controller {
	function __construct()
	{
		parent::__construct();
		echo "Home controller";
		$this->load->view('home');
		$this->load->model('home');

	}
}