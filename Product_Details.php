<?php
session_start();
include('connect.php');
include('Shopping_Cart_Functions.php');

if (isset($_GET['ProductID']))
{
   $ProductID = $_GET['ProductID'];
   $query = "SELECT * FROM Product p, ProductType pt, ProductCategory pc
            WHERE p.ProductID = '$ProductID'
            AND p.ProductTypeID = pt.ProductTypeID
            AND p.ProductCategoryID = pc.ProductCategoryID";
   $result = mysqli_query($connection, $query);
   $row = mysqli_fetch_array($result);

   $ProductID = $row['ProductID'];
   $ProductName = $row['ProductName'];
   $ProductPrice = $row['ProductPrice'];
   $ProductQuantity = $row['ProductQuantity'];
   $ProductImage1 = $row['ProductImage1'];
   $ProductImage2 = $row['ProductImage2'];
   $ProductDescription = str_replace("\n", "<br>", $row['ProductDescription']);
   $ProductTypeName = $row['ProductTypeName'];
   $ProductCategoryName = $row['ProductCategoryName'];
}

if (isset($_GET['Buy']))
{
   $txtProductID = $_GET['txtProductID'];
   $txtBuyQty = $_GET['txtBuyQty'];
   AddShoppingCart($txtProductID, $txtBuyQty);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title><?php echo $ProductName ?></title>

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
                  <h2>Product Details</h2>
                  <div class="bt-option">
                     <span><?php echo $ProductName ?></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Breadcrumb Section End -->

   <!-- Product Details Section -->
   <section class="product-details-section spad-2">
      <form action="Product_Details.php" method="GET" enctype="multipart/form-data">
         <input type="hidden" name="Action" value="Buy">
         <div class="container">
            <div class="row justify-content-between">
               <div class="col-lg-5 col-lg-offset-1 py-auto">
                  <div class="owl-carousel owl-theme">
                     <div class="item">
                        <a href="<?php echo $ProductImage1 ?>" class="image-popup">
                           <img class="Gallery-img" src="<?php echo $ProductImage1 ?>">
                        </a>
                     </div>
                     <div class="item">
                        <a href="<?php echo $ProductImage2 ?>" class="image-popup">
                           <img class="Gallery-img" src="<?php echo $ProductImage2 ?>">
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <h3 class="Product-name py-1"><b><?php echo $ProductName ?></b></h3>
                  <h3 class="py-1">Price:&nbsp;<span class="Yellow-text">$<?php echo $ProductPrice ?></span></h3>
                  <h3>Product Description:</h3>
                  <h5 class="Product-desc py-1"><?php echo $ProductDescription ?></h5>
                  <h5 class="Product-type py-1"><?php echo $ProductTypeName ?></h5>
                  <h5 class="Product-category py-1">Category:&nbsp;<?php echo $ProductCategoryName ?></h5>
                  <h4 class="Available-qty py-1">Available Quantity:&nbsp;<?php echo $ProductQuantity ?></h4>

                  <h4 class="Buy-qty py-1">Buy Quantitiy:&nbsp;<input type="number" name="txtBuyQty" min="1" max="<?php echo $ProductQuantity ?>"></input></h4>
                  <input type="hidden" name="txtProductID" value="<?php echo $ProductID ?>">

                  <a>
                     <input class="Hover-button" type="submit" name="Buy" value="Add to Cart" min="1">
                  </a>

               </div>
            </div>
         </div>
      </form>
   </section>
   <!-- Product Details Section End -->

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