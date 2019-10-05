<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('users_model');
        $this->model = $this->users_model;
    }

    public function index(){
        $users = $this->get();
        print_r($users);
    }
}