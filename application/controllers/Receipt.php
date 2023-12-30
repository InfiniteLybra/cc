<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Receipt extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $reser_id = $this->session->userdata('reser_id');
        $data['reservation'] = $this->Admin_model->getallreservation($reser_id);
        $this->load->view('templates/header');
        $this->load->view('receipt/index', $data);
        // $this->load->view('templates/footer_admin');
    }
}
