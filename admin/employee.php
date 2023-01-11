<?php 
include('configure.php');


    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $office_no = $_POST['office_no'];
        $address = $_POST['address'];
        $employee_code = $_POST['employee_code'];
        $city = $_POST['city'];
        $gender = $_POST['gender'];
        $pincode = $_POST['pincode'];
        $contact_no = $_POST['contact_no'];
        $category=$_POST['category'];
        
        $id=$_POST['company_name'];
        $sql="INSERT INTO `employee`(`name`,`age`,`office_no`,`address`, `pincode`,`contact_no`,`employee_code`,`gender`, `emp_id`, `department`) VALUES ('$name','$age','$office_no','$address','$pincode','$contact_no','$employee_code','$gender','$id','$category')";
        if (mysqli_query($conn, $sql)){
          echo "<script> alert ('New record has been added successfully !');</script>";
       } else {
          echo "<script> alert ('connection failed !');</script>";
       }
      
    }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Advanced form elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style>
    .select2-container .select2-selection--single {
      height: 34px !important;
    }

    .select2-container--default .select2-selection--single {
      border: 1px solid #ccc !important;
      border-radius: 4px !important;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include("header.php")?>

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include("sidebar.php")?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- SELECT2 EXAMPLE -->
          <h4>Employee Registration</h4>
          <div class="card card-default">
            <form class="form-sample" method="post">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Company Name</label>

                      <?php 
                  $query=mysqli_query($conn,"select * from company");
                  ?>


                      <select class="form-control select2" name="company_name" style="width: 100%;">
                        <option selected="selected">select</option>
                        <?php
                   while($sql=mysqli_fetch_array($query))
                   {
                     ?>

                        <option value="<?php echo $sql['id'] ?>"> <?php echo $sql['company_name']; ?></option>
                        <?php } ?>
                      </select>

                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Employee Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Enter Employee Name">
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->


                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Employee Id</label>
                      <input type="text" class="form-control" id="employee_code" name="employee_code" required="">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>City</label>
                      <input type="text" name="city" class="form-control">
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->


                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label>Age</label>
                      <input type="text" class="form-control" name="age" placeholder="Enter age">
                    </div>
                    <!-- /.form-group -->
                  </div>

                  <!-- /.col -->
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label>Gender</label>
                      <div class="select2-purple">
                        <select class="form-control" name="gender">
                          <option value="default selected">select</option>
                          <option value="female">Female</option>
                          <option value="male">Male</option>
                        </select>


                        </select>
                      </div>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control" name="address" placeholder="Enter  Address"></textarea>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label>Department</label>
                      <?php 
                  $query=mysqli_query($conn,"select * from department");
                
                  ?>


                      <select class="form-control select2" name="category" style="width: 100%;">
                        <option selected="selected">select</option>
                        <?php
                   while($sql=mysqli_fetch_array($query))
                   {
                     ?>


                        ?>

                        <option value="<?php echo $sql['category']; ?>"> <?php echo $sql['category']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <!-- /.form-group -->
                  </div>

                </div>
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label>Pincode</label>
                      <input type="number" name="pincode" class="form-control">
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label>Mobile No</label>
                      <div class="select2-purple">
                        <input type="tel" class="form-control" name="contact_no" placeholder="Enter mobile no">
                      </div>
                    </div>
                    <!-- /.form-group -->
                  </div>

                </div>


                <div class="row">

                  <!-- /.col -->
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label>Office No</label>
                      <div class="select2-purple">
                        <input type="tel" class="form-control" name="office_no" placeholder="Enter mobile no">
                      </div>
                    </div>
                    <!-- /.form-group -->
                  </div>

                </div>



                <div class="form-group">

                  <button type="submit" name="submit" class="btn btn-primary btn-icon-text " style="float: right;">
                    <i class="ti-file btn-icon-prepend"></i>
                    Add
                  </button>

                </div>

            </form>
          </div>
        </div>
        <!-- /.card-body -->

    </div>
    <!-- /.card -->




    <?php include("footer.php")?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <script>
    $('.select2').select2();
  </script>
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 -->
  <script src="plugins/select2/js/select2.full.min.js"></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <!-- InputMask -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/inputmask/jquery.inputmask.min.js"></script>
  <!-- date-range-picker -->
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Bootstrap Switch -->
  <script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <!-- BS-Stepper -->
  <script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
  <!-- dropzonejs -->
  <script src="plugins/dropzone/min/dropzone.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->

</body>

</html>