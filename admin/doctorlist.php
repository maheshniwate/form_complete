<?php  
include("configure.php");


if(isset($_GET['delid'])){
  $id=mysqli_real_escape_string($conn,$_GET['delid']);
  $sql=mysqli_query($conn,"delete from doctor where id='$id'");
  if($sql=1){
    header("location:doctorlist.php");
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Navbar & Tabs</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
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
            <div class="col-12">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Setting</a></li>
                <li class="breadcrumb-item active">Doctor List &nbsp;</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">DOCTOR LIST</h3>
                <div class="card-tools">
                  <button type="button" onclick="location.href='adddoctor.php'"
                    class="btn btn-block btn-primary btn-sm add_expense_category_modal" data-toggle="modal"
                    data-target="#add_expense_category_modal" data-tt="tooltip" title=""
                    data-original-title="Click here to Add Expense Category">Add Doctor</button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                  <div class="row">
                    <div class="col-sm-12 col-md-6">
                      <div class="dataTables_length" id="example_length">
                        <label>Show <select name="example_length" aria-controls="example"
                            class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            &nbsp;
                            &nbsp;
                          </select> Entries</label>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <div id="example_filter" class="dataTables_filter" style="text-align:end">
                        <label style="text-align:left">Search:<input type="search" class="form-control form-control-sm"
                            placeholder="" aria-controls="example">
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <table id="example" class="table table-bordered table-striped dataTable no-footer" role="grid"
                        aria-describedby="example_info">
                        <thead>
                          <tr role="row">
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Expense Category Name">
                              Doctor Name</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                              aria-label="Description: activate to sort column ascending">Degree</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                              aria-label="Type: activate to sort column ascending">Specialist</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                              aria-label="Type: activate to sort column ascending">Signature</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                              aria-label="Action: activate to sort column ascending">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php     
    $sql=mysqli_query($conn,"select * from doctor");
    while($arr=mysqli_fetch_array($sql)){
    ?>
                          <tr role="row" class="even">
                            <td><?php echo $arr['doctor_name'];?></td>
                            <td><?php echo $arr['degree'];?></td>
                            <td><?php echo $arr['specialist'];?></td>
                            <td><?php echo $arr['upload_signature'];?></td>
                            <td>
                              <div class="btn-group">

                                <a href="#" data-toggle="modal" data-target="#edit_expense_category_modal"
                                  data-tt="tooltip" title="" class="btn btn-info btn-xs edit_expense_category_modal"
                                  data-expense_category_id="MQ==" data-original-title="Edit expense category">
                                  <i class="fas fa-edit"></i> Edit
                                </a>&nbsp;&nbsp;&nbsp;
                                <a href="doctorlist.php?delid=<?php echo $arr['id']; ?>"
                                   class="btn btn-danger btn-xs delete_expense_category_modal">
                                  <i class="fas fa-trash"></i> Delete
                                </a>
                              </div>
                            </td>
                          </tr>
                          <?php }  ?>
                        </tbody>
                      </table>
                      <div id="example_processing" class="dataTables_processing card" style="display: none;">
                        Processing...</div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-5">
                      <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 2 of
                        2 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                      <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                        <ul class="pagination" style="padding-left: 530px">
                          <li class="paginate_button page-item previous disabled" id="example_previous">
                            <a href="#" aria-controls="example" data-dt-idx="0" tabindex="0"
                              class="page-link">Previous</a>
                          </li>
                          <li class="paginate_button page-item active"><a href="#" aria-controls="example"
                              data-dt-idx="1" tabindex="0" class="page-link">1</a>
                          </li>
                          <li class="paginate_button page-item next disabled" id="example_next"><a href="#"
                              aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
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

  <script language="JavaScript" type="text/javascript">
    function checkDelete() {
      return confirm('Are you sure you want to delete this userid?');
    }
  </script>

  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</body>

</html>