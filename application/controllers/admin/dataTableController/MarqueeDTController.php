<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MarqueeDTController extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        $this->load->model('admin/dataTableModel/MarqueeDTModel', 'marqueeModel');
    }
    
    
    function getLists(){
        $data = $row = array();
        
        // Fetch member's records
        $memData = $this->marqueeModel->getRows($_POST);
        $see =1;
        $i = $_POST['start'];
        foreach($memData as $member){
            $i++;
            $data[] =   array(
                                $i, 
                                $member->gold_rate, 
                                $member->silver_rate, 
                                $member->created_at, 
                                "
                                    <div class='buttonAll'>
                                        <a class='btn btn-info' href=".base_url().'index.php/editUser/'.$see.">Edit</a> &nbsp 
                                        <button class='btn btn-danger' onclick='deleteUser($see)'>Delete</button> &nbsp
                                    </div>
                                "
                            );
        }
        
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->marqueeModel->countAll(),
            "recordsFiltered" => $this->marqueeModel->countFiltered($_POST),
            "data" => $data,
        );
        
        // Output to JSON format
        echo json_encode($output);
    }
    
}