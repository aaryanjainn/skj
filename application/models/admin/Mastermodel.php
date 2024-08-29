<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mastermodel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();

        
        
    }

    public function login_user_action($LoginCredentialArr)
    {
        $Where = array(
                        'number' => $LoginCredentialArr['number'], 
                        'password' => md5($LoginCredentialArr['password']), 
                        'isActive' => '1'
                    );

        $this->db->select('*');
        $this->db->from('admin_users');
        $this->db->where($Where);
        $recArr = $this->db->get()->result();
        if ($recArr) :
            return $recArr;
        else :
            return false;
        endif;
    }

    public function insertUser($getFormData)
    {
        $data = $this->db->insert('skj_dailygoldrates', $getFormData);
        return $data;
    }

    public function deleteUser($getUserId)
    {
        $this->db->where("id",$getUserId);
		$resp = $this->db->delete("ots_users");
		return $resp;
    }

    public function editUser($getUserId)
    {
        if($this->input->post('account'))
            $this->db->set('account', $this->input->post('account'));
        if($this->input->post('customer_name'))	
            $this->db->set('customer_name', $this->input->post('customer_name'));
        if($this->input->post('amount'))	
            $this->db->set('amount', $this->input->post('amount'));
        if($this->input->post('sanction_date'))
            $this->db->set('sanction_date', $this->input->post('sanction_date'));
        if($this->input->post('expiry_date'))
            $this->db->set('expiry_date', $this->input->post('expiry_date'));
        $this->db->where('id',$getUserId);
        $data = $this->db->update('ots_users');
        return $data;
    }

    public function getUser($getUserId)
    {
        return $this->db->select('*')->where('id', $getUserId)->get('ots_users')->row_array();	
    }
   

}
