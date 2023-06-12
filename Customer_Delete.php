<?php 
session_start();
include("connect.php");

if(!isset($_SESSION['CustomerID']))
{ 
   echo "<script>window.alert('Please Log in First!')</script>";
   echo "<script>window.location='Customer_Login.php'</script>";
}

if(isset($_POST['btndeleteacc']))
{
   $CustomerID = $_SESSION['CustomerID'];
   $delete = "DELETE FROM Customer WHERE CustomerID='$CustomerID' ";
   $query = mysqli_query($connection, $delete);
   session_destroy();

   if($query)
   {
      echo "<script>window.alert('User Account Deleted Successfully!')</script>";
      echo "<script>window.location='Customer_Login.php'</script>";
   }
   else
   {
      echo "<script>window.alert('Something went wrong! User Account Delete Failed!')</script>";
      echo "<script>window.location='UserProfile.php'</script>";
   }
}

?>