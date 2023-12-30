<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contact_model');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('contact/index');
        $this->load->view('templates/footer');
    }
    public function add()
	{
		$result = $this->Contact_model->TambahData();
		if ($result == true) {
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
			redirect('Contact');
		} else {
			$this->session->set_flashdata('error', $result); 
			redirect('Contact'); 
		}
	}
}
