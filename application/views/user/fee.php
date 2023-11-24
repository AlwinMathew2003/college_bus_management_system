<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fee</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

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
    .about {
        font-family: Arial, sans-serif;
    }

    h2 {
        color: pale blue;
    }

    form {
        width: 245px;
        margin: 0 auto;
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 10px;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    /* Style the form container */
.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px;
}

/* Style each form column */
.col-lg-6 {
    flex: 0 0 calc(50% - 20px);
    margin-bottom: 20px;
}

/* Style the form box */
.box-item {
    background-color: #f4f4f4;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Style form labels */
label {
    font-weight: bold;
    color: #333;
}

/* Style form inputs */
input {
    width: 100%;
    padding: 8px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Style form submit button */
button {
    background-color: #4caf50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* Style form on smaller screens */
@media screen and (max-width: 768px) {
    .col-lg-6 {
        flex: 0 0 100%;
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
          <!-- <li><a href="<?php echo base_url('welcome/form') ?>">REQUEST FORM  </a></li> -->
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

        <h2>Fee</h2>
        <ol>
          <li><a href="<?php echo base_url('UserController') ?>">Home</a></li>
          <li>fee</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <div class="row">
      <div class="col-lg-6">
          <div class="box-item">
              <div class="profile">
                  <form method="post" action="welcome_message.php">
                      <label for="name">Name:</label>
                      <input type="text" name="name" id="name" value="<?php echo $fee_details['student_name'];?>" readonly><br><br>
                      <label for="admission_number">Admission Number:</label>
                      <input type="text" name="admission_number" id="admission_number" value="<?php echo $fee_details['Admno'];?>" readonly><br><br>
                      <label for="FEE">Fee:</label>
                      <input type="text" name="FEE" id="FEE" value="<?php echo $fee_details['Fees'];?>" readonly><br>
                      
                  </form>
              </div>
          </div>
      </div>
      <div class="col-lg-6">
          <div class="box-item">
              <div class="profile">
                <form method="POST" action="welcome_message.php">
                  <label for="street">Fee Paid:</label>
                  <input type="text" id="FEE PAID" name="FEE PAID" value="<?php echo $fee_details['Paid'];?>" readonly><br><br>
                  <label for="city">Fee Due:</label>
                  <input type="text" id="FEE DUE" name="FEE DUE" value="<?php echo $fee_details['Due_as_on'];?>" readonly><br><br>
                  <label for="state"> Date Updated</label>
                  <input type="text" id=" DUE DATE" name=" DUE DATE" value="<?php echo $fee_details['Date'];?>" readonly><br><br>
                  
              </form>
              </div>
          </div>
      </div>
   
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



  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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

</body>

</html>