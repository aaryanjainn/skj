<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontController extends CI_Controller
{	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('front/FrontMasterModel', 'FrontMasterModel');
    }

    public function index() {
		// Replace with your actual access token
        $access_token = 'IGQWRObFN3eWtzMTdSSzFJeFpMaXdMRkV6aDh1emVfOWh2RnZAUYWlWd3YtMzRhSmhLQW4xUWZANUjhCRkRkeDB5MFg5eUl3UWxYemR2b1JVMjUtM1UxbENfdkZAwaC1qbkp0NUNsMllEQ0d0aWxmTVRIVExRc0dBN0UZD';
		
        // API endpoint for fetching user's media
        $api_url = "https://graph.instagram.com/me/media?fields=id,caption,media_type,media_url,thumbnail_url,permalink&access_token=$access_token";
		
        // Fetch data from the API
        $response = file_get_contents($api_url);
        $data['feed'] = json_decode($response);
        
        
        $data['rates'] = $this->FrontMasterModel->get_rates();
		
        // Load the view
		$this->load->view('front/index', $data);
    }
}
