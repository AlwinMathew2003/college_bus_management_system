<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    	public function __construct() {
       		parent::__construct();
        	$this->load->model('Welcome_model');
			$this->load->model('Details_model');
			$this->load->model('User_model');
    	}

		public function index()
		{
			$this->load->view('Auth/login');
		}
		public function admin()
		{
			// $this->load->model('auth_model');
			$data['bus'] = $this->User_model->getbus();
			$data['total_users'] = $this->User_model->getUsers();
			$data['result'] = $this->Welcome_model->get_data();
			$data['total_count'] = $this->User_model->getPaid();
			$data['total_count1'] = $this->User_model->getDue();
			$this->load->view('dashboard/admin',$data);
		}
		public function coordinator()
		{ 
			
			// Retrieve coordinator details from session
		$coordinator_details = $this->session->userdata('coordinator_details');
	  // Load the Details_model
	  $this->load->model('Details_model');

	  // Get the pending requests from the details table
	  $data['pending_requests'] = $this->Details_model->getPendingRequests();
  
	  // Pass coordinator details and pending requests to the coordinator dashboard view
	  $this->load->view('dashboard/coordinator', array('coordinator_details' => $coordinator_details, 'pending_requests' => $data['pending_requests']));
		}


		public function updateStatus() {
			if ($this->input->is_ajax_request()) {
				$userId = $this->input->post('userId');

				// Load your model
				$this->load->model('Details_model'); // Replace 'Your_Model' with your actual model name
				$this->Details_model->updateStatus($userId);

	
				echo 'User ID ' . $userId . ' status updated successfully';
			} else {
				show_404(); // Handle non-AJAX requests if necessary
			}
		}

		public function c_attendace()
		{ 
			$coordinator_details = $this->session->userdata('coordinator_details');

			// Load the coordinator dashboard view and pass the details
			$bus_id = $coordinator_details['bus_id'];

			$this->db->where('bus_id', $bus_id);
			$query_students = $this->db->get('details');

			// Get the result as an array
			$result_students = $query_students->result_array();
			// Pass data to the view
			$data = array(
    		'coordinator_details' => $coordinator_details,
    		'result_students' => $result_students
			);

			// Load the view and pass the data
			$this->load->view('dashboard/attendance', $data);
		}

		public function form()
		{
			$this->load->model('Welcome_model');
			$busData['bus'] = $this->Welcome_model->getBusData();
			$this->load->view('Form/form',$busData);
		}
		public function user()
		{
			$this->load->view('dashboard/user');
		}
		public function get_stops() {
			$this->load->model('Welcome_model');
		   extract($_REQUEST);
			// print_r($_REQUEST);exit;        
			$stopData = $this->Welcome_model->getStopsData($Bus_id);
			// print_r($stopData);exit;    
			echo json_encode($stopData);
		}
	
		public function insert()
		{
			$data= [
				'admno'=> $this->input->post('admno'),
				'name' => $this->input->post('name'),
				'branch' => $this->input->post('branch'),
				'sem' => $this->input->post('sem'),
				'gender' => $this->input->post('gender'),
				'email' => $this->input->post('email'), 
				'phno' => $this->input->post('number'),
				'type' => $this->input->post('type'),
				'bus_id' => $this->input->post('bus_name'), 
				'stop' => $this->input->post('stop_name'),
			];
		
		$msg=TRUE;
		$this->load->model('Welcome_model');
		$this->Welcome_model->insert_welcome_model($data);
		redirect(base_url(''));
		}
		public function logout() {
		
			// Load the session library if not autoloaded
			$this->load->library('session');
		
			// Destroy the session
			$this->session->sess_destroy();
		
			// Set headers to prevent caching
			$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
			$this->output->set_header('Pragma: no-cache');
			 $this->output->set_header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
		
			// Redirect to the login page
			redirect('welcome');
		}
	
}