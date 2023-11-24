<?php
class Attendance extends CI_Controller {
    public function __construct() {
        parent::__construct();
     $this->load->model('Attendance_model');
     
 }

 public function index() {
    $selected_students = $this->input->post('attendance'); {
            // Assuming you have a model to handle database operations
            $this->load->model('Attendance_model');

            // Get the selected checkboxes (student_ids)
            $selected_students = $this->input->post('attendance');
            
            // Get the current coordinator_id from the session
            $coordinator_details = $this->session->userdata('coordinator_details');
            $coordinator_id = $coordinator_details['coordinator_id'];
            
            // Process and update the database
            $this->Attendance_model->update_attendance($selected_students, $coordinator_id);
            
            // Redirect or load another view as needed
            redirect('welcome/c_attendace');
        } 
    }
}
