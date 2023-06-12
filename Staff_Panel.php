<?php
session_start();
include('connect.php');

if (!isset($_SESSION['StaffID']))
{
   echo "<script>window.alert(Please Login First)</script>";
   echo "<script>window.location='Staff_Login.php'</script>";
   exit();
}
else
{
   $Staff = $_SESSION['StaffID'];
   echo $Staff;
   $select = "SELECT * FROM Staff WHERE StaffID='$Staff'";
   $query = mysqli_query($connection, $select);
   $row = mysqli_fetch_array($query);

   $StaffName = $row['StaffName'];
   $StaffPosition = $row['StaffPosition'];
   $StaffAge = $row['StaffAge'];
   $StaffEmail = $row['StaffEmail'];
   $StaffPhone = $row['StaffPhone'];
   $StaffAddress = $row['StaffAddress'];
   $StaffProfile = $row['StaffProfile'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Staff Panel</title>
   <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
   <h5>Staff Home Panel</h5>
   <form>
      <fieldset class="Black-Bg">
      

         <a class="staff-a" href="Staff_Register.php">Staff Registery</a>
         <br>
         <a class="staff-a" href="Product_Entry.php">Product Entry</a>
         <br>
         <a class="staff-a" href="ProductCategory_Entry.php">Product Category Entry</a>
         <br>
         <a class="staff-a" href="ProductType_Entry.php">Product Type Entry</a>
         <br>
         <a class="staff-a" href="BookingReason_Entry.php">Booking Reason Entry</a>
         <br> <br> <br>

         <h3 class="White-text">Currently Logged in staff:</h3>
         <p class="White-text">Staff Name: <span class="Yellow-text"><?php echo $StaffName ?></span></p>
         <p class="White-text">Staff Position: <span class="Yellow-text"><?php echo $StaffPosition ?></span></p>
         <p class="White-text">Staff Email: <span class="Yellow-text"><?php echo $StaffEmail ?></span></p>
         <p class="White-text">Staff Phone: <span class="Yellow-text"><?php echo $StaffPhone ?></span></p>
         <p class="White-text">Staff Address: <span class="Yellow-text"><?php echo $StaffAddress ?></span></p>
         <img class="Staff-img" src="<?php echo $StaffProfile ?>" alt="Staff Image">
         <br> <br>

         

      </fieldset>
   </form>
   <form action="Staff_Logout.php" method="POST">
      <button type="submit" name="btnstafflogout" value="Logout">Logout of current staff account</button>
   </form>

</body>

</html>