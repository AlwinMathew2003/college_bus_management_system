<?php
class Details_model extends CI_Model {
    public function getPendingRequests() {
        // Assuming 'details' is your table name
        $this->db->select('id, name, updated'); // Adjust fields as needed
        $this->db->from('details');
        $this->db->where('status', 0);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function updateStatus($id) {
        // Update the 'status' field to 1 and record the time
        $this->db->set('status', 1);
        $this->db->set('updated', date('Y-m-d H:i:s'));
        $this->db->where('id', $id);
        $this->db->update('details');
    }
}