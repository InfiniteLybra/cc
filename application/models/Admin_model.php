<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getallbooked()
    {
        $this->db->where_in('status', ['Submission', 'Booking']);
        return $this->db->get('reservation')->result_array();
    }
    public function getallcheckin()
    {
        $this->db->where('status', 'Check in');
        return $this->db->get('reservation')->result_array();
    }
    public function getallcheckout()
    {
        $this->db->where('status', 'Check Out');
        return $this->db->get('reservation')->result_array();
    }
    public function getallreservation($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('reservation')->result_array();
    }
    public function getallroomcategory()
    {
        return $this->db->get('category_room')->result_array();
    }
    public function getalllog()
    {
        return $this->db->get('history')->result_array();
    }
    public function getalluser()
    {
        return $this->db->get('user')->result_array();
    }
    public function getallroom()
    {
        return $this->db->get('room')->result_array();
    }
    public function getallsite()
    {
        return $this->db->get('site')->result_array();
    }

    public function getroombyid($id)
    {
        return $this->db->get_where('room', array('id' => $id))->row_array();
    }
    public function getcategorybyid($id)
    {
        return $this->db->get_where('category_room', array('id' => $id))->row_array();
    }
    public function update_data_slider()
    {
        $config['upload_path'] = 'assets/images';
        $config['allowed_types'] = 'pdf|PDF|png|PNG|jpg|JPG';
        $config['max_size'] = 10048;
        $this->load->library('upload', $config);

        if (!empty($_FILES['file1']['name'])) {
            $this->upload->do_upload('file1');
            $data1 = $this->upload->data();
            $file1 = $data1['file_name'];
        } else {
            $file1 = $this->db->query("SELECT slider_img1 FROM site")->row()->slider_img1;
        }
        if (!empty($_FILES['file2']['name'])) {
            $this->upload->do_upload('file2');
            $data2 = $this->upload->data();
            $file2 = $data2['file_name'];
        } else {
            $file2 = $this->db->query("SELECT slider_img2 FROM site")->row()->slider_img2;
        }
        if (!empty($_FILES['file3']['name'])) {
            $this->upload->do_upload('file3');
            $data3 = $this->upload->data();
            $file3 = $data3['file_name'];
        } else {
            $file3 = $this->db->query("SELECT slider_img3 FROM site")->row()->slider_img3;
        }
        if (!empty($_FILES['file4']['name'])) {
            $this->upload->do_upload('file4');
            $data4 = $this->upload->data();
            $file4 = $data4['file_name'];
        } else {
            $file4 = $this->db->query("SELECT slider_img4 FROM site")->row()->slider_img4;
        }
        if (!empty($_FILES['file5']['name'])) {
            $this->upload->do_upload('file5');
            $data5 = $this->upload->data();
            $file5 = $data5['file_name'];
        } else {
            $file5 = $this->db->query("SELECT slider_img5 FROM site")->row()->slider_img5;
        }
        if (!empty($_FILES['file6']['name'])) {
            $this->upload->do_upload('file6');
            $data6 = $this->upload->data();
            $file6 = $data6['file_name'];
        } else {
            $file6 = $this->db->query("SELECT slider_img6 FROM site")->row()->slider_img6;
        }
        if (!empty($_FILES['file7']['name'])) {
            $this->upload->do_upload('file7');
            $data7 = $this->upload->data();
            $file7 = $data7['file_name'];
        } else {
            $file7 = $this->db->query("SELECT slider_img7 FROM site")->row()->slider_img7;
        }

        $slider_heading = $this->input->post('slider_heading');
        $slider_text = $this->input->post('slider_text');

        $query = $this->db->query("UPDATE site SET slider_heading = ?, slider_text = ?, slider_img1 = ?, slider_img2 = ?, slider_img3 = ?, slider_img4 = ?, slider_img5 = ?, slider_img6 = ?, slider_img7 = ?", array($slider_heading, $slider_text, $file1, $file2, $file3, $file4, $file5, $file6, $file7));

        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public function addCategory()
    {
        $config['upload_path'] = 'assets/images';
        $config['allowed_types'] = 'pdf|PDF|png|PNG|jpg|JPG';
        $config['max_size'] = 10048; 
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            $error = $this->upload->display_errors();
            return $error; 
        } else {
            $data1 = $this->upload->data();
            $file1 = $data1['file_name'];
        }

        $new_category = $this->input->post('new_category');
        $information = $this->input->post('information');
        $price = $this->input->post('price');

        $query = $this->db->query("INSERT INTO category_room (category, information, price, img ) VALUES (?, ?, ?, ?)", array($new_category, $information, $price, $file1));

        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public function addRoom()
    {
        $room = $this->input->post('room');
        $category = $this->input->post('category');

        $query = $this->db->query("INSERT INTO room (room, category) VALUES (?, ?)", array($room, $category));

        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public function insertRoom($room, $id)
    {
        $updateReservationQuery = $this->db->query("UPDATE reservation SET 
        room = '$room'
        WHERE id = '$id'");

        $updateRoomQuery = $this->db->query("UPDATE room SET 
        status = 'Unavailable'
        WHERE room = '$room'");

        $checkRoomQuery = $this->db->query("SELECT COUNT(*) AS count FROM reservation WHERE room = '$room'");
        $result = $checkRoomQuery->row();

        if ($result->count > 0) {
            $updateStatusQuery = $this->db->query("UPDATE reservation SET 
            status = 'Booking'
            WHERE room = '$room'");
        }


        if ($updateReservationQuery && $updateRoomQuery && (isset($updateStatusQuery) || $result->count == 0)) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteCategory($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('category_room');
    }
    public function deleteUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
    public function deleteRoom($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('room');
    }
    public function deleteLog($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('history');
    }
    public function updatecategory($id)
    {
        $new_category = $this->input->post('new_category');
        $information = $this->input->post('information');
        $price = $this->input->post('price');

        if (!empty($_FILES['file']['name'])) {
            $config['upload_path'] = 'assets/images';
            $config['allowed_types'] = 'pdf|PDF|png|PNG|jpg|JPG';
            $config['max_size'] = 10048; // 2MB
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {
                $error = $this->upload->display_errors();
                // return $error; 
                $data1 = $this->upload->data();
                $file1 = $data1['file_name'];
            }
        } else {
            $file1 = $this->db->query("SELECT img FROM category_room WHERE id = ?", $id)->row()->img;
        }

        $query = $this->db->query("UPDATE category_room SET category = ?, information = ?, price = ?, img = ? WHERE id = ?", array($new_category, $information, $price, $file1, $id));

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function updateStatus($id, $status)
    {
        $this->db->where('id', $id);
        $this->db->update('reservation', ['status' => $status]);
    }
    public function updateStatusRoom($id, $username, $name, $phone, $email, $check_in, $check_out, $adults, $children, $type_room, $message, $date_reserved, $total_hari, $price, $payment, $room, $status)
    {
        $this->db->trans_start(); 

        $this->db->where('id', $id);
        $this->db->update('reservation', ['status' => $status]);

        if ($this->db->affected_rows() > 0) {
            $this->db->where('room', $room);
            $this->db->update('room', ['status' => 'Available']);

            $data = [
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
                'date_reserved' => $date_reserved,
                'total_hari' => $total_hari,
                'price' => $price,
                'payment' => $payment,
                'room' => $room,
                'status' => $status,
                'date_success' => date('l, d-m-Y') 
            ];
            $this->db->insert('history', $data);
            $this->db->where('id', $id);
            $this->db->delete('reservation');
        }

        $this->db->trans_complete(); 

        if ($this->db->trans_status() === FALSE) {
            return false;
        } else {
            return true;
        }
    }

    public function update_booking_status($booking_id, $new_status)
    {
        $this->db->where('id', $booking_id);
        $this->db->update('reservation', ['status' => $new_status]);
    }

    public function update_data_section($data)
    {
        $this->db->update('site', $data);
    }
    public function update_data_history($data)
    {
        $this->db->update('site', $data);
    }
    public function update_data_history_2($data)
    {
        $this->db->update('site', $data);
    }
    public function update_data_history_3($data)
    {
        $this->db->update('site', $data);
    }
    public function update_data_leadership_1($data)
    {
        $this->db->update('site', $data);
    }
    public function update_data_leadership_2($data)
    {
        $this->db->update('site', $data);
    }
    public function update_data_leadership_3($data)
    {
        $this->db->update('site', $data);
    }
    public function updatePayment($reservation_id, $file_name)
    {
        $data = array('payment' => $file_name);
        $this->db->where('id', $reservation_id);
        $this->db->update('reservation', $data);
    }
}
