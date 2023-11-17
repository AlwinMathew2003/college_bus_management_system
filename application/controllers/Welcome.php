<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    	public function __construct() {
       		parent::__construct();
        	$this->load->model('Welcome_model');
    	}

		public function index()
		{
			$this->load->view('Auth/login');
		}
		public function admin()
		{
			$data['result'] = $this->Welcome_model->get_data();
			$this->load->view('dashboard/admin',$data);
		}
		public function coordinator()
		{
			$this->load->view('dashboard/coordinator');
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
			];
		
		$msg=TRUE;
		$this->load->model('Welcome_model');
		$this->Welcome_model->insert_welcome_model($data);
		if (isset($msg)) { // Checks if the 'msg' flag is set (indicating successful import).
			$this->session->set_flashdata('status', 'success');
			$this->session->set_flashdata('message', 'Registration successful, Your default password is "PASS". You can login only when coordinator approves your request'); // Sets a session message.
			
			// Redirects to the 'form' method of your controller.
			redirect(base_url(''));
		} else {
			$this->session->set_flashdata('status', 'error');
			$this->session->set_flashdata('message', 'Something went wrong'); // Sets a session message for an invalid file.
			
			// Redirects to the 'index' method of your controller.
			redirect(base_url(''));
		}

		}
	
}
