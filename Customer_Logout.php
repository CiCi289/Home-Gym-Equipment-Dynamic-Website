<?php
include('connect.php');
session_start();
session_destroy();
echo "<script>window.alert('You have been logged out of current user account!')</script>";
echo "<script>window.location='Customer_Login.php'</script>";
?>