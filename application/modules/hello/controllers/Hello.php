<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends MX_Controller {

	public function index()
	{
		// One method to run module test --> echo Modules::run('test/index');
		
		$this->load->module('test');
		$this->test->index();
	}
}
