<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_model extends CI_Model
{
    public function getallsite()
    {
        return $this->db->get('site')->result_array();
    }
    public function getsitebyid($id)
    {
        return $this->db->get_where('site', ['id' => $id])->row_array();
    }
}
