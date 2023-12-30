<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reservation extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Reservation_model');
	}

	public function index()
	{
		$reser_id = $this->session->userdata('reser_id');
		$username = $this->session->userdata('username');
		$email = $this->session->userdata('email');
		$data['reservation'] = $this->Reservation_model->getreserbyid($reser_id);
		// var_dump($data);die;
		$this->load->view('templates/header');
		$this->load->view('reservation/index', $data);
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$reser_id = $this->session->userdata('reser_id');
		$result = $this->Reservation_model->updatedata($reser_id);
		if ($result == true) {
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
			redirect('Receipt');
		} else {
			$this->session->set_flashdata('error', $result);
			redirect('Reservation');
		}
	}
	public function availability()
	{
		$result = $this->Reservation_model->availability();
		if ($result == true) {
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
			redirect('Room');
		} else {
			$this->session->set_flashdata('error', $result);
			redirect('Contact');
		}
	}
	public function update_availability()
	{
		$reser_id = $this->session->userdata('reser_id');
		// var_dump($reser_id);die;
		// Pastikan $user_id tidak null sebelum digunakan di dalam pemanggilan fungsi up()
		if ($reser_id !== null) {
			$result = $this->Reservation_model->up($reser_id);

			if ($result == true) {
				$this->session->set_flashdata('success', 'Data berhasil disimpan');
				redirect('Reservation');
			} else {
				$this->session->set_flashdata('error', $result);
				redirect('Home');
			}
		} else {
			// Handle jika $user_id null (tidak ditemukan dari getuserid)
			$this->session->set_flashdata('error', 'User ID tidak ditemukan');
			redirect('Home');
		}
	}
}
