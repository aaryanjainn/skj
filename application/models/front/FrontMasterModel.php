<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class FrontMasterModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();  
    } 

    public function get_rates()
    {
        return $this->db
        ->select('*')
        ->from('skj_dailygoldrates')
        ->order_by('id', 'desc')
        ->get()
        ->row_array();	
    }
}
