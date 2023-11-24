<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('auth_model');
		$this->load->model('Welcome_model');
		$this->load->model('User_model');
		$this->load->model('Attendance_model');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('user/index');
	}

	public function attendence()
	{
		$data['profile_data']=$this->session->userdata('user_details');
		$data['attendance_details'] = $this->Attendance_model->getAttendance($data);
		// echo"<pre>";print_r($data['attendance_details']);exit;
		$this->load->view('user/attendence',$data);
	}
	public function fee()
	{
		$data['profile_data']=$this->session->userdata('user_details');
		$data['fee_details'] = $this->User_model->getFee($data);
		// echo"<pre>";print_r($data['fee_details']);exit;
		$this->load->view('user/fee',$data);
	}

	public function requestform()
	{
		$this->load->view('user/requestform');
	}

	public function profile()
	{
		$data['profile_data']=$this->session->userdata('user_details');
		// echo"<pre>";print_r($data);exit;
		$coordinator_data = $this->User_model->getCoordinator($data);
		// echo"<pre>";print_r($coordinator_data);exit;
		$data['coordinator_data'] = $coordinator_data;
		$this->load->view('user/profile',$data);
	}




	public function get_stops() {
		$this->load->model('Welcome_model');
       extract($_REQUEST);   
		$stopData = $this->Welcome_model->getStopsData($Bus_id); 
        echo json_encode($stopData);
    }

	public function form()
	{
		$this->load->model('Welcome_model');
		$busData['bus'] = $this->Welcome_model->getBusData();
		$this->load->view('form',$busData);
	}
}