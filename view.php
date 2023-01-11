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
                    
                    <form action="pdf.php" class="form-card">
                                        <?php     
                                    $sql=mysqli_query($conn,"select * from internship_2022 where id='$id'");
                                    while($arr=mysqli_fetch_assoc($sql)){
                                        $cv=$arr['upload_cv'];
                                
                                ?>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label
                                    class="form-control-label px-3">Full Name<span class="text-danger">
                                        *</span></label> <input type="" id="fname" name="fullname"
                                    placeholder="<?php echo $arr['fullname'];?>" onblur="validate(1)" readonly> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label
                                    class="form-control-label px-3">Email<span class="text-danger"> *</span></label>
                                <input type="text" id="email" name="email" placeholder="<?php echo $arr['email'];?>"
                                    onblur="validate(2)" readonly> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label
                                    class="form-control-label px-3">Mobile number<span class="text-danger">
                                        *</span></label> <input type="text" id="mob" name="mobile"
                                    placeholder="<?php echo $arr['mobile'];?>" onblur="validate(3)" readonly> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label
                                    class="form-control-label px-3">Position<span class="text-danger">
                                        *</span></label> <input type="text" id="position" name="position"
                                    placeholder="<?php echo $arr['position'];?>" onblur="validate(4)" readonly> </div>

                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex"> <label
                                    class="form-control-label px-3">Why Would You Like to Work with DOJO Sports ?<span
                                        class="text-danger"> *</span></label>
                                <input type="text" id="job" name="dogo" placeholder="<?php echo $arr['dogo'];?>"
                                    onblur="validate(5)" readonly> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex"> <label
                                    class="form-control-label px-3">Why Should We Hire You ?<span class="text-danger">
                                        *</span></label>
                                <input type="text" id="job" name="hire_you" placeholder="<?php echo $arr['hire_you'];?>"
                                    onblur="validate(6)" readonly> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex"> <label
                                    class="form-control-label px-3">Achievements in Your Field<span class="text-danger">
                                        *</span></label>
                                <input type="text" id="job" name="achievements"
                                    placeholder="<?php echo $arr['achievements'];?>" onblur="validate(7)" readonly>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Do
                                    you have a Laptop and Strong Internet Connection readily available to begin with us
                                    in a Work from Home Model ?<span class="text-danger"> *</span></label> <input
                                    type="text" id="ans" name="have_laptop_internetconnection"
                                    placeholder="<?php echo $arr['have_laptop_internetconnection'];?>"
                                    onblur="validate(8)" readonly>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex"> <label
                                    class="form-control-label px-3">Download CV<span class="text-danger">
                                        *</span></label>
                                <div class="form-group col-sm-12 flex-column d-flex">
                                    <a href="/form/cv/<?php echo $cv,$arr ?>">
                                        Download
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex"> <label
                                    class="form-control-label px-3">How did you hear about this Internship ?<span
                                        class="text-danger">
                                        *</span></label>
                                <input type="text" id="job" name="know_aboutus"
                                    placeholder="<?php echo $arr['know_aboutus'];?>" onblur="validate(7)" readonly>
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="form-group col-sm-12"> <button id="button" type="button"
                                    class="btn-block btn-danger">Download</button> </div>
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
        const btn = document.getElementById("button");

        btn.addEventListener("click", function () {
            var element = document.getElementById('body');
            html2pdf().from(element).save('filename.pdf');
        });
    </script>
</body>

</html>