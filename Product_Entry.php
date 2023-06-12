<?php
session_start();
include('connect.php');
if (!isset($_SESSION['StaffID']))
{
   echo "<script>window.alert(Please Login First)</script>";
   echo "<script>window.location='Staff_Login.php'</script>";
   exit();
}


if (isset($_POST['btnSave']))
{
   $txtproductname = $_POST['txtproductname'];
   $txtproductprice = $_POST['txtproductprice'];
   $txtproductquantity = $_POST['txtproductquantity'];
   $txtDesc = $_POST['txtDesc'];
   $cboType = $_POST['cboType'];
   $cboCategory = $_POST['cboCategory'];

   //--------------Image 1 Upload--------------------
   $Image = $_FILES['fileproductimage']['name'];
   $Folder = "image/";
   $Filename = $Folder . '_' . $Image;
   $copy = copy($_FILES['fileproductimage']['tmp_name'], $Filename);

   if (!$copy)
   {
      echo "<p>Cannot Upload</p>";
      exit();
   }

   //--------------Image 2 Upload--------------------
   $Image2 = $_FILES['fileproductimage2']['name'];
   $Folder = "image/";
   $Filename2 = $Folder . '_' . $Image2;
   $copy = copy($_FILES['fileproductimage2']['tmp_name'], $Filename2);

   if (!$copy)
   {
      echo "<p>Cannot Upload</p>";
      exit();
   }

   
   $select = "SELECT * FROM Product Where ProductName='$txtproductname'";
   $ret = mysqli_query($connection, $select);
   $count = mysqli_num_rows($ret);

   if ($count > 0)
   {
      echo "<script>window.alert('Product cannot Register!')</script>";
      echo "<script>window.location='Product_Entry.php'</script>";
      exit();
   }
   else
   {
      echo $query = "INSERT INTO Product
				(ProductName,ProductPrice,ProductQuantity,ProductImage1,ProductImage2,ProductDescription,ProductTypeID,ProductCategoryID)
				Values('$txtproductname','$txtproductprice','$txtproductquantity','$Filename','$Filename2','$txtDesc','$cboType','$cboCategory')";

      $result = mysqli_query($connection, $query);
   }

   if ($result)
   {
      echo "<script>window.alert('Product Register Successful!')</script>";
      echo "<script>window.location='Product_Entry.php'</script>";
   }
   else
   {
      echo "<p>Error in Product Entry : " . mysqli_error($connection) . "</p>";
   }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Product Entry</title>
   <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
   <form method="POST" action="Product_Entry.php" enctype="multipart/form-data">

      <fieldset>
         <legend>Product Information</legend>

         <table class="Framed-table Black-Bg">
            <tr class="Border">
               <td>Product Name</td>
               <td>
                  <input type="text" name="txtproductname" required />
               </td>
            </tr>

            <tr class="Border">
               <td>Product Price</td>
               <td>
                  <input type="text" name="txtproductprice" required />
               </td>
            </tr>

            <tr class="Border">
               <td>Product Quantity</td>
               <td>
                  <input type="number" name="txtproductquantity" required />
               </td>
            </tr>

            <tr class="Border">
               <td>Product Image1</td>
               <td>
                  <input type="file" name="fileproductimage" required />
               </td>
            </tr>

            <tr class="Border">
               <td>Product Image2</td>
               <td>
                  <input type="file" name="fileproductimage2" required />
               </td>
            </tr>

            <tr class="Border">
               <td>Product Description</td>
               <td>
                  <textarea name="txtDesc" cols="30" rows="10"></textarea>
               </td>
            </tr>

            <tr class="Border">
               <td>Choose Product Type</td>
               <td>
                  <select name="cboType">
                     <option>Choose Product Type</option>
                     <?php
                        $query1 = "SELECT * FROM ProductType";
                        $ret1 = mysqli_query($connection, $query1);
                        $count1 = mysqli_num_rows($ret1);

                        for ($i = 0; $i < $count1; $i++)
                        {
                           $row1 = mysqli_fetch_array($ret1);
                           $Type_ID = $row1['ProductTypeID'];
                           $Type_Name = $row1['ProductTypeName'];

                           echo "<option value='$Type_ID'>$Type_Name</option>";
                        }
                     ?>
                  </select>
               </td>
            </tr>

            <tr class="Border">
               <td>Choose Product Category</td>
               <td>
                  <select name="cboCategory">
                     <option>Choose Product Category</option>
                     <?php
                        $query2 = "SELECT * FROM ProductCategory";
                        $ret2 = mysqli_query($connection, $query2);
                        $count2 = mysqli_num_rows($ret2);

                        for ($i = 0; $i < $count2; $i++)
                        {
                           $row2 = mysqli_fetch_array($ret2);
                           $Category_ID = $row2['ProductCategoryID'];
                           $Category_Name = $row2['ProductCategoryName'];

                           echo "<option value='$Category_ID'>$Category_Name</option>";
                        }
                     ?>
                  </select>
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