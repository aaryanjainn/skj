<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller
{	
    public function __construct() {
        parent::__construct();
        $this->load->model('admin/mastermodel');   
        
        // if (!empty($this->session->userdata('loginid')))
        // {
        //     redirect(base_url("dashboard"));
        // }
    }
    public function index()
	{	 
		$this->load->view('admin/login');
    }


    public function loginchecker()
    {
        $number = $this->input->post('number');
        $password = $this->input->post('password');

        $output['student_name'] = $number;
        $output['student_fname'] = $password;

        $this->form_validation->set_rules('number', "phone number", 'trim|required');
        $this->form_validation->set_rules('password', "password", 'trim|required');

        if($this->form_validation->run())
		{
            $LoginCredentialArr = array(
                'number' => $number, 
                'password' => $password
            );
            $user_details = $this->mastermodel->login_user_action($LoginCredentialArr);
            // epd($user_details);
            if ($user_details)
            {
                $this->session->set_userdata(array(
                                        'loginid' => $user_details[0]->id, 
                                    ));
                redirect(base_url("dashboard"));
            }
            else
            {
                $output['otpError'] = "Your Login Credential is Invalid.";
            }
        }
        else
        {
            $output['otpError'] = validation_errors();
        }
        $this->load->view("admin/login",$output);
    }


    public function logout()
    {
        
        $this->session->sess_destroy();
        $this->session->unset_userdata('loginid');
        $this->session->unset_userdata('username');
        $this->session->set_userdata(array('loginid' => null, 'username' => null));
        redirect(base_url("admin"));
    }

}
