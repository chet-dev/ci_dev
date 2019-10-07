<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	function __construct(){
        parent::__construct();
        $this->load->module('users');
        $this->model = $this->users_model;
    }

    public function index(){
        $data['page_title'] = "Administration > Index";
        $data['view_file'] = 'index';
        $data['module'] = 'admin';
        echo Modules::run('templates/admin', $data);
    }
}