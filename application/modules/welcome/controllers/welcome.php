<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

	function __construct(){
        parent::__construct();
    }

    public function index(){
        $data['page_title'] = "Welcome to Codeigniter HMVC!";
        $data['view_file'] = 'welcome';
        $data['module'] = 'welcome';
        echo Modules::run('templates/public_bootstrap', $data);
    }
}