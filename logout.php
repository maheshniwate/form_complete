<?php 
    session_start();
    include("configure.php");
      if(session_destroy()){
        header("location:index.php");
      }
      else{
        header("location:admin/intern.php");
      }

?>