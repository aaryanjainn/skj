<?php


defined('BASEPATH') or exit('No direct script access allowed');

// require FCPATH.'vendor/autoload.php';
// require_once __DIR__ . '/../vendor/autoload.php';
// require_once APPPATH.'/mpdf8.0.4/vendor/autoload.php';
// require_once 'C:\xampp_7.2\htdocs\otsAdmin\vendor\autoload.php';
// include('mpdf.php');


// $mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp']);


class DashboardController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Mastermodel');
    }

    public function home()
    {
        $this->load->view("admin/dashboard");
    }

    public function displayFeatures()
    {
        $this->form_validation->set_rules('goldRate', 'Gold Rate', 'trim|required|is_numeric');
        $this->form_validation->set_rules('silverRate', 'Silver Rate', 'trim|required|is_numeric');
        
        if($this->form_validation->run())
        {
            $formData = $this->input->post();
            $formData_dbKeys = array(
                'gold_rate' => $formData['goldRate'], 
                'silver_rate' => $formData['silverRate']
            );
            $response = $this->Mastermodel->insertUser($formData_dbKeys);
            if($response)
            {
                $this->session->set_flashdata('success', 'Form submitted successfully!');
                redirect(base_url("displayFeatures/marquee"));
            }
            else
            {
                $this->session->set_flashdata('msg', 'Oops! Something went wrong.');
            }
        }
        else
        {
            $output['formErrors'] = validation_errors();
        }

        $this->load->view("admin/marquee");
    }
}
