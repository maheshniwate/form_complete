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
                <li class="breadcrumb-item active">Hospital</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <form class="form-horizontal" name="companySettingForm" id="companySettingForm" method="post"
                enctype="multipart/form-data">
                <div class="card card-primary card-tabs">
                  <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                      <li class="pt-2 px-3">
                        <h3 class="card-title">Hospital Settings</h3>
                      </li>
                     
                      <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-bank-details-tab" data-toggle="pill"
                          href="#custom-tabs-bank-details" role="tab" aria-controls="custom-tabs-bank-details"
                          aria-selected="false">Bank Details</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-term-and-condition-tab" data-toggle="pill"
                          href="#custom-tabs-term-and-condition" role="tab"
                          aria-controls="custom-tabs-term-and-condition" aria-selected="false">Terms &amp; Condition</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                   

                      <div class="tab-pane fade active show" id="custom-tabs-bank-details" role="tabpanel"
                        aria-labelledby="custom-tabs-bank-details-tab">
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">
                            Bank Detail </label>
                          <div class="col-sm-6">
                            <textarea class="form-control form-control-sm" rows="5" name="bank_detail" id="bank_detail"
                              placeholder="Bank Detail">
                                            Bank Name : Canara Bank
                                            Account Number : 37481751171
                                            IFSC Code : SBIN0005683
                                            Branch Name : parula</textarea>
                            <span id="err_pincode" class="error invalid-feedback"></span>
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane fade" id="custom-tabs-term-and-condition" role="tabpanel"
                        aria-labelledby="custom-tabs-term-and-condition-tab">
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">
                            Terms &amp; Condition </label>

                          <div class="col-sm-9">
                            <textarea class="form-control form-control-sm" rows="6" name="terms_and_condition"
                              id="terms_and_condition" placeholder="Terms &amp; Condition">
                          1. Subject to navi mumbai Jurisdiction
                          2. Our responsibility ceases as soon as the goods leave our premises.
                          3. Goods once sold will not be taken back.
                          4. Delivery ex-premises.
                          5. in order to comply with any valid legal process such as a     search warrant, statute, or court order.
                          6.Hospital for making payments for bills or services through online payment gateway service.
                          7. Each User is therefore deemed to have read and accepted these Terms.
                           </textarea>
                            <span id="err_terms_and_condition" class="error invalid-feedback"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <input type="hidden" name="csrf_hosptial" value="480811adcf9fcf5e1a90f4c2ae1561dd">
                    <button type="submit" name="submit" id="companysettingSubmit" class="btn btn-info" data-tt="tooltip"
                      title="" data-original-title="Click here to Save">Save</button>
                  </div>
                  <!-- /.card -->
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
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
