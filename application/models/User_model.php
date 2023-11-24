<?php
class User_model extends CI_Model {
    public function getStudentsByBusId($bus_id) {
        $this->db->select('*');
        $this->db->from('details');
        $this->db->where('bus_id', $bus_id);
        // You can add more conditions if needed
        $query = $this->db->get();

        return $query->result_array();
    }

    public function getUsers()
    {
        $this->db->where('status', 1);
        $total_columns_with_status_1 = $this->db->count_all_results('details');
        return $total_columns_with_status_1;
    }
    public function getbus()
    {
        $bus = $this->db->count_all('bus');
        return $bus;
    }
    public function getPaid()
    {
        $this->db->where('Paid IS NOT NULL');
        $count = $this->db->count_all('daily_students');
        
        // Select the sum of the 'fees' column from students
        $this->db->where('Paid IS NOT NULL');
        $count1 = $this->db->count_all('students');
        
        // Calculate the overall sum
        $total_count= $count + $count1;

        return $total_count;
    }
    public function getDue()
    {
        $this->db->where('Due_as_on IS NOT NULL');
        $count = $this->db->count_all('daily_students');
        
        // Select the sum of the 'fees' column from students
        $this->db->where('Due_as_on IS NOT NULL');
        $count1 = $this->db->count_all('students');
        
        // Calculate the overall sum
        $total_count1= $count + $count1;

        return $total_count1;
    }
    public function getCoordinator($data)
    {
        $bus_id = $data['profile_data']['bus_id'];

        $this->db->where('bus_id', $bus_id);
        $query = $this->db->get('coordinator');

        return $coordinator_data = $query->row_array();


    }

    public function getFee($data)
    {
        $admno = $data['profile_data']['admno'];

        // Check in the first table
        $this->db->where('Admno', $admno);
        $query1 = $this->db->get('students');
        $result1 = $query1->row_array();

        // Check in the second table
        $this->db->where('Admno', $admno);
        $query2 = $this->db->get('daily_students');
        $result2 = $query2->row_array();

        // Return the row from the first table if found, otherwise return the row from the second table
        return ($result1) ? $result1 : $result2;
    }
}
