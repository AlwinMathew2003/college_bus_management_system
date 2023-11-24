
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Jyothi Engineering College - Request Form</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
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

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('../assets/img/jyothi.jpeg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Request Form </h2>
        <ol>
          <li><a href="<?php echo base_url('UserController') ?>">Home</a></li>
          <li>request form</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <section id="get-started" class="get-started section-bg">
      <div class="container">
        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3>REQUEST FORM</h3>
              <p>We acknowledge that bus change requests are subject to availability and may not be immediately guaranteed. Please note that any modifications to the bus route are at the discretion of the college transportation administration.</p>
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade">
            <form action="forms/quote.php" method="post" class="php-email-form">
              <h3>Bus Change Request Form</h3>
              <p></p>
              <div class="row gy-3">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="col-md-12">
                <select name="bus_name" id="bus_name" class="form-control" required>
                    <option value="" selected disabled>Select Bus</option>
                    <?php
                            foreach ($bus as $row) {
                            ?>
                                <option value="<?php echo $row['Id'] ?>"><?php echo $row['Bus'] ?></option>

                            <?php } ?>
                    <!-- Add more options as needed -->
                  </select>
                </div>
                <div class="col-md-12">
                <select id="stop_name" name="stop_name" class="form-control" required>
                    <option value="" selected disabled>Select Stop</option>
                    
                    <!-- Add more options as needed -->
                  </select>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                  <button type="submit">Submit</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>
      </div>
    </section>

    <!-- ... (remaining sections) ... -->

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
                Vettikatiri Street <br>
                Thrisuur, Kerala<br><br>
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
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>






  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
$("#bus_name").change(function() {
    var Bus_id = $('#bus_name').val();

    // Clear existing options in #stop_name
    $("#stop_name").empty().append("<option value=''> Select Stop</option>");

    $.ajax({
        url: '<?php echo base_url('Welcome/get_stops') ?>',
        type: 'POST',
        data: {
            Bus_id: Bus_id
        },
        datatype: 'json',
        success: function(response) {
            console.log(response);
            var arr = $.parseJSON(response);

            $.each(arr, function(i) {
                var $datas = arr[i]['Stop'];
                // Append the new options to the existing ones in the dropdown
                $("#stop_name").append("<option value='" + $datas + "'>" + $datas + "</option>");
            });
        }
    });
  });
</script>
</body>

</html>
