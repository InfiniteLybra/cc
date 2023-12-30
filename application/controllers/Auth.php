<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Login';
            $this->load->view('auth/login', $data);
        } else {
            $this->login();
        }
    }

    private function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'user_id' => $user['id'],
                        'full_name' => $user['full_name'],
                        'email' => $user['email'],
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('Admin');
                    }
                    redirect('Home');
                } else {
                    $this->session->set_flashdata('message', 'Password Salah');
                    redirect('Auth');
                }
            }
        } else {
            $this->session->set_flashdata('message', 'Username Belum Terdaftar, Silahkan Sign Up');
            redirect('Auth');
        }
    }



    public function registration()
    {
        $this->form_validation->set_rules('username1', 'Username', 'required|trim|alpha_dash');
        $this->form_validation->set_rules('password1', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password1]');
        $this->form_validation->set_rules('fullname1', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email1', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registration';
            $this->load->view('auth/registration', $data);
        } else {
            $username = $this->input->post('username1');
            $fullname = $this->input->post('fullname1');
            $email = $this->input->post('email1');
            $is_username_exists = $this->db->get_where('user', ['username' => $username])->row_array();

            if ($is_username_exists) {
                $this->session->set_flashdata('message', 'Username already exists. Please choose another username.');
                redirect('auth/registration');
            }
            $timestamp = date('l, d-m-Y');
            $data = [
                'full_name' => $fullname,
                'email' => $email,
                'username' => $username,
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => $timestamp,
            ];
            // $this->session->set_userdata($data);

            $this->db->insert('user', $data);
            $this->session->set_flashdata('success', 'Your account has been successfully registered. Please login.');
            redirect('auth');
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('success', 'Akun anda berhasil logout');
        redirect('auth');
    }

    /* End of file Clogin.php and path \application\controllers\Clogin.php */
}
