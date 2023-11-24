<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>User Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


  <style>
    .card-item {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: 1px solid #ddd;
      border-radius: 20px !important; /* Add this line to set the border-radius */
      overflow: hidden; /* Ensure the border-radius is applied properly */
    }
  
    .card-item:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
  
    .card-item:hover .card-title {
      color: #007bff; /* Change the color to your preferred hover color */
    }
  
    .card-item:hover p {
      color: #555; /* Change the color to your preferred hover color */
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
          <li><a href="<?php echo base_url('welcome/form') ?>">REQUEST FORM  </a></li>
          <li>
            <div class="gradient-button"><a id="modal_trigger" href="<?php echo base_url('') ?>"><i class="fa fa-sign-in-alt"></i> SIGN OUT</a></div>
          </li>
        </ul>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Welcome To Jyothi <span> Engineering College</span></h2>
            <p data-aos="fade-up">Jyothi Engineering College is a private engineering college situated in Cheruthuruthy, Chelakkara Thrissur District of Kerala, India. The college is run by Syro-Malabar Catholic Archdiocese of Thrissur. The college is affiliated to All India Council for Technical Education (AICTE)[1] New Delhi, Kerala Technological University (KTU), and the University of Calicut</p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/jyothi.jpeg)">
      </div>
      <div class="carousel-item" style="background-image: url(assets/img/jyothi.jpeg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/jyothi.jpeg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/jyothi.jpeg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/jyothi.jpeg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <!-- End Get Started Section -->

    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>JYOTHI BUS SERVICE</h2>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <a href="<?php echo base_url('UserController/profile') ?>">
                    <div class="card-bg" style="background-image: url(assets/img/profile.png);"></div>
                    </a>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                   <a href="<?php echo base_url('UserController/profile') ?>"> <h4 class="card-title"> PROFILE</h4> </a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <a href="<?php echo base_url('UserController/attendence') ?>">
                    <div class="card-bg"  style="background-image: url(assets/img/attendance.jpg);"></div>
                    </a>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <a href="<?php echo base_url('UserController/attendence') ?>"><h4 class="card-title">ATTENDENCE</h4></a>
                   
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <a href="<?php echo base_url('UserController/fee') ?>"><div class="card-bg"  style="background-image: url(assets/img/fee.png);"></div></a>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <a href="<?php echo base_url('UserController/fee') ?>"><h4 class="card-title">FEE</h4></a>
                    
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <!-- <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <a href="<?php echo base_url('welcome/form') ?>">
                    <div class="card-bg"  style="background-image: url(assets/img/form.png);"></div>
                  </a>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <a href="<?php echo base_url('welcome/form') ?>"><h4 class="card-title">REQUEST FORM</h4> </a>
                
                  </div>
                </div>
              </div>
            </div>
          </div>End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <a href="<?php echo base_url('UserController/requestform') ?>">
                    <a href="https://www.jecc.ac.in/documents/Bus%20Rates%2023-24.pdf"><div class="card-bg"  style="background-image: url(assets/img/bus.jpg);"></div></a>
                  </a>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <a href="https://www.jecc.ac.in/documents/Bus%20Rates%2023-24.pdf"><h4 class="card-title">BUS ROUTE</h4> </a>
                
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->


          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <a href="<?php echo base_url('welcome/form') ?>">
                    <a href="https://www.jecc.ac.in/documents/Bus%20and%20coordianators.pdf.pdf"><div class="card-bg"  style="background-image: url(assets/img/coordinator.png);"></div></a>
                  </a>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <a href="https://www.jecc.ac.in/documents/Bus%20and%20coordianators.pdf.pdf"><h4 class="card-title">BUS CO-ORDINATORS LIST</h4> </a>
                
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->
          </div><!-- End Card Item -->

          

        </div>

      </div>
    </section><!-- End Constructions Section -->

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
              <li><a href="<?php echo base_url('welcome/form') ?>">Requestform</a></li>
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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>