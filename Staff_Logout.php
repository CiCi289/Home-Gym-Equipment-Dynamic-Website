<?php
include('connect.php');
session_start();
if(isset($_POST['btnstafflogout']))
{
   session_destroy();
   unset($_SESSION['StaffID']);
   echo "<script>window.alert('You have been logged out of current staff account!')</script>";
   echo "<script>window.location='Staff_Login.php'</script>";  
}

?>