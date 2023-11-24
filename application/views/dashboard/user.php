<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .profile {
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
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>User dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="../assets/css/animated.css">
    <link rel="stylesheet" href="../assets/css/owl.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="../assets/images/logo.png" alt="Chain App Dev">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">HOME</a></li>
                            <li class="scroll-to-section"><a href="#about">PROFILE</a></li>
                            <li class="scroll-to-section"><a href="#clients">ATTENDENCE</a></li>
                            <li class="scroll-to-section"><a href="#pricing">FEE</a></li>
                            <li class="scroll-to-section"><a href="#newsletter">REQUEST FORM</a></li>
                            <li>
                                <div class="gradient-button"><a id="modal_trigger" href="<?php echo base_url(" "); ?>"><i class="fa fa-sign-in-alt"></i> SIGN OUT</a></div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Transportation</h2>
                                        <p>The campus being 30Kms from Thrissur town , the college provides transportation facility for both students and staff. There are 20 buses which take care of commutation of about six hundred students from various locations. There is one exclusive Van for senior staff</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="white-button first-button scroll-to-section">
                                            <a href="https://www.jecc.ac.in/documents/Bus%20Rates%2023-24.pdf">Route & Fee Information <i class=""></i></a>
                                        </div>
                                        <div class="white-button scroll-to-section">
                                            <a href="https://www.jecc.ac.in/documents/Bus%20and%20coordianators.pdf.pdf">Bus Co-ordinators List <i class=""></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="../assets/images/slider-dec.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4><em>Services &amp; Features</em></h4>
                        <img src="../assets/images/heading-line-dec.png" alt="">

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3"><a href="#about">
                        <div class="service-item first-service"><a href="#about">
                                <div class="icon"></div>
                                <h4><a href="#about">PROFILE</a></h4>
                        </div>
                    </a></div>
                <div class="col-lg-3"><a href="#attend">
                        <div class="service-item second-service"><a href="#attend">
                                <div class="icon"></div>
                                <h4><a href="#clients">ATTENDENCE</a></h4>
                        </div>
                    </a></div>
                <div class="col-lg-3"><a href="#pricing">
                        <div class="service-item third-service"><a href="#pricing">
                                <div class="icon"></div>
                                <h4><a href="#pricing">FEE</a></h4>
                        </div>
                    </a></div>
                <div class="col-lg-3"><a href="#newsletter">
                        <div class="service-item fourth-service"><a href="#newsletter">
                                <div class="icon"></div>
                                <h4><a href="#newsletter">REQUEST FORM</a></h4>
                        </div>
                    </a></div>
            </div>
        </div>
    </div>

    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="section-heading">
                        <h4> PROFILE </h4>
                        <img src="../assets/images/heading-line-dec.png" alt="">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="box-item">
                                <div class="profile">
                                    <form method="post" action="welcome_message.php">
                                        <label for="name">Name:</label>
                                        <input type="text" name="name" id="name" required><br><br>
                                        <label for="id">ID:</label>
                                        <input type="text" name="id" id="id" required><br><br>
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" id="email" required><br><br>
                                        <label for="dob">Date of Birth:</label>
                                        <input type="date" name="dob" id="dob" required><br><br>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-item">
                                <div class="profile">
                                    <form method="POST" action="welcome_message.php">
                                        <label for="street">Street Address:</label>
                                        <input type="text" id="street" name="street" required><br><br>
                                        <label for="city">City:</label>
                                        <input type="text" id="city" name="city" required><br><br>
                                        <label for="state">State:</label>
                                        <input type="text" id="state" name="state" required><br><br>
                                        <label for="zip">ZIP Code:</label>
                                        <input type="text" id="zip" name="zip" required><br><br>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>

                            </div>
                        </div>
                        <div>
                            <div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-image">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>
    <style>
        #clients .section-heading h4 {
            text-align: center;
        }

        #clients .card-body {
            text-align: center;
        }

        .centered-button {
            text-align: center;
        }

        .image-container {
            text-align: center;
            margin-top: 20px;
            /* Adjust the margin to control the spacing between the image and table */
        }

        .image {
            max-width: 100%;
            /* Ensure the image doesn't exceed the container width */
        }
    </style>

    <div id="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h4>ATTENDENCE</h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>Attendance date</th>
                                    <th>Attendance Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10</td>
                                    <td>akhil</td>
                                    <td>10/9/23</td>
                                    <td>44</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="centered-button">
                        <button class="btn btn-primary">more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
        .section-heading {
            text-align: center;
        }

        .card-body {
            text-align: center;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            margin: 5px;
        }
    </style>
    <div id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h4>FEE DETAILS</h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>fee </th>
                                    <th>fee paid</th>
                                    <th>fee due</th>
                                    <th>due date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10</td>
                                    <td>akhil</td>
                                    <td>50000</td>
                                    <td>25000</td>
                                    <td>25000</td>
                                    <td>12-10-2023</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="btn-container">
                        <a href="https://feebook.southindianbank.com/FeeBookUser/org?id=371" class="btn btn-primary">fee pay</a>
                        <a href="form.html" class="btn btn-secondary">upload recipt</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer id="newsletter">
        <style>
            /* Style for the entire form container */
            /* Style for the card container */
            /* Style for the card container */
            .card {
                max-width: 400px;
                margin: 0 auto;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                padding: 20px;
            }

            /* Style for form headings */
            .card h1,
            .card h2 {
                text-align: center;
                color: #333;
            }

            /* Style for labels */
            .card label {
                display: block;
                margin: 10px 0;
                font-weight: bold;
            }

            /* Style for input fields and textareas */
            .card input[type="text"],
            .card input[type="email"],
            .card input[type="tel"],
            .card textarea {
                width: 100%;
                padding: 10px;
                margin: 5px 0;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            /* Style for the Submit button */
            .card input[type="submit"] {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            /* Style for the Submit button on hover */
            .card input[type="submit"]:hover {
                background-color: #45a049;
            }

            /* Additional styling for better readability (optional) */
            .card h1 {
                font-size: 24px;
                margin-top: 0;
            }

            .card h2 {
                font-size: 18px;
                margin-top: 20px;
            }
        </style>
        <div class="card">
            <h1>Bus Change Request Form</h1>
            <form action="process_request.php" method="post">
                <label for="new_bus_number">Requested New Bus Number:</label>
                <select id="new_bus_number" name="new_bus_number" required>
                    <option value="Bus Number 1">Bus Number 1</option>
                    <option value="Bus Number 2">Bus Number 2</option>
                    <option value="Bus Number 3">Bus Number 3</option>
                    <!-- Add more options as needed -->
                </select><br>

                <label for="new_bus_stop">Requested New Bus Stop:</label>
                <select id="new_bus_stop" name="new_bus_stop" required>
                    <option value="Bus Stop 1">Bus Stop 1</option>
                    <option value="Bus Stop 2">Bus Stop 2</option>
                    <option value="Bus Stop 3">Bus Stop 3</option>
                    <!-- Add more options as needed -->
                </select><br>

                <label for="reason">Reason for Bus Change:</label>
                <textarea id="reason" name="reason" rows="4" required></textarea><br>

                <input type="submit" value="Submit Request">
            </form>

    </footer>
    </div>



    <!-- Scripts -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/owl-carousel.js"></script>
    <script src="../assets/js/animation.js"></script>
    <script src="../assets/js/imagesloaded.js"></script>
    <script src="../assets/js/popup.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>

</html>