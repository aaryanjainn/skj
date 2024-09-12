<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller
{	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('front/FrontMasterModel', 'FrontMasterModel');
    }

    public function userLogin()
    {
        $this->load->view('front/login');
    }
}
