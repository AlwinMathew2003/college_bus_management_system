<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      body {
        background-color: #f2f2f2; /* Set the background color */
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Center vertically and fill the viewport height */
      }
      .container {
        width: 35%; /* Reduce the width of the container */
      }
      .panel {
        border: 2px solid #3498db; /* Add a border */
        background-color: #ffffff; /* Set the background color */
      }
      .panel-heading {
        background-color: #3498db; /* Set the heading background color */
        color: #ffffff; /* Set the heading text color */
        text-align: center; /* Center align the heading text */
        padding: 15px; /* Add some padding to the heading */
      }
      .form-group {
        margin-bottom: 20px; /* Add some spacing between form groups */
      }
      .form-control {
        width: 90%; /* Make the text fields fit the form width */
      }
      .btn-primary {
        background-color: #3498db; /* Set the button background color */
        border-color: #3498db; /* Set the button border color */
      }
      .btn-primary:hover {
        background-color: #2980b9; /* Change button color on hover */
        border-color: #2980b9;
      }
      .padding{
        padding: 15px;
      }

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Details</title>
    <!-- <link rel="stylesheet" type="<?php echo base_url('text/css')?>" href="assets\css\bootstrap.css" /> -->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h1>Registration Form</h1>
          </div>
          <div class="panel-body">
            <form action=<?php echo base_url('welcome')?> method = 'post'>
                <div class="padding">
              <div class="form-group">
                <label for="number">Admission Number</label><br>
                <input type="text" class="form-control" id="admno" name="admno"/>
              </div>
              <div class="form-group">
                <label for="firstName">Full Name</label><br>
                <input type="text" class="form-control" id="name" name="name"/>
              </div>
              <div class="form-group">
                <label for="firstName">Branch</label><br>
                <input type="text" class="form-control" id="branch" name="branch"/>
              </div>
              <div class="form-group">
                <label for="firstName">Semester</label><br>
                <input type="text" class="form-control" id="sem" name="sem" />
              </div>
              <div class="form-group">
              
                <label for="gender">Gender</label><br>
                <div class="padding1">
                  <label for="male" class="radio-inline" >
                    <input  type="radio" name="gender" value="m" id="male" />
                    Male</label >
                  <label for="female" class="radio-inline">
                    <input type="radio" name="gender" value="f" id="female"/> Female</label ><br>
            
              </div><br>
              <div class="form-group">
                <label for="email">Email</label><br>
                <input type="email" class="form-control" id="email" name="email"/>
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label><br>
                <input type="number" class="form-control" id="number" name="number"/>
              </div>
              <div class="form-group">
                <label for="type">Type of Pass</label><br>
                <div>
                  <label for="type" class="radio-inline"
                    ><input
                      type="radio"
                      name="type"
                      value="w"
                      id="weekly"
                    />Weekly</label>
                  <label for="type" class="radio-inline">
                    <input type="radio" name="type" value="s" id="sem"/>Sem</label ><br>
                </div>
              </div>
              <br>
              <input type="submit" value="Submit"/>
    </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>