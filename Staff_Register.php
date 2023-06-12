<?php
include('connect.php');

if (isset($_POST['btnSave']))
{
   $txtstaffname = $_POST['txtstaffname'];
   $txtstaffposition = $_POST['txtstaffposition'];
   $txtstaffage = $_POST['txtstaffage'];
   $txtstaffemail = $_POST['txtstaffemail'];
   $txtstaffpassword = $_POST['txtstaffpassword'];
   $txtstaffphone = $_POST['txtstaffphone'];
   $txtstaffaddress = $_POST['txtstaffaddress'];

   $Image = $_FILES['filestaffprofile']['name'];
   $Folder = "image/";
   $Filename = $Folder . '_' . $Image;

   $copy = copy($_FILES['filestaffprofile']['tmp_name'], $Filename);

   if (!$copy)
   {
      echo "<p>Cannot Upload!</p>";
      exit();
   }

   $select = "SELECT * FROM Staff Where StaffEmail = '$txtstaffemail'";
   $ret = mysqli_query($connection, $select);
   $count = mysqli_num_rows($ret);

   if ($count > 0)
   {
      echo "<script>window.alert('Staff cannot Register!')</script>";
      echo "<script>window.location = 'Staff_Register.php'</script>";
      exit();
   }
   else
   {
      echo $query = "INSERT INTO Staff
        (StaffName,StaffPosition,StaffAge,StaffEmail,StaffPassword,StaffPhone,StaffAddress,StaffProfile)
        Values('$txtstaffname','$txtstaffposition','$txtstaffage','$txtstaffemail','$txtstaffpassword','$txtstaffphone','$txtstaffaddress','$Filename')";

      $result = mysqli_query($connection, $query);
   }

   if ($result)
   {
      echo "<script>window.alert('Staff Register Successful!')</script>";
      echo "<script>window.location = 'Staff_Register.php'</script>";
   }
   else
   {
      echo "<p>Error in Staff Register : " . mysqli_error($connection) . "</p>";
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Staff Register</title>
   <link rel="stylesheet" href="css/style.css" type="text/css">

</head>

<body>
   <form method="POST" action="Staff_Register.php" enctype="multipart/form-data">
      <!--enctype="multipart/form-data" is necessary if the user will upload a file through the form-->

      <fieldset>
         <legend>Staff Information</legend>

         <table class="Framed-table Black-Bg">
            <tr class="Border">
               <td>Staff Name</td>
               <td>
                  <input type="text" name="txtstaffname" required />
               </td>
            </tr>

            <tr class="Border">
               <td>Staff Position</td>
               <td>
                  <input type="text" name="txtstaffposition" required />
               </td>
            </tr>

            <tr class="Border">
               <td>Staff Age</td>
               <td>
                  <input type="number" name="txtstaffage" required />
               </td>
            </tr>

            <tr class="Border">
               <td>Staff Email</td>
               <td>
                  <input type="email" name="txtstaffemail" required />
               </td>
            </tr>

            <tr class="Border">
               <td>Staff Password</td>
               <td>
                  <input type="password" name="txtstaffpassword" required />
               </td>
            </tr>

            <tr class="Border">
               <td>Staff Phone</td>
               <td>
                  <input type="number" name="txtstaffphone" required />
               </td>
            </tr>

            <tr class="Border">
               <td>Staff Address</td>
               <td>
                  <input type="text" name="txtstaffaddress" required />
               </td>
            </tr>

            <tr class="Border">
               <td>Staff Profile</td>
               <td>
                  <input type="file" name="filestaffprofile" required />
               </td>
            </tr>


            <tr>
               <td>
                  <input type="submit" name="btnSave" value="Save" />
                  <input type="reset" value="Clear" />
               </td>
            </tr>

         </table>
      </fieldset>

   </form>
   <form action="Staff_Panel.php">
      <input type="submit" value="Back to Staff Panel">
   </form>
</body>

</html>