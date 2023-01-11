<?php
include('configure.php');
if(isset($_POST['submi_t']))
    {
        $company_name= $_POST['company_name'];
        $company_address =$_POST['company_address'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $mobile_no = $_POST['mobile_no'];
        $pincode = $_POST['pincode'];
        $city = $_POST['city'];
        $office_no = $_POST['office_no'];
        $company_id = $_POST['company_id'];
        $sql=  "INSERT INTO `company`(`company_name`, `company_address`,`email`, `mobile_no`, `pincode`, `city`, `website`, `office_no`, `company_id`) VALUES ('$company_name','$company_address','$email','$mobile_no','$pincode','$city','$website','$office_no','$company_id')";
        if (mysqli_query($conn, $sql)){
          echo "<script> alert ('New record has been added successfully !');</script>";
       } else {
          echo "<script> alert ('connection failed !');</script>";
       }
      // mysqli_close($conn);
    }
    echo "<script>alert('hello');</script>";
  ?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Advanced form elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
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
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Company Registration</h1>
            </div>

          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- SELECT2 EXAMPLE -->
          <div class="card card-default">

            <!-- /.card-header -->
            <div class="card-body">
              <form class="form-sample" method="post">


                <?php 
                  $numbe='';
                 $sql=mysqli_query($conn,"select id from company order by id") or die(mysqli_error($conn));
                 $count=mysqli_num_rows($sql);
                
                $c=$count+1;
                if(empty($c)){
                  $number="0001";
                }
                else {
                  $lastid=str_pad($c+ 0, 4, 0, STR_PAD_LEFT);
                  $number=$lastid;
                  
                }
                 ?>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Company ID </label>

                      <input type="text" class="form-control" placeholder="Company ID" name="company_id" id="exampledno"
                        value="<?php echo $number; ?>" required="" readonly>
                    </div>



                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" placeholder="Email" name="email" id="Email" required="">

                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Company Name</label>
                      <input type="text" class="form-control" placeholder="Company Name" name="company_name"
                        id="company_name" required="">

                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Website</label>
                      <input type="text" class="form-control" placeholder="Website" name="website" id="website"
                        required="">

                    </div>
                    <!-- /.form-group -->
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Mobile No</label>
                      <input type="text" class="form-control" placeholder="Mobile Number" name="mobile_no"
                        id="mobile_no" required="">

                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Pincode</label>
                      <input type="text" class="form-control" placeholder="pincode" name="pincode" id="pincode"
                        required="">

                    </div>
                    <!-- /.form-group -->
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Office No</label>
                      <input type="text" class="form-control" placeholder="Office No" name="office_no" id="office_no"
                        required="">

                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" class="form-control" placeholder="Address" name="company_address" id="address"
                        required="">

                    </div>
                    <!-- /.form-group -->
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>City</label>
                      <input type="text" class="form-control" placeholder="city" name="city" id="city" required="">

                    </div>

                  </div>
                  <!-- /.col -->
                </div>
                <div class="form-group">

                  <button type="submit" name="submi_t" class="btn btn-primary btn-icon-text " style="float: right;">
                    <i class="ti-file btn-icon-prepend"></i>
                    Add
                  </button>

                </div>

              </form>
              <!-- /.row -->


            </div>

          </div>

        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include("footer.php")?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

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
  <!-- Page specific script -->

</body>

</html>
