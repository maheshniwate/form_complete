<?php  
include("configure.php");
$id=$_GET['id'];
  
?>
<html>

<head>
    <title>View Detail</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/view.css">
    <link rel="stylesheet" type="text/css" href="javascript/view.js">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
</head>

<body>
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3>View the Details</h3>
                <div class="card" id="body">

                    <form id="body" action="pdf.php" class="form-card">
                        <?php     
                                    $sql=mysqli_query($conn,"select * from internship_2022 where id='$id'");
                                    while($arr=mysqli_fetch_assoc($sql)){
                                        $cv=$arr['upload_cv'];
                                ?>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6  ">
                                <label class="form-control-label px-1">Full Name :-
                                    <span class="text-danger">
                                        *</span></label>
                                <label class="" style=""><?php echo $arr['fullname'];?></label>
                            </div>
                            <div class="form-group col-sm-6  "> <label class="form-control-label px-3">Email :- <span
                                        class="text-danger"> *</span></label>
                                <label class="" style=""><?php echo $arr['email'];?></label>
                            </div>
                            
                            <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6  ">
                                <label class="form-control-label px-3">Mobile number :-
                                    <span class="text-danger">
                                        *</span></label>
                                <label class="" style=""><?php echo $arr['mobile'];?></label>
                            </div>
                            <div class="form-group col-sm-6  "> <label class="form-control-label px-3">Position :- <span
                                        class="text-danger"> *</span></label>
                                <label class="" style=""><?php echo $arr['position'];?></label>
                            </div>
                            <div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-12">
                                        <label class="form-control-label px-4">&nbsp;&nbsp;Why Would You Like to Work with DOJO
                                            Sports ? :-
                                            <span class="text-danger">*</span>
                                        </label>
                                        <label class="" style=""><?php echo $arr['dogo'];?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-12">
                                    <label class="form-control-label px-4">&nbsp;&nbsp;Why Should We Hire You ? :-
                                        <span class="text-danger"> *</span>
                                    </label>
                                    <label class="" style=""><?php echo $arr['hire_you'];?>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 ">
                                <label class="form-control-label px-3">Achievements in Your Field
                                    <span class="text-danger">*</span>
                                </label>
                                <label class="" style=""><?php echo $arr['achievements'];?>
                                </label>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 ">
                                <label class="form-control-label px-3">Do
                                    you have a Laptop and Strong Internet Connection readily available to begin
                                    with us in a Work from Home Model ? :-
                                    <span class="text-danger"> *</span>
                                </label>

                                <label class="form-control-label px-3"
                                    style=""><?php echo $arr['have_laptop_internetconnection'];?>
                                </label>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex">
                                <label class="form-control-label px-3">How did you hear about this Internship ?
                                    <span class="text-danger">*</span>
                                </label>
                                <label class="form-control-label px-3" style=""><?php echo $arr['know_aboutus'];?>
                                </label>
                            </div>
                        </div>


                        <?php };  ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    function download() {
        var element = document.getElementById('body');
        html2pdf().from(element).save('filename.pdf');

    }
    window.close('i.php');
    window.onload = download;
    </script>
</body>

</html>