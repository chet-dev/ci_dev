<?php if ( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' ); 

class MY_Controller extends MX_Controller 
{
    public $model = "";

    public function __construct() 
    { 
        parent::__construct(); 
    }

    function get($order_by = FALSE) {
        if($order_by) {
            $query = $this->model->get($order_by);
        } else {
            $query = $this->model->get();
        }
        return $query;
    }
}