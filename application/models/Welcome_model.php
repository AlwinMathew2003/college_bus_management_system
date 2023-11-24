<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model {
    public function insert_welcome_model($data)
    {
        $this->db->insert('details',$data);
        if ($this->db->affected_rows() > 0) {
            // If successful, also insert into the 'login' table
            $login_data = [
                'Admno' => $data['admno'],
                'email' => $data['email']
            ];
            $this->db->insert('users', $login_data);

            return true;
        }
    }


    public function getBusData() {
        $this->db->select('*');
        $query = $this->db->get('bus');
        return $query->result_array();
    }
    

    public function getStopsData($Bus_id) {
      return  $this->db->select('*')->where('Bus_Id', $Bus_id)->get('stop')->result_array();
       
    //   echo"<pre>";print_r($Bus_id);exit;
    }

    public function get_data() {
        $query = $this->db->get('coordinator'); // Replace 'your_table' with your actual table name
        return $query->result();
    }
}