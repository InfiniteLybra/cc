<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Room_model extends CI_Model
{
    public function getallroom()
    {
        return $this->db->get('category_room')->result_array();
    }
    public function getroombyid($id)
    {
        return $this->db->get_where('category_room', ['id' => $id])->row_array();
    }

    public function up_availability()
    {
        
        $category = $this->input->post('category');
        var_dump($category);

        $query = $this->db->query("INSERT INTO reservation (type_room) VALUES (?)", array($category));

        if ($query) {
            return true;
        } else {
            return false;
        }
    }
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