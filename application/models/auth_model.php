<?php

class auth_model extends CI_Model
{


    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function register_user()
    {

        $password = $this->input->post('password');
        $con_password = $this->input->post('con_password');


        if ($password != $con_password) {
            $this->session->set_flashdata('worng', 'The password not equal with confirmation!');
            redirect('Auth/register');
        } else {
            $data = array(
                "name" => $this->input->post('name'),
                "email" => $this->input->post('email'),
                "password" => $password
            );

            $this->db->insert('users', $data);
            $this->session->set_flashdata('suc', 'You are registered please login');
            redirect('Auth/');
        }
    }
    public function login_user()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Check if the user is an admin
        if ($username == 'admin' && $password == 'adminpassword') {
            // User is an admin, redirect to the admin page
            redirect('welcome/admin'); // Assuming 'welcome' is your controller and 'admin' is the admin page method
        } else {
            // Check if the user is a regular user
               // Check if the user is a regular user
               $this->db->where('admno', $username);
               $this->db->where('password', $password);
               $query = $this->db->get('details');
               $find_user = $query->num_rows();

            if ($find_user > 0) {
                // User found, retrieve and store the entire row
                $user_details = $query->row_array();
                // print_r($user_details);exit;
                $this->session->set_userdata('user_details', $user_details);

                // Set flashdata and redirect to user controller
                $this->session->set_flashdata('suc', 'You are logged in as a user.');
                redirect('UserController'); // Assuming 'UserController' is your user controller
            } else {
                // Check if the user is a coordinator
                $coordinator_query = $this->db->get_where('coordinator', array(
                    'coordinator_id' => $username,
                    'password' => $password
                ));
                $is_coordinator = $coordinator_query->num_rows();

                if ($is_coordinator > 0) {
                    // Coordinator found, retrieve and store the entire row
                    $coordinator_details = $coordinator_query->row_array();


                    // Store coordinator details in session
                    $this->session->set_userdata('coordinator_details', $coordinator_details);

                    // User is a coordinator, redirect to the coordinator dashboard
                    $this->session->set_flashdata('suc', 'You are logged in as a coordinator.');
                    redirect('Welcome/coordinator');
                } else {
                    $this->session->set_flashdata('warning', 'Incorrect Authentication!!!');
                    redirect('Auth/');
                }
            }
        }
    }
}
