<?php
session_start();
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Gallery</title>

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
            <li class="active"><a href="./Gallery.php">Gallery</a></li>
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
                     <li class="active"><a href="./Gallery.php">Gallery</a></li>
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
                  <h2>Gallery</h2>
                  <div class="bt-option">
                     <a href="./Index.php">Home</a>
                     <span>Gallery</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Breadcrumb Section End -->

   <!-- Our Products Section -->
   <section class="team-section team-page spad">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-12">
               <div class="team-title">
                  <div class="section-title">
                     <span>Feel free to browse our equipments to your heart's content!</span>
                     <h2>Our Products</h2>
                  </div>
               </div>
            </div>
         </div>
         <!-- <div class="row"> -->
         <?php
         $query = "SELECT * FROM Product ORDER BY ProductID DESC";
         $ret = mysqli_query($connection, $query);
         $count = mysqli_num_rows($ret);

         if ($count == 0)
         {
            echo "<p>No Product Record Found!</p>";
            exit();
         }
         else
         {
            for ($a = 0; $a < $count; $a += 12)
            {
               $query1 = "SELECT * FROM Product p, ProductType pt, ProductCategory pc  
                              WHERE p.ProductTypeID = pt.ProductTypeID
                              AND p.ProductCategoryID = pc.ProductCategoryID
                              ORDER BY ProductID LIMIT $a,12";
               $ret1 = mysqli_query($connection, $query1);
               $count1 = mysqli_num_rows($ret1);

               echo "<div class='row'>";

               for ($i = 0; $i < $count1; $i++)
               {
                  $data = mysqli_fetch_array($ret1);
                  $ProductID = $data['ProductID'];
                  $ProductName = $data['ProductName'];
                  $ProductPrice = $data['ProductPrice'];
                  $ProductImage1 = $data['ProductImage1'];
                  $ProductCategoryName = $data['ProductCategoryName'];
                  $ProductTypeName = $data['ProductTypeName'];
         ?>
                  <div class="col-lg-4 col-sm-6">
                     <div class="ts-item set-bg" data-setbg="<?php echo $ProductImage1 ?>">
                        <a href="<?php echo $ProductImage1 ?>" class="image-popup"><img class="Gallery-img" src="<?php echo $ProductImage1 ?>"></a>
                        <div class="ts_text">
                           <h4 class="ellipsis-text Yellow-text"><?php echo $ProductName ?></h4>
                           <h4>Price: $<?php echo $ProductPrice ?></h4>
                           <span><?php echo $ProductCategoryName ?></span>
                           <span><?php echo $ProductTypeName ?></span>
                           <div class="tt_social">
                              <a href="Product_Details.php?ProductID=<?php echo $ProductID ?>" class="Hover-button">Product Details...</a>
                           </div>
                        </div>
                     </div>
                  </div>
         <?php
               }
               echo "</div>";
            }
         }
         ?>

      </div>
      <a class="Hover-button mx-5" href="RSSFeed.php"><i class="fa fa-rss" aria-hidden="true"></i> RSS Feed</a>
   </section>
   <!-- Our Products Section End -->

   <!-- ChooseUs Section Begin -->
   <section class="chooseus-section spad">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="section-title">
                  <span>Here is how we can serve you.</span>
                  <h2>Our Services</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-4 col-sm-4">
               <div class="cs-item">
                  <span class="flaticon-034-stationary-bike"></span>
                  <h4>Gym Equipment Repairing</h4>
                  <p>Need repairing? Periodic maintenance checks, servicing and troubleshooting of your equipments will be conducted by our highly trained technical crews.</p>
               </div>
            </div>
            <div class="col-lg-4 col-sm-4">
               <div class="cs-item">
                  <span class="flaticon-005-clipboard"></span>
                  <h4>Fitness Education</h4>
                  <p>We have specific courses that can help fitness professionals to further enhance their fitness knowledge and capabilities.</p>
               </div>
            </div>
            <div class="col-lg-4 col-sm-4">
               <div class="cs-item">
                  <span class="flaticon-002-dumbell"></span>
                  <h4>Exercise Training</h4>
                  <p>Get one-on-one personal training education from various certified and knowledgeable instructors.</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- ChooseUs Section End -->

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
            <div class="col-lg-2"></div>
            <div class="col-6 col-lg-3 col-md-3 col-sm-6">
               <div class="fs-widget">
                  <h4>Useful links</h4>
                  <ul>
                     <li><a href="./Index.php">Home</a></li>
                     <li><a href="./Information.php">Information</a></li>
                     <li><a href="./Wanted.php">Wanted</a></li>
                     <li><a href="./Featured.php">Featured</a></li>
                     <li><a href="./Workshop.php">Workshop</a></li>
                     <li><a href="./Gallery.php"><span class="Yellow-text">Gallery</span> (You are here)</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-6 col-lg-3 col-md-3 col-sm-6">
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
   <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
   <script src="js/bootstrap.min.js" type="text/javascript"></script>
   <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
   <script src="js/masonry.pkgd.min.js" type="text/javascript"></script>
   <script src="js/jquery.barfiller.js" type="text/javascript"></script>
   <script src="js/jquery.slicknav.js" type="text/javascript"></script>
   <script src="js/owl.carousel.min.js" type="text/javascript"></script>
   <script src="js/main.js" type="text/javascript"></script>
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