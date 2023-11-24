<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      body {
        background: url("https://images.shiksha.com/mediadata/images/1500011166phpiuET42.jpeg") 50% fixed;
			  background-size: cover;
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
  border: 2px solid #1e90ff; /* Add a border */
  border-radius: 10px;
  background: linear-gradient(to top, #ffffff, rgba(255, 255, 255, 0)), linear-gradient(to bottom, #ffffff, rgba(255, 255, 255, 0)); /* Set the background gradients */
}
/* //#00ffcc, #1e90ff */
      .panel-heading {
        background: #1e90ff;
        color: #ffffff; /* Set the heading text color */
        text-align: center; /* Center align the heading text */
        padding: 15px; /* Add some padding to the heading */
        border-radius: 10px;
      }
      /* }linear-gradient(to right,#00ffcc, #1e90ff , #00ffcc), linear-gradient(to left, #00ffcc, #1e90ff, #00ffcc); Set the background gradients */
      .form-group {
  margin-bottom: 20px; /* Add some spacing between form groups */
  color: #333; /* Set the font color to dark */
  font-weight: bold; /* Make the font bold */
  font-size: 16px; /* Increase the font size */
}


       
      .form-control {
    width: 90%; /* Make the text fields fit the form width */
    border-radius: 20px; /* Set border-radius to make it oval-shaped */
    padding: 10px; /* Add padding for better aesthetics */
    border: 2px solid grey; /* Add a border color */
    font-size: 10px; /* Set the font size */
    outline: none; /* Remove default outline */
}



.form-control::placeholder {
  font-size: 14px;
}

/* Optionally, you can also adjust the color of the placeholder text */
.form-control::placeholder {
  color: #D3D3D3; /* Change the color to a desired value */
}

/* Optional: Add a box shadow for a more pronounced effect */
.form-control:focus {
  box-shadow: 0 0 5px rgba(30, 144, 255, 0.8); /* Add a box shadow on focus */
}
      .btn-primary {
        background-color: #1e90ff; /* Set the button background color */
        border-color: navy; /* Set the button border color */
      }
      .btn-primary:hover {
        background-color: #1e90ff; /* Change button color on hover */
        border-color: #1e90ff;
      }
      .padding{
        padding: 15px;
      }
      input[type="submit"] {
  background:#ffffff ;/* Dark neon gradient */
  border: 1px solid blue; /* Neon border color */
  color: black; /* White text color */
  padding: 10px 20px; /* Adjust padding for better aesthetics */
  border-radius: 10px; /* Add border-radius for rounded corners */
  cursor: pointer; /* Change cursor on hover */
  transition: background 0.3s ease, border-color 0.3s ease; /* Shorthand transition property */
}

input[type="submit"]:hover {
  background: #1e90ff;
  color: #ffffff; /* White text color */
  border-color: #1e90ff; /* Dark neon border color on hover */
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
                <input type="text" class="form-control" id="admno" placeholder="admission number" name="admno" required/>
              </div>
              <div class="form-group">
                <label for="firstName">Full Name</label><br>
                <input type="text" class="form-control" id="name" name="name" placeholder="Full name" required/>
              </div>
              <div class="form-group">
                <label for="firstName">Branch</label><br>
                <input type="text" class="form-control" id="branch" name="branch" placeholder="Branch" required/>
              </div>
              <div class="form-group">
                <label for="firstName">Semester</label><br>
                <input type="text" class="form-control" id="sem" name="sem" placeholder="semester" required/>
              </div>
              <div class="form-group">
              
                <div class="padding1">
                  <label for="male" class="radio-inline" >
                    <input  type="radio" name="gender" value="m" id="male" required/>Male</label >
                  <label for="female" class="radio-inline">
                    <input type="radio" name="gender" value="f" id="female" required/> Female</label ><br>
            
              </div><br>
              <div class="form-group">
                <label for="email">Email</label><br>
                <input type="email" class="form-control" id="email" name="email" placeholder="email address" required/>
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label><br>
                <input type="number" class="form-control" id="number" name="number" placeholder="phone number" required/>
              </div>
              <div class="form-group">
                <div>
                  <label for="type" class="radio-inline"
                    ><input type="radio" name="type" value="w" id="weekly" required/>Weekly</label>
                  <label for="type" class="radio-inline">
                    <input type="radio" name="type" value="s" id="sem" required/>Sem</label >
                </div>
              </div>
              

              <div class="form-group">
                        <label>Bus</label>
                        <select name="bus_name" id="bus_name" class="form-control" placeholder="select" required>
                        <option>select</option>
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


              <input id ='submit' type="submit" value="Submit"/>
    </div>
            </form>
          </div>
        </div>
      </div>
    </div>
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
    $("#submit").click(function() {
      // Display an alert on button click
      alert("Registration Successful..!\n(Default Password:PASS)\nNote:You Can Only Login After Admin Approval.");
      
    
    });
});
</script>


  </body>
</html>