<?php
session_start();
include('connect.php');

if(isset($_POST['btnlogin']))
{
   $txtstaffemail = $_POST['txtstaffemail'];
   $txtstaffpassword = $_POST['txtstaffpassword'];

   $insert = "SELECT * FROM Staff 
               Where StaffEmail = '$txtstaffemail' AND StaffPassword = '$txtstaffpassword'";
   $query = mysqli_query($connection, $insert);
   $count = mysqli_num_rows($query);

   if ($count > 0)
   {
      $row = mysqli_fetch_array($query);
      $StaffID = $row['StaffID'];
      $_SESSION['StaffID'] = $StaffID;

      echo "<script>window.alert('Staff Login Successful!')</script>";
      echo "<script>window.location='Staff_Panel.php'</script>";
      
   }
   else
   {
      echo "<script>window.alert('Customer Login Failed! Please Try Again.')</script>"; 
      echo "<script>window.location='Staff_Login.php'</script>";

      // if(isset($_SESSION['loginError']))
      // {  
      //    $countError = $_SESSION['loginError'];
      //    //check 3 attempts: 2 if, 1 else

      //    if($countError == 1)
      //    {
      //       $_SESSION['loginError'] = 2;
      //       echo "<script>window.alert('Customer Login Failed! Attempt: 2.')</script>";
      //    }
      //    if($countError == 2)
      //    {
      //       echo "<script>window.alert('Customer Login Failed! Attempt: 3.')</script>";
      //       echo "<script>window.location='LoginTimer.php'</script>";
      //    }
      // }
      // else
      // {
      //    $_SESSION['loginError'] = 1;
      //    echo "<script>window.alert('Customer Login Failed! Please Try Again. Error Attempt: 1')</script>"; 
      // }
   }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Staff Login</title>
   <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
   <form action="Staff_Login.php" method="POST">
      <fieldset>
         <legend>Staff Login Form</legend>
         <table class="Framed-table Black-Bg">

            <tr class="Border">
               <td>Staff Email</td>
               <td><input type="email" name="txtstaffemail" placeholder="Enter Email" required></td>
            </tr>

            <tr class="Border">
               <td>Staff Password</td>
               <td><input type="password" name="txtstaffpassword" placeholder="Enter Your Password" required></td>
            </tr>

            
               <td>
                  <input type="submit" name="btnlogin" value="Login">
               </td>
               <td>
                  <input type="reset" name="btncancel" value="Cancel">
               </td>
            
         </table>


      </fieldset>
   </form>
   
</body>
</html>