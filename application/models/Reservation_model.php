<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Ramsey\Uuid\Uuid;

require_once FCPATH . 'vendor/autoload.php';

class Reservation_model extends CI_Model
{
    public function availability()
    {
        $check_in = $this->input->post('check_in');
        $check_out = $this->input->post('check_out');
        $adults = $this->input->post('adults');
        $children = $this->input->post('children');

        // Mendapatkan nilai dari sesi
        $user_id_from_session = $this->session->userdata('user_id');

        // Membuat UUID baru
        $uuid = Uuid::uuid4()->toString();

        // Menggabungkan nilai sesi, karakter '_', dan UUID
        $user_id = $user_id_from_session . '_' . $uuid;
        // var_dump($user_id);die;
        $this->session->set_userdata('reser_id', $user_id);

        $query = $this->db->query("INSERT INTO reservation (id, check_in, check_out, adults, children) VALUES (?, ?, ?, ?, ?)", array($user_id, $check_in, $check_out, $adults, $children));

        if ($query) {
            return true;
        } else {
            return false;
        }
    }


    public function up($user_id)
    {
        // var_dump($user_id);
        // die;
        $category = $this->input->post('category');

        $this->db->where('category', $category); // Gantilah 'nama_kolom_kategori' dengan nama kolom sebenarnya di tabel category_room
        $categoryQuery = $this->db->get('category_room');

        if ($categoryQuery->num_rows() > 0) {
            // Kategori sudah ada di tabel category_room, dapatkan nilai kolom 'price'
            $price = $categoryQuery->row()->price;

            // Update nilai di tabel reservation
            $data = array(
                'type_room' => $category,
                'price' => $price
            );

            $this->session->set_userdata($data);

            $this->db->where('id', $user_id);
            $query = $this->db->update('reservation', $data);

            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            // Kategori tidak ada di tabel category_room, tangani sesuai kebutuhan
            return false;
        }
    }

    public function getreserbyid($id)
    {
        return $this->db->get_where('reservation', ['id' => $id])->row_array();
    }
    public function getuserid($id)
    {
        return $this->db->get_where('reservation', ['id' => $id])->row_array();
    }

    public function updatedata($user_id)
    {
        $username = $this->session->userdata('username');
        $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $check_in = $this->input->post('check_in');
        $check_out = $this->input->post('check_out');
        $adults = $this->input->post('adults');
        $children = $this->input->post('children');
        $type_room = $this->input->post('type_room');
        $message = $this->input->post('message');
        $timestamp = date('l, d-m-Y');

        // $user_id = $this->session->userdata('user_id');
        $price = $this->session->userdata('price');
        $price = floatval(str_replace(".", "", $price));

        $date_format = "j F, Y"; // Format tanggal yang sesuai
        $date1 = DateTime::createFromFormat($date_format, $check_in);
        $date2 = DateTime::createFromFormat($date_format, $check_out);

        $interval = $date1->diff($date2);

        $selisih_hari = $interval->days;
        // var_dump($selisih_hari);die;
        $allprice = $selisih_hari * $price;
        $formatted_price = number_format($allprice, 0, ',', '.');
        // var_dump($formatted_price);die;

        $data = array(
            'username' => $username,
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'check_in' => $check_in,
            'check_out' => $check_out,
            'adults' => $adults,
            'children' => $children,
            'type_room' => $type_room,
            'message' => $message,
            'date_reserved' => $timestamp,
            'total_hari' => $selisih_hari,
            'price' => $formatted_price
        );

        $this->db->where('id', $user_id);
        $query = $this->db->update('reservation', $data);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}

// $query = $this->db->query("INSERT INTO reservation (name, phone, email, check_in, check_out, adults, children, type_room, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)", array($name, $phone, $email, $check_in, $check_out, $adults, $children, $type_room, $message));