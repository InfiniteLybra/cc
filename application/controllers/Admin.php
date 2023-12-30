<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }
    public function index()
    {
        $data['booked'] = $this->Admin_model->getallbooked();
        $data['room'] = $this->Admin_model->getallroom();

        $tanggalSekarang = date('Y-m-d');

        foreach ($data['booked'] as $booking) {
            $checkInDate = date('Y-m-d', strtotime($booking['check_in']));
            $checkOutDate = date('Y-m-d', strtotime($booking['check_out']));

            if ($tanggalSekarang == $checkInDate && $booking['status'] != 'Check In' && $booking['status'] == 'Booking') {
                $this->Admin_model->updateStatus($booking['id'], 'Check In');
            }
            if ($tanggalSekarang == $checkOutDate && $booking['status'] != 'Check Out' && $booking['status'] == 'Booking') {
                $this->Admin_model->updateStatus($booking['id'], 'Check Out');
            }
        }

        if ($this->session->userdata('role_id') == "1") {
            $this->load->view('templates/header_admin');
            $this->load->view('admin/index');
            $this->load->view('templates/footer_admin');
        } else {
            redirect('Home');
        }
    }

    public function project()
    {
        if ($this->session->userdata('role_id') == "1") {
            $this->load->view('templates/header_admin');
            $this->load->view('admin/project');
            $this->load->view('templates/footer_admin');
        } else {
            redirect('Home');
        }
    }
    public function contact()
    {
        if ($this->session->userdata('role_id') == "1") {
            $this->load->view('templates/header_admin');
            $this->load->view('admin/contact');
            $this->load->view('templates/footer_admin');
        } else {
            redirect('Home');
        }
    }
    public function booked()
    {
        if ($this->session->userdata('role_id') == "1") {
            $data['booked'] = $this->Admin_model->getallbooked();
            $data['room'] = $this->Admin_model->getallroom();

            $tanggalSekarang = date('Y-m-d');

            foreach ($data['booked'] as $booking) {
                $checkInDate = date('Y-m-d', strtotime($booking['check_in']));
                $checkOutDate = date('Y-m-d', strtotime($booking['check_out']));

                if ($tanggalSekarang == $checkInDate && $booking['status'] != 'Check In') {
                    $this->Admin_model->updateStatus($booking['id'], 'Check In');
                }
                if ($tanggalSekarang == $checkOutDate && $booking['status'] != 'Check Out') {
                    $this->Admin_model->updateStatus($booking['id'], 'Check Out');
                }
            }

            $this->load->view('templates/header_admin');
            $this->load->view('admin/booked', $data);
            $this->load->view('templates/footer_admin');
        } else {
            redirect('Home');
        }
    }

    public function checkin()
    {

        $data['checkin'] = $this->Admin_model->getallcheckin();
        $tanggalSekarang = date('Y-m-d');

        foreach ($data['checkin'] as $checkin) {
            $checkOutDate = date('Y-m-d', strtotime($checkin['check_out']));
            if ($tanggalSekarang == $checkOutDate && $checkin['status'] != 'Check Out') {
                $this->Admin_model->updateStatus($checkin['id'], 'Check Out');
            }
        }

        $this->load->view('templates/header_admin');
        $this->load->view('admin/checkin', $data);
        $this->load->view('templates/footer_admin');
    }

    public function checkout()
    {
        $data['checkout'] = $this->Admin_model->getallcheckout();
        $data['room'] = $this->Admin_model->getallroom();
        $tanggalSekarang = date('Y-m-d');

        foreach ($data['checkout'] as $checkout) {
            $checkOutDate = date('Y-m-d', strtotime($checkout['check_out']));
            if ($tanggalSekarang > $checkOutDate && $checkout['status'] != 'Success') {
                $this->Admin_model->updateStatusRoom($checkout['id'], $checkout['username'], $checkout['name'], $checkout['phone'], $checkout['email'], $checkout['check_in'], $checkout['check_out'], $checkout['adults'], $checkout['children'], $checkout['type_room'], $checkout['message'], $checkout['date_reserved'], $checkout['total_hari'], $checkout['price'], $checkout['payment'], $checkout['room'], 'Success');
            }
        }
        $this->load->view('templates/header_admin');
        $this->load->view('admin/checkout', $data);
        $this->load->view('templates/footer_admin');
    }
    public function roomcategory()
    {
        if ($this->session->userdata('role_id') == "1") {
            $data['roomcategory'] = $this->Admin_model->getallroomcategory();
            $this->load->view('templates/header_admin');
            $this->load->view('admin/roomcategory', $data);
            $this->load->view('templates/footer_admin');
        } else {
            redirect('Home');
        }
    }
    public function log()
    {
        if ($this->session->userdata('role_id') == "1") {
            $data['log'] = $this->Admin_model->getalllog();
            $this->load->view('templates/header_admin');
            $this->load->view('admin/log', $data);
            $this->load->view('templates/footer_admin');
        } else {
            redirect('Home');
        }
    }
    public function room()
    {
        if ($this->session->userdata('role_id') == "1") {
            $data['roomcategory'] = $this->Admin_model->getallroomcategory();
            $data['room'] = $this->Admin_model->getallroom();
            $this->load->view('templates/header_admin');
            $this->load->view('admin/room', $data);
            $this->load->view('templates/footer_admin');
        } else {
            redirect('Home');
        }
    }
    public function user()
    {
        if ($this->session->userdata('role_id') == "1") {
            $data['user'] = $this->Admin_model->getalluser();
            $this->load->view('templates/header_admin');
            $this->load->view('admin/user', $data);
            $this->load->view('templates/footer_admin');
        } else {
            redirect('Home');
        }
    }
    public function site()
    {
        if ($this->session->userdata('role_id') == "1") {
            $data['site'] = $this->Admin_model->getallsite();
            $this->load->view('templates/header_admin');
            $this->load->view('admin/site', $data);
            $this->load->view('templates/footer_admin');
        } else {
            redirect('Admin');
        }
    }
    public function addcategory()
    {
        $result = $this->Admin_model->addCategory();
        if ($result == true) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('Admin/roomcategory');
        } else {
            $this->session->set_flashdata('error', $result);
            redirect('Admin/roomcategory');
        }
    }
    public function insertroom($room, $id)
    {
        $result = $this->Admin_model->insertRoom($room, $id);
        if ($result == true) {
            $data['booked'] = $this->Admin_model->getallbooked();
            $data['room'] = $this->Admin_model->getallroom();

            $tanggalSekarang = date('Y-m-d');

            foreach ($data['booked'] as $booking) {
                $checkInDate = date('Y-m-d', strtotime($booking['check_in']));
                $checkOutDate = date('Y-m-d', strtotime($booking['check_out']));

                if ($tanggalSekarang == $checkInDate && $booking['status'] != 'Check In' && $booking['status'] == 'Booking') {
                    $this->Admin_model->updateStatus($booking['id'], 'Check In');
                }
                if ($tanggalSekarang == $checkOutDate && $booking['status'] != 'Check Out' && $booking['status'] == 'Booking') {
                    $this->Admin_model->updateStatus($booking['id'], 'Check Out');
                }
            }
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('Admin/booked');
        } else {
            $this->session->set_flashdata('error', $result);
            redirect('Admin/booked');
        }
    }
    public function addroom()
    {
        $result = $this->Admin_model->addRoom();
        if ($result == true) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('Admin/room');
        } else {
            $this->session->set_flashdata('error', $result);
            redirect('Admin/room');
        }
    }
    public function deletecategory($id)
    {
        $this->Admin_model->deleteCategory($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Admin/roomcategory');
    }
    public function deleteuser($id)
    {
        $this->Admin_model->deleteUser($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Admin/user');
    }
    public function deleteroom($id)
    {
        $this->Admin_model->deleteRoom($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Admin/room');
    }
    public function deletelog($id)
    {
        $this->Admin_model->deleteLog($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Admin/log');
    }
    public function updatecategory($id)
    {
        $result = $this->Admin_model->updatecategory($id);
        if ($result == true) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('Admin/roomcategory');
        } else {
            $this->session->set_flashdata('error', $result); 
            redirect('Admin/roomcategory'); 
        }
    }

    public function getchange()
    {
        echo json_encode($this->Admin_model->getcategorybyid($_POST['id']));
    }
    public function getroombyid($id)
    {
        $room = $this->Admin_model->getroombyid($id);
        header('Content-Type: application/json');
        echo json_encode($room);
    }
    public function getcategorybyid($id)
    {
        $room = $this->Admin_model->getcategorybyid($id);
        header('Content-Type: application/json');
        echo json_encode($room);
    }

    public function update_data_section()
    {
        $section_heading = $this->input->post('section_heading');
        $section_text = $this->input->post('section_text');


        $data = array(
            'section_heading' => $section_heading,
            'section_text' => $section_text
        );

        $this->Admin_model->update_data_section($data);
        redirect('Admin/site');
    }
    public function update_data_history()
    {
        $heading_1 = $this->input->post('heading_1');
        $heading_tahun_1 = $this->input->post('heading_tahun_1');
        $heading_text_1 = $this->input->post('heading_text_1');


        $data = array(
            'heading_1' => $heading_1,
            'heading_tahun_1' => $heading_tahun_1,
            'heading_text_1' => $heading_text_1
        );

        $this->Admin_model->update_data_history($data);
        redirect('Admin/site');
    }
    public function update_data_history_2()
    {
        $heading_2 = $this->input->post('heading_2');
        $heading_tahun_2 = $this->input->post('heading_tahun_2');
        $heading_text_2 = $this->input->post('heading_text_2');

        $data = array(
            'heading_2' => $heading_2,
            'heading_tahun_2' => $heading_tahun_2,
            'heading_text_2' => $heading_text_2
        );

        $this->Admin_model->update_data_history_2($data);
        redirect('Admin/site');
    }
    public function update_data_history_3()
    {
        $heading_3 = $this->input->post('heading_3');
        $heading_tahun_3 = $this->input->post('heading_tahun_3');
        $heading_text_3 = $this->input->post('heading_text_3');


        $data = array(
            'heading_3' => $heading_3,
            'heading_tahun_3' => $heading_tahun_3,
            'heading_text_3' => $heading_text_3
        );

        $this->Admin_model->update_data_history_3($data);
        redirect('Admin/site');
    }
    public function update_data_leadership_1()
    {
        $leadership_name_1 = $this->input->post('leadership_name_1');
        $leadership_title_1 = $this->input->post('leadership_title_1');
        $leadership_text_1 = $this->input->post('leadership_text_1');


        $data = array(
            'leadership_name_1' => $leadership_name_1,
            'leadership_title_1' => $leadership_title_1,
            'leadership_text_1' => $leadership_text_1
        );

        $this->Admin_model->update_data_leadership_1($data);
        redirect('Admin/site');
    }
    public function update_data_leadership_2()
    {
        $leadership_name_2 = $this->input->post('leadership_name_2');
        $leadership_title_2 = $this->input->post('leadership_title_2');
        $leadership_text_1 = $this->input->post('leadership_text_1');


        $data = array(
            'leadership_name_2' => $leadership_name_2,
            'leadership_title_2' => $leadership_title_2,
            'leadership_text_1' => $leadership_text_1
        );

        $this->Admin_model->update_data_leadership_2($data);
        redirect('Admin/site');
    }
    public function update_data_leadership_3()
    {
        $leadership_name_3 = $this->input->post('leadership_name_3');
        $leadership_title_3 = $this->input->post('leadership_title_3');
        $leadership_text_3 = $this->input->post('leadership_text_3');


        $data = array(
            'leadership_name_3' => $leadership_name_3,
            'leadership_title_3' => $leadership_title_3,
            'leadership_text_3' => $leadership_text_3
        );

        $this->Admin_model->update_data_leadership_3($data);
        redirect('Admin/site');
    }
    public function update_data_slider()
    {
        $result = $this->Admin_model->update_data_slider();
        if ($result == true) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('Admin/site');
        } else {
            $this->session->set_flashdata('error', $result);
            redirect('Admin/site');
        }
    }
    public function uploadpayment()
    {

        $config['upload_path'] = 'assets/upload/pembayaran';
        $config['allowed_types'] = 'jpg|jpeg|png|pdf'; 
        $config['max_size'] = 10048; 

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('payment')) {
            $data = $this->upload->data();
            $file_name = $data['file_name'];


            $reservation_id = $this->input->post('reservation_id');
            $this->Admin_model->updatePayment($reservation_id, $file_name);

            redirect('Home'); 
        } else {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        }
    }
}
