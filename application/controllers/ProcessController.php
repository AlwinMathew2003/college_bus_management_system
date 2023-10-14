<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProcessController extends CI_Controller {

    public function processLogin() {
        // Get the submitted username and password from the form
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Check the credentials (this is a basic example, you should use secure methods for authentication)
        if ($username == 'admin' && $password == 'adminpassword') {
            // User is an admin, redirect to the admin page
            redirect('welcome/admin'); // Assuming 'welcome' is your controller and 'admin' is the admin page method
        } 
        
        else {
            // Invalid credentials, redirect back to the login page with an error message
            redirect('welcome/form'); // Assuming 'welcome' is your controller and 'form' is the login page method
        }
    }
}
?>
