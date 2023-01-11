<?php
include('configure.php');
if(isset($_POST['submit']))
    {
        $fullname= $_POST['fullname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $dogo = $_POST['dogo'];
        $hire_you = $_POST['hire_you'];
        $achievements = $_POST['achievements'];
        $position = $_POST['position'];
        $have_laptop_internetconnection = $_POST['have_laptop_internetconnection'];
        $know_aboutus = $_POST['know_aboutus'];
        $file=$_FILES['file']['name'];   
        $filedet=$_FILES['file']['tmp_name'];
        $loc="cv/".$file;
        move_uploaded_file($filedet,$loc);
        $sql="INSERT INTO internship_2022(fullname,email,mobile,dogo,hire_you,achievements,position,have_laptop_internetconnection,know_aboutus,upload_cv) 
        VALUES('$fullname','$email','$mobile','$dogo','$hire_you','$achievements','$position','$have_laptop_internetconnection','$know_aboutus','$file')";
        if (mysqli_query($conn, $sql)){
          echo "<script> alert ('New record has been added successfully !');</script>";
       } else {
          echo "<script> alert ('connection failed !');</script>";
       }
      mysqli_close($conn);
    }
  
    
  ?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Internship Form</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <style>
    .select2-container .select2-selection--single {
      height: 34px !important;
    }

    .select2-container--default .select2-selection--single {
      border: 1px solid #ccc !important;
      border-radius: 4px !important;
    }
  </style>

  <style>
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }

    li {
      float: left;
    }

    li a,
    .dropbtn {
      display: inline-block;
      color: white;
      text-align: center;
      padding: 14px 415px;
      text-decoration: none;
    }

    li a:hover,
    .dropdown:hover .dropbtn {
      background-color: red;
    }

    li.dropdown {
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 316px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }
  </style>
</head>

<body>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root"
              style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>

      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">

        <div class="formbg-outer">

          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">

              <div class=" padding-bottom--24 flex-flex flex-justifyContent--center">
                <h2><a href="" rel="dofollow" style>Apply for Internship Program 2022</a></h2>

              </div>

              <form id="stripe-login" method="post" enctype="multipart/form-data">
                <div class="field padding-bottom--24">
                  <label for="name">Full Name</label>
                  <input type="text" name="fullname" required>
                </div>
                <div class="field padding-bottom--24">
                  <label for="email">Email</label>
                  <input type="email" name="email" required>
                </div>
                <div class="field padding-bottom--24">
                  <label for="tel">Mobile Number</label>
                  <input type="tel" name="mobile" required>
                </div>
                <div class="field padding-bottom--24">
                  <label for="comment">Why Would You Like to Work with DOJO Sports ?</label>
                  <textarea class="form-control" id="comment" style="width: 100%;height: 45px;" name="dogo"
                    required></textarea>
                </div>
                <div class="field padding-bottom--24">
                  <label for="comment">Why Should We Hire You ?</label>
                  <textarea class="form-control" style="width: 100%;height: 45px;" id="comment" name="hire_you"
                    required></textarea>
                </div>
                <div class="field padding-bottom--24">
                  <label for="comment">Achievements in Your Field</label>
                  <textarea class="form-control" style="width: 100%;height: 45px;" id="comment" name="achievements"
                    required></textarea>
                </div>
                <div class="field padding-bottom--24 select2">
                  <label>Position</label>
                  <select class="form-control field padding-bottom--24" name="position" style="width: 100%;">
                    <option selected="selected">Select</option>
                    <option>Android Developer</option>
                    <option>Sales Executive</option>
                    <option>Social Media Manager</option>
                    <option>Social Media Analyst</option>
                    <option>Human Resources Executive (HR)</option>
                    <option>Marketing</option>
                    <option>Full Stack Developer</option>
                    <option>Web Application Developer (Back End)</option>
                    <option>Flutter Developer</option>
                    <option>ISO Developer</option>
                    <option>Public Relations</option>
                    <option>Project Manager</option>
                    <option>Business Development Executive</option>
                    <option>Graphics Designer</option>
                    <option>Content Writer</option>
                    <option>Web Application Developer (Front End)</option>
                  </select>
                </div>
                <label for="text">Do you have a Laptop and Strong Internet Connection readily available to begin with us
                  in a Work from Home Model ?</label>
                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                  <label for="checkbox">
                    <input type="radio" value="yes" name="have_laptop_internetconnection">Yes &nbsp;&nbsp;&nbsp;
                    <input type="radio" value="no" name="have_laptop_internetconnection">No
                  </label>
                </div>
                <div class="field padding-bottom--24">
                  <label for="file" class="form-label">Upload your CV below</label>
                  <input class="form-control" type="file" name="file" id="formFileMultiple" multiple required>
                </div>
                <div class="field padding-bottom--24">
                  <label for="text">How did you hear about this Internship ?</label>
                  <input type="text" name="know_aboutus" required>
                </div>
                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Submit">
                </div>
              </form>
            </div>
          </div>
          <div class="footer-link padding-top--24">
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
              <span><a href="#">© 2022 Tectignis IT Solution's</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>