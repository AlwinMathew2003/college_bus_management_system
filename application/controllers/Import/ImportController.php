<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php'; // Includes the Composer autoloader to load external libraries.
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ImportController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {
       $this->load->view('Import/import');
    }

    public function import() {
        if(isset($_POST['save_excel_data1'])) // Checking if the form with the name 'save_excel_data' was submitted.
        {
            $fileName = $_FILES['import_file1']['name']; // Retrieves the name of the uploaded file.
            $file_ext = pathinfo($fileName, PATHINFO_EXTENSION); // Extracts the file extension.
        
            $allowed_ext = ['xls','csv','xlsx']; // Defines an array of allowed file extensions.
        
            if(in_array($file_ext, $allowed_ext)) // Checks if the uploaded file extension is in the allowed extensions array.
            {
                $inputFileNamePath = $_FILES['import_file1']['tmp_name']; // Retrieves the temporary path of the uploaded file.
                $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath); // Loads the uploaded Excel file.
                $data = $spreadsheet->getActiveSheet()->toArray(); // Converts the Excel data into an array.
        
                $count = "0"; // Initializes a count variable.


                foreach($data as $row) // Iterates through the rows of data in the Excel file.
                {
                    if($count > 0) // Checks if it's not the header row (assuming header row is row 0).
                    {
                        $admno = $row[0];
                        $stdname = $row[1];
                        $branch = $row[2];
                        $batch = $row[3];
                        $semester = $row[4];
                        $fees = $row[5];
                        $paid = $row[6];
                        $due = $row [7];
                        $selectedDate = $this->input->post('date_field1');
                        // Use CodeIgniter's Query Builder to insert data
                        $student_data = array(
                            'Admno' =>  $admno,
                            'student_name' => $stdname,
                            'Branch' => $branch,
                            'Batch' => $batch,
                            'Semester' => $semester,
                            'Fees' => $fees,
                            'Paid' => $paid,
                            'Due_as_on' => $due,
                            'Date' => $selectedDate
                            
                        );
                    
        
                        $this->db->insert('students', $student_data);
    
                    }
                    else
                    {
                        $count = "1"; // Sets the count variable to '1' after processing the header row.
                    }
                    
                }
        // print_r($msg);exit;
                if (isset($msg)) { // Checks if the 'msg' flag is set (indicating successful import).
                    // print_r('hi');exit;
                    $this->session->set_flashdata('status', 'success');
                    $this->session->set_flashdata('message', 'Successfully Imported'); // Sets a session message.
                     $this->session->flashdata('message');
                    redirect(base_url('import')); // Redirects to the 'index' method of your controller.
                }
                
                else
                {
                    $this->session->set_flashdata('status', 'error');
                    $this->session->set_flashdata('message', 'Not Imported'); // Sets a session message for import failure.
                    redirect(base_url('import')); // Redirects to the 'index' method of your controller.
                }
            }
            else
            {
                 $this->session->set_flashdata('status', 'error');
                 $this->session->set_flashdata('message', 'Invalid File'); // Sets a session message for an invalid file.
                 redirect(base_url('import')); // Redirects to the 'index' method of your controller.

                
            }
        }
    }

    public function D_import() {
        if(isset($_POST['save_excel_data2'])) // Checking if the form with the name 'save_excel_data' was submitted.
        {
            
            $fileName = $_FILES['import_file2']['name']; // Retrieves the name of the uploaded file.
            $file_ext = pathinfo($fileName, PATHINFO_EXTENSION); // Extracts the file extension.
        
            $allowed_ext = ['xls','csv','xlsx']; // Defines an array of allowed file extensions.
        
            if(in_array($file_ext, $allowed_ext)) // Checks if the uploaded file extension is in the allowed extensions array.
            {
                $inputFileNamePath = $_FILES['import_file2']['tmp_name']; // Retrieves the temporary path of the uploaded file.
                $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath); // Loads the uploaded Excel file.
                $data = $spreadsheet->getActiveSheet()->toArray(); // Converts the Excel data into an array.
        
                $count = "0"; // Initializes a count variable.

                foreach($data as $row) // Iterates through the rows of data in the Excel file.
                {
                    if($count > 0) // Checks if it's not the header row (assuming header row is row 0).
                    {
                        $admno = $row[0];
                        $stdname = $row[1];
                        $branch = $row[2];
                        $batch = $row[3];
                        $month = $row[4];
                        $fees = $row[5];
                        $paid = $row[6];
                        $due = $row [7];
                        $selectedDate = $this->input->post('date_filed2');
                        // Use CodeIgniter's Query Builder to insert data
                        $student_data = array(
                            'Admno' =>  $admno,
                            'student_name' => $stdname,
                            'Branch' => $branch,
                            'Batch' => $batch,
                            'month' => $month,
                            'Fees' => $fees,
                            'Paid' => $paid,
                            'Due_as_on' => $due,
                            'Date' => $selectedDate
                            
                        );
        
                        $this->db->insert('daily_students', $student_data);
        
                        $msg = true;
                    }
                    else
                    {
                        $count = "1"; // Sets the count variable to '1' after processing the header row.
                    }
                    
                }
        
                if (isset($msg)) { // Checks if the 'msg' flag is set (indicating successful import).
                    $this->session->set_flashdata('status', 'success');//to show the status 
                    $this->session->set_flashdata('message1', 'Successfully Imported'); // Sets a session message.
                   redirect(base_url('import'));// Redirects to the 'index' method of your controller.
                }
                
                else
                {
                   // $this->session->set_flashdata('message1', 'Not Imported'); // Sets a session message for import failure.
                   redirect(base_url('import')); // Redirects to the 'index' method of your controller.
                }
            }
            else
            {
                $this->session->set_flashdata('status', 'error'); 
                $this->session->set_flashdata('message1', 'Invalid File'); // Sets a session message for an invalid file.
                redirect(base_url('import')); // Redirects to the 'index' method of your controller.

                
            }
        }
    }
}