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

    public function manage(){
        $data['page_title'] = "Administration > Manage Users";
        $data['view_file'] = 'manage';
        $data['module'] = 'users';
        $data['users'] = $this->get('created_at DESC');
        $data['total_users'] = $this->count_all();

        echo Modules::run('templates/admin', $data);
    }
}