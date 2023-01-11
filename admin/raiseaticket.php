<?php  
include("configure.php");
if(isset($_POST['submit']))
    {
        $client_code = $_POST['client_code'];
        $subject = $_POST['subject'];
        $email=$_POST['email'];
        $description = $_POST['description'];
        $sql= "INSERT INTO `complaint`(`client_code`,`subject`,`description`) VALUES ('$client_code','$subject','$description')";
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
  <title>AdminLTE 3 | Validation Form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
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

        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title" style="margin-left: 45%;">Raise a Ticket</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" method="post">
                  <div class="card-body">

                    <?php 
                 $sql=mysqli_query($conn,"select id from complaint order by id") or die(mysqli_error($conn));
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
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Client Code</label>

                          <input type="text" class="form-control" placeholder="Enter Client Code" name="client_code"
                            id="exampledno" value="<?php echo $number; ?>" required="" readonly>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Subject</label>
                          <input type="text" name="subject" class="form-control" id="exampleInputtext"
                            placeholder="Enter Subject">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Description</label>
                          <input type="text" name="description" class="form-control" id="exampleInputtext"
                            placeholder="Enter Discription">
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                      <button type="button" class="btn btn-primary">Cancel</button>
                    </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
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
  <!-- jquery-validation -->
  <script src="plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="plugins/jquery-validation/additional-methods.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->

</body>

</html>