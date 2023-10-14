<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Import_student_details</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        .blue-header {
    background-color: #1E90FF; /* Blue color */
    color: white; /* Text color */
}
        </style>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <?php $this->load->view('templates/navbar'); ?>    <!--LOADING IS REQUIRED HERE THIS WAS AN ERROR FOR ME WHEN I TRY TO IMPORT THE FILE -->
        <?php $this->load->view('templates/sidebar'); ?>
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                        <?php
                if(isset($_SESSION['message']))
                {
                    $class = ($_SESSION['status'] === 'success') ? 'alert alert-success' : 'alert alert-danger';
                    echo '<div class="' . $class . '" role="alert">' . $_SESSION['message'] . '</div>';
                    unset($_SESSION['message']);
                    unset($_SESSION['status']);
                }
            ?>
                <div class="card">

                <div class="card-header blue-header">
                        <h4 style="color:white;">STUDENT BUS FEES DETAILS SEMESTER WISE</h4>
                    </div>


                    <div class="card-body">



                        <form action="<?php echo base_url('import'); ?>" method="POST" enctype="multipart/form-data">
                            <input type="date" name="date_field1" class="form-control" required/><br>
                            <input type="file" name="import_file1" class="form-control" required/>
                            <button type="submit" name="save_excel_data1" class="btn btn-success mt-3">Import</button>

                        </form>

                      
                    </div>
                    </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">

                        <?php
                if(isset($_SESSION['message1']))
                {
                    $class = ($_SESSION['status'] === 'success') ? 'alert alert-success' : 'alert alert-danger';
                    echo '<div class="' . $class . '" role="alert">' . $_SESSION['message1'] . '</div>';
                    unset($_SESSION['message1']);
                    unset($_SESSION['status']);
                }
            ?>

            <div class="card">
          
            <div class="card-header blue-header">
                <h4 style="color:white;">STUDENT BUS FEES DETAILS FOR DAILY PASS </h4>
            </div>

                <div class="card-body">


                    <form action="<?php echo base_url('D_import'); ?>" method="POST" enctype="multipart/form-data">
                    <input type="date" name="date_field2" class="form-control" required/><br>
                            <input type="file" name="import_file2" class="form-control" required/>
                            <button type="submit" name="save_excel_data2" class=" mt-3 btn btn-success">Import</button>

                        </form>
                </div>


            </div>
            </div>
            </div>

            <!-- Footer Start
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-10 text-center text-sm-start">
                            &copy; <a href="#">Jyothi_Bus_Management_System</a>, All Right Reserved. 
                        </div> !-->
                       <!--<div class="col-12 col-sm-6 text-center text-sm-end"> -->
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->

                      <!--  </div> 
                    </div>
                </div>
            </div>
        </div>-->
            <!-- Footer End --> 
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>