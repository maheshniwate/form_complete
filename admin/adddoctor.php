<?php
    session_start();

    include("configure.php");

    if(isset($_POST['submit'])){
        $doctor_name=$_POST['doctor_name'];  
        $degree=$_POST['degree'];
        $specialist=$_POST['specialist'];
        $upload_signature=$_POST['upload_signature'];

      $sql=mysqli_query($conn,"INSERT INTO `doctor`(`doctor_name`,`degree`, `specialist`, `upload_signature`) VALUES 
  ('$doctor_name','$degree','$specialist','$upload_signature')");

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADD DOCTOR</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
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
            <h1>Add Doctor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Setting</a></li>
              <li class="breadcrumb-item active">Doctor</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Doctor</h3>
            </div>
            <div class="card-body">

            <form class="form-sample" method="POST">
            <div class="form-group">



              



                
              <div class="form-group">
                <label for="inputName">Doctor Name</label>
                <input type="text" id="inputName" name="doctor_name"  class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Degree</label>
                <input type="text" id="inputDescription" name="degree" class="form-control" rows="4">
              </div>
				<div class="form-group">
                <label for="inputStatus">Specialist</label>
                <select id="inputStatus" name="specialist" class="form-control custom-select">
                  <option disabled="">Select one</option>
                  <option>A</option>
                  <option>B</option>
                  <option>C</option>
                </select>
              </div>
              <div class="form-group">
                    <label for="exampleInputFile">Upload signature</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="upload_signature" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="ADD" name="submit" class="btn btn-success float-right">
        </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      
                        </form>
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
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
