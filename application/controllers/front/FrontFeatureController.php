<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontFeatureController extends CI_Controller
{	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('front/FrontMasterModel', 'FrontMasterModel');
    }

    public function instamart()
    {
        $this->load->view('front/instamart');
    }
}
