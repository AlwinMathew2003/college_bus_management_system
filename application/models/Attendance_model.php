<?php
class Attendance_model extends CI_Model {
    public function update_attendance($selected_students, $coordinator_id) {
        // Iterate through the selected students and update the attendance table
        foreach ($selected_students as $student_id => $attendance_data) {
            // Get the value of the radio button for the current student
            $radio_value = $attendance_data;

            // Determine the status based on the radio button value
            $status = ($radio_value == 'yes') ? 'P' : 'A';

            // Build the data to be inserted or updated
            $data = array(
                'user_id' => $student_id,
                'status' => $status,
                'updated_by' => $coordinator_id
            );

            // Update the attendance table
            $this->db->insert('attendance', $data);
        }
    }
    public function getAttendance($data)
    {
                // Assuming $user_details['id'] contains the user ID
                $user_id = $data['profile_data']['id'];

                // Modify the query to match your database structure
                $query = $this->db->get_where('attendance', array('user_id' => $user_id));
        
                // Example: Assuming the attendance table has 'status' and 'date' columns
                // You may need to adjust this based on your actual database schema
                $attendance_data = $query->result_array();
        
                return $attendance_data;
    }
}
