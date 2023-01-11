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
              <h1>Medical</h1>
            </div>
            <div class="col-sm-6">

            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="card-body">
          <!-- /.row -->
          <div class="row">
            <div class="col-md-12">
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title">Medical</h3>
                </div>
                <div class="card-body p-0">
                  <div class="bs-stepper">
                    <div class="bs-stepper-header" role="tablist">
                      <!-- your steps here -->
                      <div class="step" data-target="#logins-part">
                        <button type="button" class="step-trigger" role="tab" aria-controls="logins-part"
                          id="logins-part-trigger">
                          <span class="bs-stepper-circle">1</span>
                          <span class="bs-stepper-label">form1</span>
                        </button>
                      </div>
                      <div class="line"></div>
                      <div class="step" data-target="#information-part">
                        <button type="button" class="step-trigger" role="tab" aria-controls="information-part"
                          id="information-part-trigger">
                          <span class="bs-stepper-circle">2</span>
                          <span class="bs-stepper-label">Form2</span>
                        </button>
                      </div>
                      <div class="line"></div>
                      <div class="step" data-target="#form3">
                        <button type="button" class="step-trigger" role="tab" aria-controls="logins-part-trigger"
                          id="logins-part-trigger">
                          <span class="bs-stepper-circle">3</span>
                          <span class="bs-stepper-label">Form3</span>
                        </button>
                      </div>
                      <div class="line"></div>
                      <div class="step" data-target="#form4">
                        <button type="button" class="step-trigger" role="tab" aria-controls="detail"
                          id="information-part-trigger">
                          <span class="bs-stepper-circle">4</span>
                          <span class="bs-stepper-label">Form4</span>
                        </button>
                      </div>
                      <div class="line"></div>
                      <div class="step" data-target="#form5">
                        <button type="button" class="step-trigger" role="tab" aria-controls="information-part"
                          id="information-part-trigger">
                          <span class="bs-stepper-circle">5</span>
                          <span class="bs-stepper-label">Form5</span>
                        </button>
                      </div>
                    </div>

                    <div class="bs-stepper-content">
                      <!-- your steps content here -->
                      <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">company Name</label>
                            <input type="company" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">contractor Name</label>
                            <input type="Contrctor" class="form-control" id="exampleInputPassword1"
                              name="contractor_name" placeholder="contractor Name">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Employee Name</label>
                            <input type="Employee Name" class="form-control" id="exampleInputEmail1" name="employe_name"
                              placeholder="Employee Name">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Certificate no</label>
                            <input type="Certificate" class="form-control" id="exampleInputPassword1" name="carti_no"
                              placeholder="Certificate no">
                          </div>

                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Date of Examination</label>
                            <input type="date_examination" class="form-control" id="exampleInputEmail1"
                              name="date_examination" placeholder="Date of Examination">
                          </div>
                        </div>
                        <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                      </div>
                      <!-- form2 -->
                      <div id="information-part" class="content" role="tabpanel"
                        aria-labelledby="information-part-trigger">
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Height</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="height"
                              placeholder="Height">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Weight</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="Weight"
                              placeholder="Weight ">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Expected Weight</label>
                            <input type="exp_weight" class="form-control" id="exampleInputEmail1" name="exp_weight"
                              placeholder="Expected Weight">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">BP</label>
                            <input type="BP" class="form-control" id="exampleInputPassword1" name="bp"
                              placeholder="BP ">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Pulse</label>
                            <input type="Pulse" class="form-control" id="exampleInputEmail1" name="pulse"
                              placeholder=" pulse">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">BMI</label>
                            <input type="bmi" class="form-control" id="exampleInputPassword1" name="bmi"
                              placeholder="BMI ">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Chest</label>
                            <input type="chest" class="form-control" id="exampleInputEmail1" name="chest"
                              placeholder=" Chest">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Past History</label>
                            <input type="past_history" class="form-control" id="exampleInputPassword1"
                              name="past_history" placeholder="Past History ">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Present History</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="present_history"
                              placeholder=" Present History">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Family History</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="family_history"
                              placeholder="Family History ">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Father</label>
                            <input type="father" class="form-control" id="exampleInputEmail1" name="father"
                              placeholder=" Father">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Mother</label>
                            <input type="mother" class="form-control" id="exampleInputPassword1" name="mother"
                              placeholder="Mother">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Addiction</label>
                            <input type="addiction" class="form-control" id="exampleInputEmail1" name="addiction"
                              placeholder="Addiction">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Tobacco</label>
                            <input type="Tobacco" class="form-control" id="exampleInputPassword1" name="Tobacco"
                              placeholder="Tobacco ">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Smoking</label>
                            <input type="smoking" class="form-control" id="exampleInputEmail1" name="smoking"
                              placeholder="Smoking">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Drink</label>
                            <input type="drink" class="form-control" id="exampleInputPassword1" name="drink"
                              placeholder="Drink ">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Electrocardiogram</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="electrocardiogram"
                              placeholder="Electrocardiogram">
                          </div>
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">X ray Chest</label>
                            <input type="electrocardiogram" class="form-control" id="exampleInputEmail1"
                              name="x_ray_chest" placeholder="X ray Chest">
                          </div>
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="exampleInputPassword1">Pulmonary Function Test

                          </label>
                          <input type="pulmonary" class="form-control" id="exampleInputPassword1" name="pulmonary
                                  " placeholder="Pulmonary Function Test">
                        </div>


                        <!-- form 3 -->

                        <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                        <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                      </div>
                      <div id="form3" class="content" role="tabpanel" aria-labelledby="detailr">
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Hemoglobin</label>
                            <input type="hemoglobin" class="form-control" id="exampleInputEmail1" name="hemoglobin"
                              placeholder="Hemoglobin">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Total W.B.C Count
                            </label>
                            <input type="wbc_count" class="form-control" id="exampleInputPassword1" name="wbc_count"
                              placeholder="Total W.B.C Count
                  ">
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">R.B.C Count
                            </label>
                            <input type="RBC_count" class="form-control" id="exampleInputEmail1" name="RBC_count
                      " placeholder="R.B.C Count
                      ">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Platelate Count

                            </label>
                            <input type="Platelate_Count" class="form-control" id="exampleInputPassword1" name="Platelate_Count
                      " placeholder="Platelate Count

                      ">
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Biochemical Test

                            </label>
                            <input type="biochemical" class="form-control" id="exampleInputEmail1" name="biochemical
                      " placeholder="Biochemical Test

                      ">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Blood Sugar Random

                            </label>
                            <input type="blood_sugar_random" class="form-control" id="exampleInputPassword1" name="blood_sugar_random
                      " placeholder="Blood Sugar  Random

                      ">
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Blood Sugar Fasting

                            </label>
                            <input type="blood_sugar_fasting" class="form-control" id="exampleInputEmail1"
                              name="blood_sugar_fasting" placeholder="Blood Sugar Fasting">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Bun

                            </label>
                            <input type="bun" class="form-control" id="exampleInputPassword1" name="bun"
                              placeholder=" BUN">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">S.Creatinine</label>
                            <input type="s.creatinine" class="form-control" id="exampleInputEmail1" name="s.creatinine"
                              placeholder="Creatinine">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Total Cholesterol
                            </label>
                            <input type="total_cholesterol" class="form-control" id="exampleInputPassword1"
                              name="total_cholesterol" placeholder=" Total Cholesterol">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">SGOT

                            </label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="SGOT"
                              placeholder="SGOT">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">SGPT

                            </label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="SGPT"
                              placeholder=" SGPT">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">E.S.R
                            </label>
                            <input type="ESR" class="form-control" id="exampleInputEmail1" name="esr" placeholder="ESR">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Audiometry

                            </label>
                            <input type="audiometry" class="form-control" id="exampleInputPassword1" name="audiometry"
                              placeholder=" Audiometry">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Right Ear

                            </label>
                            <input type="right_ear" class="form-control" id="exampleInputEmail1" name="right_ear"
                              placeholder="Right Ear">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Left Ear

                            </label>
                            <input type="left_ear" class="form-control" id="exampleInputPassword1" name="left_ear"
                              placeholder=" Left Ear">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">gm/dl


                            </label>
                            <input type="gm_dl" class="form-control" id="exampleInputEmail1" name="gm_dl" placeholder="gm/dl
          ">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">mill/cumm

                            </label>
                            <input type="mill_cumm" class="form-control" id="exampleInputPassword1" name="mill_cumm
                    " placeholder="mill/cumm
                    ">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">mg/dl


                            </label>
                            <input type="dl" class="form-control" id="exampleInputEmail1" name="mg_dl"
                              placeholder="mg/dl">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">lakhfcu.mm

                            </label>
                            <input type="lakhfcu" class="form-control" id="exampleInputPassword1" name="lakhfcu.mm
                      " placeholder="lakhfcu.mm
                      ">
                          </div>
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="exampleInputPassword1">mm at the end of 1 hr

                          </label>
                          <input type="mm_at_1hr" class="form-control" id="exampleInputPassword1" name="mm_at_1hr
                                  " placeholder="mm at the end of 1 hr">
                        </div>

                        <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                        <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                      </div>
                      <div id="form4" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Protiens</label>
                            <input type="Protiens" class="form-control" id="exampleInputEmail1" name="protiens"
                              placeholder="Protiens">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Erthrocytes
                            </label>
                            <input type="Erthrocytes" class="form-control" id="exampleInputPassword1" name="erthrocytes"
                              placeholder="Erthrocytes 
                  ">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Haemoglobin</label>
                            <input type="Haemoglobin" class="form-control" id="exampleInputEmail1" name="hemoglobin"
                              placeholder="Haemoglobin">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Epthecial Cells
                            </label>
                            <input type="Erthrocytes" class="form-control" id="exampleInputPassword1"
                              name="epthecial_cells" placeholder="Epthecial Cells ">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">PUS Cells
                            </label>
                            <input type="pus_cells" class="form-control" id="exampleInputEmail1" name="pus_cells"
                              placeholder="PUS Cell">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Bacteria
                            </label>
                            <input type="Bacteria" class="form-control" id="exampleInputPassword1" name="Bacteria"
                              placeholder="Bacteria">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Glucose
                            </label>
                            <input type="Glucose" class="form-control" id="exampleInputEmail1" name="glucose"
                              placeholder="Glucose">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Casts
                            </label>
                            <input type="casts" class="form-control" id="exampleInputPassword1" name="casts"
                              placeholder="casts">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Crystals
                            </label>
                            <input type="Crystals" class="form-control" id="exampleInputEmail1" name="Crystals"
                              placeholder="Crystals">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">A. Material

                            </label>
                            <input type="A. Material" class="form-control" id="exampleInputPassword1" name="A_Material"
                              placeholder="A. Material">
                          </div>
                        </div>
                        <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                        <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                      </div>
                      <div id="form5" class="content" role="tabpanel" aria-labelledby="detailr">

                        <div class="row">
                          <div class="col-md-6 ">
                            <div class="form-group row">
                              <label for="exampledno" class="col-sm-3 col-form-label"> VISION <br> with glasses</label>


                              <div class="col-sm-6 " style="display:flex;">
                                <div class="row">
                                  <div class="col-sm-3 col-lg-6" style="display:block;">
                                    Near(R)
                                    <input type="tel" class="form-control" id="examplemob" name="without_glasses_near">
                                  </div>
                                  <div class="col-sm-3 col-lg-6">
                                    Far(L)
                                    <input type="tel" class="form-control" id="examplemob" name="without_glasses_far">
                                  </div>

                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6 ">
                            <div class="form-group row">
                              <label for="exampledno" class="col-sm-3 col-form-label"> VISION <br>without glasses
                              </label>

                              <div class="col-sm-6 " style="display:flex;">
                                <div class="row">

                                  <div class="col-sm-3 col-lg-6" style="display:block;">
                                    Near(R)
                                    <input type="tel" class="form-control" id="examplemob" name="with_glasses_near">
                                  </div>
                                  <div class="col-sm-3 col-lg-6">
                                    Far(L)
                                    <input type="tel" class="form-control" id="examplemob" name="with_glasses_far">
                                  </div>

                                </div>
                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Colour Blindness
                            </label>
                            <input type="Colour Blindness" class="form-control" id="exampleInputEmail1"
                              name="colour_blindness" placeholder="Colour Blindness">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Normal Vision Near & Distance Without Glasses.
                            </label>
                            <input type="dist_without_glasses" class="form-control" id="exampleInputPassword1"
                              name="dist_without_glasses" placeholder="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Result

                            </label>
                            <input type="result" class="form-control" id="exampleInputEmail1" name="result"
                              placeholder="Result">
                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Advice(Consult Phys.):
                            </label>
                            <input type="Advice" class="form-control" id="exampleInputPassword1" name="advice"
                              placeholder="Advice">
                          </div>
                        </div>
                        <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                        <button class="btn btn-primary" type="submit" form="form1" value="Submit">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  Visit <a href="https://github.com/Johann-S/bs-stepper/#how-to-use-it">bs-stepper documentation</a> for
                  more examples and information about the plugin.
                </div>
              </div>
              <!-- /.card -->
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
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
      })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', {
        'placeholder': 'mm/dd/yyyy'
      })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date picker
      $('#reservationdate').datetimepicker({
        format: 'L'
      });

      //Date and time picker
      $('#reservationdatetime').datetimepicker({
        icons: {
          time: 'far fa-clock'
        }
      });

      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker({
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
              'month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })

      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      $('.my-colorpicker2').on('colorpickerChange', function (event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      })

      $("input[data-bootstrap-switch]").each(function () {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      })

    })
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
      window.stepper = new Stepper(document.querySelector('.bs-stepper'));
    })

    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)

    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
      url: "/target-url", // Set the url
      thumbnailWidth: 80,
      thumbnailHeight: 80,
      parallelUploads: 20,
      previewTemplate: previewTemplate,
      autoQueue: false, // Make sure the files aren't queued until manually added
      previewsContainer: "#previews", // Define the container to display the previews
      clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    })

    myDropzone.on("addedfile", function (file) {
      // Hookup the start button
      file.previewElement.querySelector(".start").onclick = function () {
        myDropzone.enqueueFile(file)
      }
    })

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function (progress) {
      document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })

    myDropzone.on("sending", function (file) {
      // Show the total progress bar when upload starts
      document.querySelector("#total-progress").style.opacity = "1"
      // And disable the start button
      file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function (progress) {
      document.querySelector("#total-progress").style.opacity = "0"
    })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function () {
      myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function () {
      myDropzone.removeAllFiles(true)
    }
    // DropzoneJS Demo Code End

  </script>
</body>

</html>
