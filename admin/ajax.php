<?php
include("configure.php");
        $hospital_name=$_POST['hospital_name']; 
        $hospital_code=$_POST['hospital_code'];
        $hospital_email_id=$_POST['hospital_email_id'];
        $hospital_mobile_number=$_POST['hospital_mobile_number'];
        $country=$_POST['country'];
        $state=$_POST['state'];
        $city=$_POST['city'];
      $hospital_address=$_POST['hospital_address'];
      $pincode=$_POST['pincode'];

      $sql=mysqli_query($conn,"INSERT INTO `hospital_registration`(`hospital_name`,`hospital_code`,`hospital_email_id`, `hospital_mobile_number`, `country`, `state`,`city`, `hospital_address`, `pincode`) VALUES 
  ('$hospital_name','$hospital_code','$hospital_email_id','$hospital_mobile_number','$country','$state','$city','$hospital_address','$pincode')");

    ?>