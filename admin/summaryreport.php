<?php
include("configure.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Simple Tables</title>

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
            <div class="col-md-12">
              <div class="card">
                <br>
                <h3 style="text-align:center">Summary Reports</h3><br>
                <div class="col-md-9">
                  <form method="post">
                    <div class="form-group">
                      <label>Select Company/Contractor</label>
                      <select class="form-control select2" style="width: 100%;" name="company">
                        <option selected="selected">select company</option>
                        <?php
                    $sql=mysqli_query($conn,"select * from company");
                    while($arr=mysqli_fetch_array($sql)){
                    ?>
                        <option value="<?php echo $arr["id"] ?>"><?php echo $arr["company_name"] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                </div>
                <div class="card-footer" style="background-color:white;">
                  <button type="button" id="bt" name="sub" class="btn btn-primary">Submit</button>
                </div>
                </form>
                <!-- /.card-header -->

                <!-- /.card -->
              </div>
              <?php
            if(isset($_POST['sub'])){
              $company=$_POST['company'];

            }
            ?>
              <section class="content sectionTable">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header">
                          <h3 style="text-align:center;">Company Name</h3>
                          <p style="text-align:center;">ADD:<br>Navi Mumbai-400 701, Maharashtra,India.</p>
                          <p style="text-align:center;">DATE: 5TH TO 7TH & 19TH NOVEMBER 2019 </p>
                          <h3 style="text-align:center;">SUMMARY REPORT</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <div style="overflow-x:auto;">
                            <table class="table table-bordered" id="empTable">
                              <thead>
                                <tr>
                                  <td>Sr.No</td>
                                  <td>Cert No</td>
                                  <td>Exam Date</td>
                                  <td>Employee No</td>
                                  <td>Employee Name</td>
                                  <td>Age(Yrs)</td>
                                  <td>SEX</td>
                                  <td>DOB</td>
                                  <td>Fit/Unfit</td>
                                  <td>Department</td>
                                  <td>Designation</td>
                                  <td>Contractor Name</td>
                                  <td>Identification mark</td>
                                  <td>Blood Group</td>
                                  <td>Present History</td>
                                  <td>Past History</td>
                                  <td>Family History</td>
                                  <td>Height(cms)</td>
                                  <td>Weight(kg)</td>
                                  <td>Weight Advice</td>
                                  <td>BMI</td>
                                  <td>With Glass</td>
                                  <td>Without Glass</td>
                                  <td>Near Right</td>
                                  <td>Near Left</td>
                                  <td>Distant Right</td>
                                  <td>Distant Left</td>
                                  <td>Color Vision</td>
                                  <td>Pulse(min)</td>
                                  <td>Systole</td>
                                  <td>Distole</td>
                                  <td>Htn Advice</td>
                                  <td>Hb</td>
                                  <td>Tc</td>
                                  <td>DCN</td>
                                  <td>DCL</td>
                                  <td>DCE</td>
                                  <td>DCM</td>
                                  <td>RBC</td>
                                  <td>Platelate Count</td>
                                  <td>ESR</td>
                                  <td>RBS</td>
                                  <td>PH</td>
                                  <td>Specific Gravity</td>
                                  <td>Albumin</td>
                                  <td>Sugar</td>
                                  <td>Urine Remark</td>
                                  <td>X ray</td>
                                  <td>Audiometry</td>
                                  <td>ECG Diagnosis</td>
                                  <td>Spirometry</td>
                                  <td>Smoker</td>
                                  <td>Alcoholics</td>
                                  <td>Tobacco/Pan/Gutkha</td>
                                  <td>Advice</td>
                                </tr>
                              </thead>
                              <tbody>
                              <tbody>
                                <?php $sql=mysqli_query($conn,"select summary_report.sr_no,summary_report.exam_date,summary_report.emp_no,medical.certi_no,employee.name,employee.age,employee.gender,summary_report.dob,summary_report.fit_unfit,employee.department,employee.designation,contractor.contractor_name,summary_report.identification_mark,summary_report.blood_group,
                          summary_report.present_history,summary_report.past_history,summary_report.family_history,
                          employee.height,employee.weight,summary_report.weight_advice,employee.bmi,medical.with_glasses_near_r,summary_report.near_left,summary_report.distance_right,summary_report.distance_left,summary_report.color_vision,summary_report.color_vision,employee.pulse,
                          medical.without_glasses_near_r,summary_report.near_right,summary_report.systole,summary_report.distole,summary_report.htn_advice,summary_report.hb,summary_report.tc,summary_report.dcn,summary_report.dcl,summary_report.dce,summary_report.dcm,summary_report.rbc_platelate_count,summary_report.esr,summary_report.rbs,summary_report.ph,summary_report.specific_gravity,summary_report.albumin,summary_report.sugar,summary_report.urine_remark,medical.x_ray_chest,summary_report.audiometry,summary_report.ecg_diagnosis,summary_report.spirometry,summary_report.smoker,summary_report.alcoholics,summary_report.ecg_diagnosis,medical.tabacco,medical.advice
                          from summary_report inner join medical on summary_report.emp_id=medical.emp_id inner join employee on summary_report.emp_id=employee.emp_id inner join contractor on summary_report.emp_id=contractor.emp_id" );
                          while($arr=mysqli_fetch_array($sql)){
    ?>
                                <tr>
                                  <td><?php echo $arr['sr_no'];?></td>
                                  <td><?php echo $arr['certi_no'];?></td>
                                  <td><?php echo $arr['exam_date'];?></td>
                                  <td><?php echo $arr['emp_no'];?></td>
                                  <td><?php echo $arr['name'];?></td>
                                  <td><?php echo $arr['age'];?></td>
                                  <td><?php echo $arr['gender'];?></td>
                                  <td><?php echo $arr['dob'];?></td>
                                  <td><?php echo $arr['fit_unfit'];?></td>
                                  <td><?php echo $arr['department'];?></td>
                                  <td><?php echo $arr['designation'];?></td>
                                  <td><?php echo $arr['contractor_name'];?></td>
                                  <td><?php echo $arr['identification_mark'];?></td>
                                  <td><?php echo $arr['blood_group'];?></td>
                                  <td><?php echo $arr['present_history'];?></td>
                                  <td><?php echo $arr['past_history'];?></td>
                                  <td><?php echo $arr['family_history'];?></td>
                                  <td><?php echo $arr['height'];?></td>
                                  <td><?php echo $arr['weight'];?></td>
                                  <td><?php echo $arr['weight_advice'];?></td>
                                  <td><?php echo $arr['bmi'];?></td>
                                  <td><?php echo $arr['with_glasses_near_r'];?></td>
                                  <td><?php echo $arr['without_glasses_near_r'];?></td>
                                  <td><?php echo $arr['near_right'];?></td>
                                  <td><?php echo $arr['near_left'];?></td>
                                  <td><?php echo $arr['distance_right'];?></td>
                                  <td><?php echo $arr['distance_left'];?></td>
                                  <td><?php echo $arr['color_vision'];?></td>
                                  <td><?php echo $arr['pulse'];?></td>
                                  <td><?php echo $arr['systole'];?></td>
                                  <td><?php echo $arr['distole'];?></td>
                                  <td><?php echo $arr['htn_advice'];?></td>
                                  <td><?php echo $arr['hb'];?></td>
                                  <td><?php echo $arr['tc'];?></td>
                                  <td><?php echo $arr['dcn'];?></td>
                                  <td><?php echo $arr['dcl'];?></td>
                                  <td><?php echo $arr['dce'];?></td>
                                  <td><?php echo $arr['dcm'];?></td>
                                  <td><?php echo $arr['rbc_platelate_count'];?></td>
                                  <td><?php echo $arr['esr'];?></td>
                                  <td><?php echo $arr['rbs'];?></td>
                                  <td><?php echo $arr['ph'];?></td>
                                  <td><?php echo $arr['specific_gravity'];?></td>
                                  <td><?php echo $arr['albumin'];?></td>
                                  <td><?php echo $arr['sugar'];?></td>
                                  <td><?php echo $arr['urine_remark'];?></td>
                                  <td><?php echo $arr['urine_remark'];?></td>
                                  <td><?php echo $arr['x_ray_chest'];?></td>
                                  <td><?php echo $arr['audiometry'];?></td>
                                  <td><?php echo $arr['ecg_diagnosis'];?></td>
                                  <td><?php echo $arr['spirometry'];?></td>
                                  <td><?php echo $arr['smoker'];?></td>
                                  <td><?php echo $arr['alcoholics'];?></td>
                                  <td><?php echo $arr['tabacco'];?></td>
                                  <td><?php echo $arr['advice'];?></td>
                                </tr>
                                <?php }  ?>
                              </tbody>
                            </table>
                          </div>
                          <!-- /.card-body -->
                          <div class="card-footer clearfix">

                          </div>
                        </div>
                        <!-- /.card -->
                      </div>

                      <!-- /.card -->
                    </div>
                    <!-- /.col -->

                    <!-- /.col -->
                  </div>

                </div><!-- /.container-fluid -->
              </section>
              <!-- /.card -->
            </div>
            <!-- /.col -->

            <!-- /.col -->
          </div>

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
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
  <script src="jquery-table2excel-master/src/jquery.table2excel.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
  <script>
    $(document).ready(function () {
      $(".sectionTable").hide();
      $('#bt').click(function () {
        $("#empTable").table2excel({
          filename: "Employees.xls"
        });
      });
      $("#bt").click(function () {
        $(".sectionTable").show();
      })

    });
  </script>
</body>

</html>