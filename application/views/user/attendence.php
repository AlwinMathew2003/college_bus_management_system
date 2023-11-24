<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Attendance</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    #clients {
      padding: 50px 0;
      /* Adjust the top and bottom padding as needed */
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    /* Section Heading Styles */
    .section-heading h4 {
      font-size: 28px;
      margin-bottom: 30px;
    }

    /* Table Styles */
    .table {
      width: 100%;
      margin-bottom: 30px;
    }

    .table th,
    .table td {
      padding: 12px;
      text-align: center;
    }

    .table th {
      background-color: #f8f9fa;
      /* Light gray background color for table header */
    }

    /* Card Styles */
    .card-body {
      background-color: #ffffff;
      border: 1px solid #e1e1e1;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    /* Centered Button Styles */
    .centered-button {
      text-align: center;
      margin-top: 20px;
    }

    /* Section Heading Styles */
    .section-heading {
      text-align: center;
      margin-bottom: 30px;
    }

    .section-heading h4 {
      font-size: 28px;
      display: inline-block;
      background-color: #3498db;
      /* Adjust the background color as needed */
      color: #fff;
      /* Adjust the text color as needed */
      padding: 10px 20px;
      border-radius: 5px;
    }


    /* Responsive Styles */
    @media (max-width: 767px) {
      .col-lg-8.offset-lg-2 {
        width: 100%;
      }
    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Jyothi<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?php echo base_url('UserController') ?>">Home</a></li>
          <li><a href="<?php echo base_url('UserController/profile') ?>">PROFILE</a></li>
          <li><a href="<?php echo base_url('UserController/attendence') ?>">ATTENDENCE</a></li>
          <li><a href="<?php echo base_url('UserController/fee') ?>">FEE</a></li>
          <!-- <li><a href="<?php echo base_url('welcome/form') ?>">REQUEST FORM </a></li> -->
          <li>
            <div class="gradient-button"><a id="modal_trigger" href="<?php echo base_url('') ?>"><i class="fa fa-sign-in-alt"></i> SIGN OUT</a></div>
          </li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('../assets/img/jyothi.jpeg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Attendence</h2>
        <ol>
          <li><a href="<?php echo base_url('UserController') ?>">Home</a></li>
          <li>attendence</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->

    <!-- <?php
          // var_dump($attendance_details);
          // var_dump($coordinator_data);
          ?> -->

    <div id="clients">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="section-heading">
              <h4>ATTENDENCE</h4>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="attendanceFilter">Filter by:</label>
              </div>
              <select class="custom-select form-control" id="attendanceFilter">
                <option value="all">All</option>
                <option value="present">Present</option>
                <option value="absent">Absent</option>
              </select>
            </div>
            <div class="card-body">
              <div style="max-height: 200px; overflow-y: auto;">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($attendance_details as $attendance) : ?>
                      <tr data-status="<?php echo ($attendance['status'] == 'P') ? 'present' : 'absent'; ?>">
                        <td><?php echo date("Y-m-d", strtotime($attendance['date'])); ?></td>
                        <td><?php echo ($attendance['status'] == 'P') ? 'Present' : 'Absent'; ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Jyothi engineering college</h3>
              <p>
                vettikatiri Street <br>
                thrisuur, Kerala<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> jyothi@example.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="<?php echo base_url('UserController') ?>">Home</a></li>
              <li><a href="<?php echo base_url('UserController/profile') ?>">Profile</a></li>
              <li><a href="<?php echo base_url('UserController/attendence') ?>">Attendence</a></li>
              <li><a href="<?php echo base_url('UserController/fee') ?>">Fee</a></li>
              <!-- <li><a href="<?php echo base_url('welcome/form') ?>">Requestform</a></li> -->
            </ul>
          </div><!-- End footer links column-->
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script>
    document.getElementById('attendanceFilter').addEventListener('change', function() {
      var selectedValue = this.value;
      var rows = document.querySelectorAll('tbody tr');

      rows.forEach(function(row) {
        var status = row.getAttribute('data-status');

        if (selectedValue === 'all' || selectedValue === status) {
          row.style.display = 'table-row';
        } else {
          row.style.display = 'none';
        }
      });
    });
  </script>

</body>

</html>