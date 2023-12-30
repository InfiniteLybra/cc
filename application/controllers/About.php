<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }
    public function index()
    {
        $data['site'] = $this->Admin_model->getallsite();
        $this->load->view('templates/header');
        $this->load->view('about/index', $data);
        $this->load->view('templates/footer');
    }
    
}
