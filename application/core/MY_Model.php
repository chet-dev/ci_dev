<?php if ( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' ); 

class MY_Model extends CI_Model
{
    public $table = "";

    public function __construct() 
    { 
        parent::__construct(); 
    }

    function get($order_by = FALSE) {
        if($order_by) {
            $this->db->order_by($order_by);
            $result = $this->db->get($this->table);
        } else {
            $result = $this->db->get($this->table);
        }
        return $result->result();
    }
}