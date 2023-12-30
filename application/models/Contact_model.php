<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_model extends CI_Model
{
    public function TambahData()
    {
        $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $message = $this->input->post('message');

        $query = $this->db->query("INSERT INTO contact (name, phone, email, message) VALUES (?, ?, ?, ?)", array($name, $phone, $email, $message));

        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}