<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      body {
        background-color: #f2f2f2; /* Set the background color */
        display: flex;
        justify-content: center;
        align-items: center;
        height: 120vh; /* Center vertically and fill the viewport height */
      }
      @media (min-width: 769px) {
      .container {
        width: 40%; /* Reduce the width of the container */
      }}
      @media (max-width: 768px) {
        .container {
        width: 80%; /* Reduce the width of the container */
      }}
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
      .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        .alert-success {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }
        .alert-error {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
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
            <form action=<?php echo base_url('welcome/insert')?> method = 'post'>
                <div class="padding">
              <div class="form-group">
                <label for="number">Admission Number</label><br>
                <input type="text" class="form-control" id="admno" name="admno" required/>
              </div>
              <div class="form-group">
                <label for="firstName">Full Name</label><br>
                <input type="text" class="form-control" id="name" name="name" required/>
              </div>
              <div class="form-group">
                <label for="firstName">Branch</label><br>
                <input type="text" class="form-control" id="branch" name="branch" required/>
              </div>
              <div class="form-group">
                <label for="firstName">Semester</label><br>
                <input type="text" class="form-control" id="sem" name="sem" required/>
              </div>
              <div class="form-group">
              
                <label for="gender">Gender</label><br>
                <div class="padding1">
                  <label for="male" class="radio-inline" >
                    <input  type="radio" name="gender" value="m" id="male" required/>Male</label >
                  <label for="female" class="radio-inline">
                    <input type="radio" name="gender" value="f" id="female" required/> Female</label ><br>
            
              </div><br>
              <div class="form-group">
                <label for="email">Email</label><br>
                <input type="email" class="form-control" id="email" name="email" required/>
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label><br>
                <input type="number" class="form-control" id="number" name="number" required/>
              </div>
              <div class="form-group">
                <label for="type">Type of Pass</label><br>
                <div>
                  <label for="type" class="radio-inline"
                    ><input type="radio" name="type" value="w" id="weekly" required/>Weekly</label>
                  <label for="type" class="radio-inline">
                    <input type="radio" name="type" value="s" id="sem" required/>Sem</label ><br>
                </div>
              </div>
              <br>
              



              <div class="form-group">
                        <label>Bus</label>
                        <select name="bus_name" id="bus_name" class="form-control" required>
                            <option value="">select</option>
                            <?php
                            foreach ($bus as $row) {
                            ?>
                                <option value="<?php echo $row['Id'] ?>"><?php echo $row['Bus'] ?></option>

                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Stop</label>

                        <select id="stop_name" name="stop_name" class="form-control" required>
                            <option>select</option>

                        </select>

                    </div>


              <input type="submit" value="Submit"/>
    </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php if ($this->session->flashdata('status') == 'success'): ?>
        <script>
            // Display a success alert
            alert("<?php echo $this->session->flashdata('message'); ?>");
        </script>
    <?php elseif ($this->session->flashdata('status') == 'error'): ?>
        <script>
            // Display an error alert
            alert("<?php echo $this->session->flashdata('message'); ?>");
        </script>
    <?php endif; ?>

    <script>
        $(document).ready(function(){
            // Check if 'status' flash data is set to 'success'
            <?php if ($this->session->flashdata('status') == 'success'): ?>
                // Display a popup alert with the success message
                alert("<?php echo $this->session->flashdata('message'); ?>");
            <?php endif; ?>

            // Check if 'status' flash data is set to 'error'
            <?php if ($this->session->flashdata('status') == 'error'): ?>
                // Display a popup alert with the error message
                alert("<?php echo $this->session->flashdata('message'); ?>");
            <?php endif; ?>
        });
    </script>
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