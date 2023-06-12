<?php
session_start();
include('connect.php');
include('Shopping_Cart_Functions.php');

if (!isset($_SESSION['CustomerID']))
{
   echo "<script>window.alert(Please Login First)</script>";
   echo "<script>window.location='Customer_Login.php'</script>";
   exit();
}
else
{
   $CustomerID = $_SESSION['CustomerID'];
   $qurey = "SELECT * FROM Customer WHERE CustomerID='$CustomerID'";
   $ret = mysqli_query($connection, $qurey);
   $row = mysqli_fetch_array($ret);
}


if (isset($_REQUEST['Action']))
{
   $Action = $_REQUEST['Action'];

   if ($Action === "Remove")
   {
      $ProductID = $_REQUEST['ProductID'];
      RemoveShoppingCart($ProductID);
   }
   elseif ($Action === "Buy")
   {
      $txtProductID = $_GET['txtProductID'];
      $txtBuyQty = $_GET['txtBuyQty'];
      AddShoppingCart($txtProductID, $txtBuyQty);
   }
   else
   {
      ClearShoppingCart();
   }
}
else
{
   $Action = '';
}

if (isset($_POST['MakePayment']))
{
   $size = count($_SESSION['ShoppingCartFunctions']);
   $txtTotalQuantity = $_POST['txtTotalQuantity'];
   for ($i = 0; $i < $size; $i++)
   {
      $ProductID = $_SESSION['ShoppingCartFunctions'][$i]['ProductID'];
      $BuyQty = $_SESSION['ShoppingCartFunctions'][$i]['BuyQty'];
      $ProductPrice = $_SESSION['ShoppingCartFunctions'][$i]['ProductPrice'];
   }

   $update =   "UPDATE Product
               Set ProductQuantity = ProductQuantity-'$txtTotalQuantity'
               WHERE ProductID = '$ProductID' ";
   $updateret = mysqli_query($connection, $update);

   if ($updateret)
   {
      unset($_SESSION['ShoppingCartFunctions']);
      echo "<script>window.alert('Payment Process Complete!')</script>";
      echo "<script>window.location='Index.php'</script>";
   }
   else
   {
      echo "<p>Something Went Wrong in Making Payment!" . mysqli_error($connection) . "</p>";
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Shopping Cart</title>

   <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

   <!-- Css Styles -->
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
   <link rel="stylesheet" href="css/flaticon.css" type="text/css">
   <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
   <link rel="stylesheet" href="css/barfiller.css" type="text/css">
   <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
   <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
   <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
   <!-- Page Preloder -->
   <div id="preloder">
      <div class="loader"></div>
   </div>

   <!-- Offcanvas Menu Section Begin -->
   <div class="offcanvas-menu-overlay"></div>
   <div class="offcanvas-menu-wrapper">
      <div class="canvas-close">
         <i class="fa fa-close"></i>
      </div>
      <div class="OTWHover">
         <a href="./UserProfile.php" class="OTWHover mx-2"><i class="fa fa-user fa-3x"></i></a>
         <a href="./Shopping_Cart.php" class="OTWHover mx-2"><i class="fa fa-shopping-cart fa-3x"></i></a>
      </div>
      <nav class="canvas-menu mobile-menu">
         <ul>
            <li><a href="./Index.php">Home</a></li>
            <li><a href="./Information.php">Information</a></li>
            <li><a href="./Wanted.php">Wanted</a></li>
            <li><a href="./Featured.php">Featured</a></li>
            <li><a href="./Workshop.php">Workshop</a></li>
            <li><a href="./Gallery.php">Gallery</a></li>
            <li><a href="./Contact_Us.php">Contact Us</a></li>
            <li><a href="./Customer_Register.php">Register</a></li>
            <li><a href="./Customer_Login.php">Log in</a></li>
         </ul>
      </nav>
      <div id="mobile-menu-wrap"></div>
      <div class="canvas-social">
         <a href="#"><i class="fa fa-facebook"></i></a>
         <a href="#"><i class="fa fa-twitter"></i></a>
         <a href="#"><i class="fa fa-youtube-play"></i></a>
         <a href="#"><i class="fa fa-instagram"></i></a>
      </div>

   </div>
   <!-- Offcanvas Menu Section End -->


   <!-- Header Section Begin -->
   <header class="header-section">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-3">
               <div class="logo">
                  <a href="./Index.php">
                     <img src="img/logo.png" alt="">
                     <!-- <h1>Home Gym Equipment</h1> -->
                  </a>
               </div>
            </div>
            <div class="col-lg-7">
               <nav class="nav-menu">
                  <ul>
                     <li><a href="./Index.php">Home</a></li>
                     <li><a href="./Information.php">Information</a></li>
                     <li><a href="./Wanted.php">Wanted</a></li>
                     <li><a href="./Featured.php">Featured</a></li>
                     <li><a href="./Workshop.php">Workshop</a></li>
                     <li><a href="./Gallery.php">Gallery</a></li>
                     <li><a href="./Contact_Us.php">Contact Us</a></li>
                     <li><a href="./Customer_Register.php">Register</a></li>
                     <li><a href="./Customer_Login.php">Log in</a></li>
                  </ul>
               </nav>
            </div>
            <div class="col-lg-2">
               <div class="top-option OTWHover">
                  <div>
                     <a href="./UserProfile.php" class="OTWHover mx-2"><i class="fa fa-user fa-3x"></i></a>
                     <a href="./Shopping_Cart.php" class="OTWHover mx-2"><i class="fa fa-shopping-cart fa-3x"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="canvas-open">
            <i class="fa fa-bars fa-lg"></i>
         </div>
      </div>
      <div class="container-fluid">
         <div class="google-translate pt-3" id="google_translate_element"></div>

      </div>
   </header>
   <!-- Header End -->

   <!-- Breadcrumb Section Begin -->
   <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 text-center">
               <div class="breadcrumb-text">
                  <h2>Shopping Cart</h2>
                  <div class="bt-option">

                     <a href="">Product Details</a>
                     <span>Shopping Cart</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Breadcrumb Section End -->

   <!-- Shopping Cart Section -->
   <section class="shopping-cart-section spad-2">
      <div class="container">
         <h2 class="mb-2">Here is your shopping cart:</h2>
         <div class="row">
            <div class="col-lg-8 col-md-12 mb-3">
               <div id="no-more-tables">
                  <form action="Shopping_Cart.php" method="GET">
                     <?php
                     if (!isset($_SESSION['ShoppingCartFunctions']))
                     {
                        echo "<p class='Yellow-text'>Shopping Cart is Empty... :( </p>";
                        echo "<a href='Gallery.php' class='Hover-button text-center'>Continue Shopping</a>";
                     }
                     else
                     {
                     ?>
                        <table class="col-md-12 table-bordered table-condensed cf">

                           <thead class="cf">
                              <tr>
                                 <th class="product-image">Product Image</th>
                                 <th class="product-id">ProductID</th>
                                 <th class="product-name">Name</th>
                                 <th class="product-price">Price</th>
                                 <th class="product-quantity">Quantity</th>
                                 <th class="product-total">Total</th>
                                 <th class="product-remove">Action</th>
                              </tr>
                           </thead>

                           <tbody>
                              <?php

                              $size = count($_SESSION['ShoppingCartFunctions']);
                              for ($i = 0; $i < $size; $i++)
                              {
                                 $ProductImage1 = $_SESSION['ShoppingCartFunctions'][$i]['ProductImage1'];
                                 $ProductID = $_SESSION['ShoppingCartFunctions'][$i]['ProductID'];
                                 $ProductName = $_SESSION['ShoppingCartFunctions'][$i]['ProductName'];
                                 $ProductPrice = $_SESSION['ShoppingCartFunctions'][$i]['ProductPrice'];
                                 $BuyQty = $_SESSION['ShoppingCartFunctions'][$i]['BuyQty'];
                                 $subTotal = $_SESSION['ShoppingCartFunctions'][$i]['ProductPrice'] * $_SESSION['ShoppingCartFunctions'][$i]['BuyQty'];

                                 echo "<tr>";

                                 echo "<td data-title='Product Image'><img src='$ProductImage1'></td>";
                                 echo "<td data-title='ProductID'>$ProductID</td>";
                                 echo "<td data-title='Name'>$ProductName</td>";
                                 echo "<td data-title='Price'>$ProductPrice</td>";
                                 echo "<td data-title='Quantity'>$BuyQty</td>";
                                 echo "<td data-title='Total'>$subTotal</td>";
                                 echo "<td data-title='Action'><a href='Shopping_Cart.php?ProductID=$ProductID&Action=Remove' class='hover'>Remove<br><i class='fa fa-trash'></i></a></td>";
                                 echo "</tr>";
                              }
                              ?>
                           </tbody>
                        </table>
                  </form>
               </div>
               <div class="container">
                  <h2 class="mb-2">Select Payment Plan:</h2>
                  <div class="row">
                     <table>
                        <tr>
                           <td>
                              <h5><input type="radio" name="rdoPaymentType" value="MPU" onclick="showPaymentTable()" checked />&nbsp;<i class="fa fa-cc-jcb fa-2x" aria-hidden="true"></i> &nbsp;JCB</h5>
                              <h5><input type="radio" name="rdoPaymentType" value="VISA" onclick="showPaymentTable()" />&nbsp;<i class="fa fa-cc-visa fa-2x" aria-hidden="true"></i> &nbsp;VISA</h5>
                              <h5><input type="radio" name="rdoPaymentType" value="COD" onclick="hidePaymentTable()" />&nbsp;<i class="fa fa-money fa-2x" aria-hidden="true"></i> &nbsp; Cash On Delivery</h5>
                           </td>
                        </tr>
                        <br>

                        <tr>
                           <td>
                              <table id="PaymentTable" name="PaymentTable">
                                 <tr>
                                    <td>
                                       <h4>Name <small>(as it appears on your card)</small></h4>
                                       <h4><input type="text" name="txtNameOnCard" placeholder="ex. Mg Mg"></h4>
                                       <br>

                                       <h4>CardNumber <small>(no dashes or space)</small></h4>
                                       <h4><input type="text" name="txtNameOnCard" placeholder="ex. 1234567"></h4>
                                       <br>

                                       <h4>Expiration Date <small>(no dashes or space)</small></h4>
                                       <h4><select name="cboMonth" id="">
                                             <option value="">Month</option>
                                             <option value="">June</option>
                                             <option value="">November</option>
                                             <option value="">December</option>
                                          </select></h4>

                                       <h4><select name="cboYear" id="">
                                             <option value="">Year</option>
                                             <option value="">2023</option>
                                             <option value="">2024</option>
                                             <option value="">2025</option>
                                          </select></h4>
                                       <br>

                                       <h4>Security Code <small>(3 on Backside, 4 on Frontside)</small></h4>
                                       <h4><input type="number" name="txtSecurityCode" placeholder="ex. 123"></h4>

                                    </td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                     </table>
                  </div>
               </div>
            </div>

            <div class="col-lg-4">
               <div class="container">
                  <div class="total-section">
                     <form action="Shopping_Cart.php" method="POST">



                        <div>
                           <h4>Subtotal: </h4>
                           <h4><input class="mw-100 my-2" type="number" name="txtTotalAmount" value="<?php echo CalculateTotalAmount() ?>" readonly></h4>

                        </div>
                        <div>
                           <h4>VAT (5%) -$: </h4>
                           <h4><input class="mw-100 my-2" type="number" name="txtVAT" value="<?php echo CalculateVAT() ?>" readonly></h4>
                        </div>
                        <div>
                           <h4>Grand Total $: </h4>
                           <h4><input class="mw-100 my-2" type="number" name="txtGrandTotla" value="<?php echo CalculateTotalAmount() + CalculateVAT() ?>" readonly></h4>
                        </div>
                        <div>
                           <h4>Total Quantity(Pcs): </h4>
                           <h4><input class="mw-100 my-2" type="number" name="txtTotalQuantity" value="<?php echo CalculateTotalQuantity() ?>" readonly></h4>
                        </div>

                        <hr>

                        <div class="row justify-content-between">

                           <input type="submit" class="Hover-button text-center" name="MakePayment" value="Make Payment">

                           <a href="Shopping_Cart.php?Action=ClearAll" class="Hover-button text-center">Clear Cart</a>

                           <a href="Gallery.php" class="Hover-button text-center">Continue Shopping</a>

                        </div>
                     </form>
                  </div>

                  <!-- <div class="coupon-section">
						<h3>Apply Coupon</h3>
						<div class="coupon-form-wrap">
							<form action="index.html">
								<p><input type="text" placeholder="Coupon"></p>
								<p><input type="submit" value="Apply"></p>
							</form>
						</div> -->
               </div>
            </div>
         </div>
      <?php
                     }
      ?>
      </div>

   </section>
   <!-- Shopping Cart Section End -->

   <!-- Footer Section Begin -->
   <section class="footer-section">
      <div class="container">
         <div class="row">
            <div class="col-lg-4">
               <div class="fs-about">
                  <div class="fa-logo">
                     <a href="#"><img src="img/logo.png" alt=""></a>
                  </div>
                  <p>We, HGE help you achieve your fitness goals and healthy lifestyle with equipments that best suits your needs to exercise at your Home.</p>
                  <div class="fa-social">
                     <a href="#"><i class="fa fa-facebook"></i></a>
                     <a href="#"><i class="fa fa-twitter"></i></a>
                     <a href="#"><i class="fa fa-youtube-play"></i></a>
                     <a href="#"><i class="fa fa-instagram"></i></a>
                     <a href="#"><i class="fa  fa-envelope-o"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-6 col-lg-2 col-md-3 col-sm-6">
               <div class="fs-widget">
                  <h4>Useful links</h4>
                  <ul>
                     <li><a href="./Index.php">Home</a></li>
                     <li><a href="./Information.php">Information</a></li>
                     <li><a href="./Wanted.php">Wanted</a></li>
                     <li><a href="./Featured.php">Featured</a></li>
                     <li><a href="./Workshop.php">Workshop</a></li>
                     <li><a href="./Gallery.php">Gallery</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-6 col-lg-2 col-md-3 col-sm-6">
               <div class="fs-widget">
                  <h4>Support</h4>
                  <ul>
                     <li><a href="./Contact_Us.php">Contact Us</a></li>
                     <li><a href="./Customer_Register.php">Register</a></li>
                     <li><a href="./Customer_Login.php">Log in</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12 text-center">
               <div class="copyright-text">
                  <p>
                     Copyright &copy; <script>
                        document.write(new Date().getFullYear());
                     </script> All rights reserved | Home Gym Equipment
                  </p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Footer Section End -->

   <!-- Search model Begin -->
   <div class="search-model">
      <div class="h-100 d-flex align-items-center justify-content-center">
         <div class="search-close-switch">+</div>
         <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
         </form>
      </div>
   </div>
   <!-- Search model end -->

   <!-- Js Plugins -->
   <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.magnific-popup.min.js"></script>
   <script src="js/masonry.pkgd.min.js"></script>
   <script src="js/jquery.barfiller.js"></script>
   <script src="js/jquery.slicknav.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/main.js"></script>
   <script type="text/javascript">
      function showPaymentTable() {
         document.getElementById('PaymentTable').style.visibility = "visible";
      }

      function hidePaymentTable() {
         document.getElementById('PaymentTable').style.visibility = "hidden";
      }
   </script>
   <script type="text/javascript">
      function googleTranslateElementInit() {
         new google.translate.TranslateElement({
               pageLanguage: 'en'
            },
            'google_translate_element'
         );
      }
   </script>
   <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



</body>

</html>