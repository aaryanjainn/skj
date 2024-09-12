<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontController extends CI_Controller
{	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('front/FrontMasterModel', 'FrontMasterModel');
    }

    public function index()
    {
		// Replace with your actual access token
        $access_token = 'IGQWRQMm1IMzBUV0tWcTR1aTdPaDF6QnBYbXVGQjlWSWhKLWJLSmVWYnhmYVdxdU1JV1Q2SUFsMUs0MlhtcUpXbWhNRGcxbTY4R1NhREhSbEI2UzBvcmN1UWNyMTVEMTVhcXUwRDBxTmQ5V1hSSTZAfVnhTbURnQU0ZD';
		
        // API endpoint for fetching user's media
        $api_url = "https://graph.instagram.com/me/media?fields=id,caption,media_type,media_url,thumbnail_url,permalink&access_token=$access_token";

        // Fetch data from the API
        $response = @file_get_contents($api_url);
        if ($response === false) {
            $data['feed'] = "";
        } else {
            $data['feed'] = json_decode($response);
        }        
        
        $data['rates'] = $this->FrontMasterModel->get_rates();
		
        // Load the view
		$this->load->view('front/index', $data);
    }

    public function instaMart()
    {
        epd("heyyy");
    }
}
