<?php
    session_start();

    include("configure.php");

?>

<!-- verify -->


<?php
/*
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove MORALspace.
        $name = strip_tags(trim($_POST["hospital_name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["hospital_email_id"]), FILTER_SANITIZE_EMAIL);
        $pass= rand(100000, 999999);


        // Check that data was sent to the mailer.
        if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "kajalpatil281199@gmail.com";

        // Set the email subject.
        $subject = "New contact from $name";

        // Build the email content.
        
        $email_content .= "OTP:\n$pass\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }*/

?>



<!-- verify -->






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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <style>
    .form {

      width: 100%;
      padding: 10px;
      margin-top: 20px;
      border: 1px solid #dee2e6;
      font-size: 16px;
      border-radius: 20px;

    }
  </style>

  <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">


  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="text-align:center;">
          <h5 class="modal-title" id="exampleModalLabel" style="text-align:center;">Agreerent</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form class="forms-sample" method="post">
            <div class="form-group row">
              <label style="width:50%;">Hospital Name :</label>
              <input type="text" id="inputName" value="" style="width:50%; border:none;" placeholder="Hospital Name">
            </div>
            <div class="form-group row">
              <label style="width:50%;">Hospital Code :</label>
              <input type="text" id="inputCode" placeholder="Hospital Name" style="width:50%; border:none;">
            </div>



            <div class="my-2 d-flex justify-content-between align-items-center">

            </div>


        </div>
        <div class="modal-footer" style="justify-content:center;">
          <div class="mt-6">



            <button type="submit" name="submi_t" class="btn btn-primary btn-icon-text ">
              <i class="ti-file btn-icon-prepend"></i>
              OK
            </button>



          </div>
          </form>
        </div>
      </div>
    </div>
  </div>


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
          <h2>Hospital Registration</h2>
          <div class="card card-default">

            <!-- /.card-header -->
            <div class="card-body">
              <form class="form-sample" method="POST" id="form1">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Hospital Name</label>
                      <input type="text" class="form-control" id="hospital_name" name="hospital_name"
                        placeholder="Enter Hospital Name">
                      <!-- <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select> -->
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">

                      <?php
              $sql=mysqli_query($conn,"select max(id) as id from hospital_registration") or die( mysqli_error($conn));
                  $count=mysqli_fetch_array($sql);
                  $lastid=$count["id"];
                  $c=$lastid+1;
                
                  if(empty($c)){
              					  $number=00001;
               					  }else{
               						  $id=str_pad($c + 0, 5,0, STR_PAD_LEFT);
              						  $number=$id;
               					  }	
               // $last_id = mysqli_insert_id($conn);	
              ?>

                      <label>Hospital Code</label>
                      <input type="text" id="hospital_code" class="form-control" value="<?php echo $number ?>"
                        name="hospital_code" placeholder="Enter Code" readonly>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Phone</label>
                      <input type="text" class="form-control" name="hospital_mobile_number" id="hospital_mobile_number"
                        placeholder="Enter Phone No.">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" id="hospital_email_id" name="hospital_email_id"
                        placeholder="Enter Email">
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->


                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label>Country</label>
                      <input type="text" class="form-control" name="country" id="country" placeholder="Enter Country">
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label>State</label>
                      <input type="text" class="form-control" name="state" id="state" placeholder="Enter State">
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label>City</label>
                      <div class="select2-purple">
                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter city">
                      </div>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label>Address Line</label>

                      <textarea class="form-control" name="hospital_address" id="hospital_address"
                        placeholder="Enter Address"></textarea>

                    </div>
                    <!-- /.form-group -->
                  </div>

                </div>



                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">

                      <label>Pincode</label>
                      <div class="select2-purple">
                        <input type="number" class="form-control" name="pincode" id="pincode"
                          placeholder="Enter Pincode">
                      </div>

                    </div>
                  </div>
                </div>






              </form>
              <div class="col-12 col-sm-12" class="row">
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" id="btn" form="form1"
                  name="submit" class="btn btn-primary btn-icon-text" style="float:right;  margin-left:30px;">
                  <i class="ti-file btn-icon-prepend"></i>
                  Submit
                </button>

                <button type="button" name="submi_t" class="btn btn-primary btn-icon-text " style="float:right; ">
                  <i class="ti-file btn-icon-prepend"></i>
                  Verify OTP
                </button>
              </div>
              <!-- /.card-body -->
            </div>
          </div>

          <!-- /.card -->
          <!-- SELECT2 EXAMPLE -->

        </div>
    </div>

    <!-- /.card -->




    <!-- /.card -->



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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
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
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month')
              .endOf('month')
            ]
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
      window.stepper = new Stepper(document.querySelector('.bs-stepper'))
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
  <script>
    $(document).ready(function () {
      $("#hospital_name").change(function () {
        $("#inputName").val($('#hospital_name').val());
        $("#hospital_code").val();
        $("#inputCode").val($('#hospital_code').val());
      });

    });
  </script>
  <script>
    $(document).ready(function () {
      $("#btn").click(function () {
        let hospital_name = $('#hospital_name').val();
        let hospital_code = $('#hospital_code').val();
        let hospital_email_id = $('#hospital_email_id').val();
        let hospital_mobile_number = $('#hospital_mobile_number').val();
        let country = $('#country').val();
        let state = $('#state').val();
        let city = $('#city').val();
        let hospital_address = $('#hospital_address').val();
        let pincode = $('#pincode').val();

        $.ajax({
          url: "ajax.php",
          type: "post",
          data: {
            hospital_name: hospital_name,
            hospital_code: hospital_code,
            hospital_email_id: hospital_email_id,
            hospital_mobile_number: hospital_mobile_number,
            country: country,
            state: state,
            city: city,
            hospital_address: hospital_address,
            pincode: pincode
          },
          success: function (data) {

          }

        });
      });
    });
  </script>
</body>

</html>