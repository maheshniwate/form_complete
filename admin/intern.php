<?php  
session_start();
if(!isset($_SESSION['id'])){
  header("location:../login.php");
}
else{
include("../configure.php");
if(isset($_GET['delid'])){
  $id=mysqli_real_escape_string($conn,$_GET['delid']);
  $sql=mysqli_query($conn,"delete from internship_2022 where id='$id'");
  if($sql=1){
    header("location:intern.php");
  }
}

?>
 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Internship Table</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="">
  <div class="">


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="margin-left: 0px;">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>DataTables</h1>
              <a href="../logout.php">logout</a>
            </div>

          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable with default features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>NAME</th>
                        <th>EMAIL ID</th>
                        <th>MOBILE NO</th>
                        <th>POSITION</th>
                        <th>DATE AND TIME OF APPLY</th>
                        <th>ACTION </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php  
                      $sql=mysqli_query($conn,"select * from internship_2022");   
                   
                    while($arr=mysqli_fetch_array($sql)){
                  ?>
                      <tr>
                        <td><?php echo $arr['fullname'];?></td>
                        <td><?php echo $arr['email'];?></td>
                        <td><?php echo $arr['mobile'];?></td>
                        <td><?php echo $arr['position'];?></td>
                        <td><?php echo $arr['date'];?></td>
                        <td>
                          <div class="btn-group">
                            <a href="../view.php?id=<?php echo $arr['id']; ?>" data-toggle="" data-target="#edit_expense_category_modal" data-tt="tooltip"
                              title="" class="btn btn-info btn-xs edit_expense_category_modal"
                              data-expense_category_id="MQ==" data-original-title="Edit expense category">
                              <i class="fas fa-solid fa-eye"></i>&nbsp; View
                            </a>&nbsp;&nbsp;&nbsp;
                            <a href="../i.php?id=<?php echo $arr['id']; ?>" data-toggle="" data-target="#edit_expense_category_modal" data-tt="tooltip"
                              title="" class="btn btn-primary btn-xs edit_expense_category_modal"
                              data-expense_category_id="MQ==" data-original-title="Edit expense category">
                              <i class="fas fa-solid fa-file-pdf"></i>&nbsp;&nbsp; PDF
                            </a>&nbsp;&nbsp;&nbsp;
                            <a href="intern.php?delid=<?php echo $arr['id']; ?>"
                              class="btn btn-danger btn-xs delete_expense_category_modal">
                              <i class="fas fa-trash"></i>&nbsp; Delete
                            </a>
                          </div>
                        </td>
                      </tr>
                      <?php }  ?>
                    </tbody>

                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  <script language="JavaScript" type="text/javascript">
    function checkDelete() {
      return confirm('Are you sure you want to delete this userid?');
    }
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const btn = document.getElementById("button");

        btn.addEventListener("click", function () {
            var element = document.getElementById('body');
            html2pdf().from(element).save('filename.pdf');
        });
    </script>
</body>

</html>
<?php } ?>