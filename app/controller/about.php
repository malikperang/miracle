<?php

class About extends Controller {
	function __construct()
	{
		parent::__construct();
		echo '<br /> about constructor';

	}
	function index()
	{
		$this->load->view('about');
	}
}