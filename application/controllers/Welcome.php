<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
			$this->load->view('Auth/login');
		}
		public function admin()
		{
			$this->load->view('dashboard/admin');
		}
		public function form()
		{
			$this->load->view('Form/form');
		}
		public function user()
		{
			$this->load->view('dashboard/user');
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
	
	
		$this->load->model('Welcome_model');
		$this->Welcome_model->insert_welcome_model($data);
		}
	
}
