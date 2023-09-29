<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Importing Student details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
            
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
                    <div class="card-header">
                        <h4>STUDENT BUS FEES DETAILS SEMESTER WISE</h4>
                    </div>


                    <div class="card-body">



                        <form action="<?php echo base_url('import'); ?>" method="POST" enctype="multipart/form-data">
                            <input type="date" name="date_field1" class="form-control" placeholder="Date of import" required/><br>
                            <input type="file" name="import_file1" class="form-control" required/>
                            <button type="submit" name="save_excel_data1" class="btn btn-primary mt-3">Import</button>

                        </form>

                      
                    </div>
            </div><br><br>

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
          
            <div class="card-header">
                        <h4>STUDENT BUS FEES DETAILS FOR DAILY PASS </h4>
                    </div>

                <div class="card-body">


                    <form action="<?php echo base_url('D_import'); ?>" method="POST" enctype="multipart/form-data">
                            <input type="date" name="date_field2" class="form-control" placeholder="Date of import" required/><br>
                            <input type="file" name="import_file2" class="form-control" required/>
                            <button type="submit" name="save_excel_data2" class="btn btn-primary mt-3">Import</button>

                        </form>
                </div>


            </div>

                </div>
            </div>
        </div>
    </div>
