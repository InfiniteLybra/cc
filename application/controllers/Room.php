<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Room extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Room_model');
    }

    public function index()
    {
        $data['room'] = $this->Room_model->getallroom();
        $this->load->view('templates/header');
        $this->load->view('room/index', $data);
        $this->load->view('templates/footer');
    }
    public function detail($id)
    {
        $data['room'] = $this->Room_model->getroombyid($id);
        $this->session->set_userdata($data); // Simpan data ke dalam session
        redirect('Reservation'); // Arahkan ke halaman Reservation
    }

    public function update_availability()
    {
        $result = $this->Room_model->up_availability();
        if ($result == true) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('Room');
        } else {
            $this->session->set_flashdata('error', $result);
            redirect('Contact');
        }
    }
}
