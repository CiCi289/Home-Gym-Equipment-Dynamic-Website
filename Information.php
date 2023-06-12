<?php
session_start();
include('connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Information</title>

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
            <li class="active"><a href="./Information.php">Information</a></li>
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
                     <li class="active"><a href="./Information.php">Information</a></li>
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
                  <h2>Information</h2>
                  <div class="bt-option">
                     <a href="./Index.php">Home</a>
                     <span>Information</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Breadcrumb Section End -->

   <!-- Latest Products Section -->
   <div class="featured-section">
      <div class="container">
         <div class="px-5 py-5 text-center">
            <h2>Our Latest New Arrivals</h2>
            <p class="Yellow-text">We have got new latest Gym Equipments available for you. Check these out! </p>
         </div>

         <div class="row pb-5">
            <div class="col-lg-4 px-5 pr-sm-0">
               <div class="embed-responsive embed-responsive-4by3">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/CIKMlVv2lho" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
            </div>

            <div class="col-lg-8 px-5 py-3">
               <h3>Bowflex SelectTech 552 Adjustable Dumbbells</h3>
               <p>Replaces 15 sets of weights. Weights adjust from 2.5 to 25 pounds. Easy-to-use selection dials for adjusting weights. Sold as a pair.
                  <br> • Height: 14 inches
                  <br> • Hand Orientation: Left and Right
                  <br> • Compatible Products: Bowflex SelectTech Stand with Media Rack
               </p>
               <p class="font-weight-bold Yellow-text">$699.00</p>
               <a href="Product_Details.php?ProductID=1" class="Hover-button">Buy Now</a>
            </div>
         </div>

         <div class="row pb-5">
            <div class="col-lg-4 px-5 pr-sm-0">
               <div class="embed-responsive embed-responsive-4by3">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/WO0dBMdcL2U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
            </div>
            <div class="col-lg-8 px-5 py-3">
               <h3>Garmin vivomove Sport Hybrid Smartwatch</h3>
               <p>Stylish 40 mm hybrid smartwatch with timeless analog look and smart features. Hidden touchscreen display reacts to your movements and is visible only when you need it.
                  <br> •Stay connected with smart notifications for incoming calls, text messages, calendar view and more when paired with your compatible smartphone.
                  <br> •Know your body better with extensive health monitoring features, including Body Battery energy levels, Pulse Ox, advanced sleep monitoring, stress tracking, women’s health tracking and more (this device is intended to be an estimation of your activity and metrics; it is not a medical device and is not intended for use in the diagnosis or monitoring of any medical condition).
                  <br> •Connects with your paired smartphone’s GPS to track outdoor walk or run activities; includes additional activity profiles such as yoga, strength, cardio and more.
                  Safety and tracking features include Incident Detection (during outdoor walks, runs and bike rides) and Assistance, both of which send a message with your live location to emergency contacts.
               </p>
               <p class="font-weight-bold Yellow-text">$255.00</p>
               <a href="Product_Details.php?ProductID=4" class="Hover-button">Buy Now</a>
            </div>
         </div>
      </div>
   </div>
   <!-- Latest Products Section End -->

   <!-- Latest Fitness Information Section -->
   <section class="blog-section spad">
      <div class="container">
         <div class="px-5 py-5 text-center">
            <h2>Latest Fitness Information</h2>
            <p class="Yellow-text">This month, we have picked this article for Fitness!</p>
         </div>
         <div class="row">
            <div class="col-lg-8 p-3">
               <h3 class="White-text">How To Exercise <span class="Yellow-text">At Home</span> </h3>
               <p>July 16, 2022</p>
               <p>Who needs a gym membership? You can work out from the comfort and convenience of your home, and you have a lot of options besides hopping on a stationary bike or treadmill.

                  Use these tips to set up your at-home exercise routine.
               </p>
               <br>
               <div>
                  <img class="prod_img p-3" src="img/hero/hero-4.jpg" alt="">
               </div>

               <h4 class="Yellow-text">Choose a location.</h4>
               <p>
                  Designate and declutter a spot in your home for your workouts. Don't automatically pick your basement or garage. If it's not an appealing space, you won't want to spend a lot of time there.
                  Look for an area near where you often sit. An empty corner or a spot near your TV, for instance, could be perfect. Seeing your exercise place may inspire you to get up and move. You don't want it to be out of sight, out of mind.
               </p>
               <br>

               <h4 class="Yellow-text">Buy the necessities.</h4>
               <p>
                  You don't need a lot of fancy gear. For under $100, you can buy some basics, such as an exercise mat, stability ball, resistance bands, and a few dumbbells. Or make your own list, based on what you want to do. What equipment do you need to support your goals?
               </p>
               <br>

               <h4 class="Yellow-text">Add some comforts.</h4>
               <p>
                  Whatever your favorite way to entertain yourself may be, get it ready to go, and then save it to enjoy during your workout.
               </p>
               <br>

               <h4 class="Yellow-text">Make a playlist with songs you love.</h4>
               <p>
                  Download an audiobook you're excited about. Record a whole season of a great show on your DVR, or add it to your streaming queue.
               </p>
               <br>

               <h4 class="Yellow-text">Use the web.</h4>
               <p>
                  Need an instructor? Check the web for online fitness classes. You can find yoga, dance, strength training, and others that you watch from your iPad or computer.

                  Some are free. Some are pay-as-you-go. Others require memberships and a monthly fee. Some ideas:
               </p>
               <br>

               <ul>
                  <li>Curvy Yoga: Online classes or videos of yoga taught by, well, a curvy woman</li>
                  <li>DailyBurn: Various types of exercise at different challenge levels</li>
                  <li>Physique 57: Videos of a boutique fitness class that combines ballet, Pilates, and isometrics</li>
                  <li>Pound Rockout Workout: Online version of a popular fitness class at Crunch gyms -- simulated drumming with lightly weighted drumsticks for cardio, Pilates, isometric movements, and plyometrics</li>
                  <li>YogaGlo: Videos to download</li>
               </ul>
               <br>
               <p>
                  Or, try streaming workouts through an Apple TV, Google TV, or Roku. This way you can access sites like Hulu while also watching on a big screen.
               </p>
               <br>

               <h4 class="Yellow-text">Play around.</h4>
               <p>
                  If you’re willing to invest a little cash, all the major game systems -- like the Microsoft Xbox One, the Nintendo Wii U, and the Sony PlayStation 4 -- make exercise fun with motion sensors that track your movement.

                  Get fit as you dance, do yoga or tai chi, go white-water rafting, or fight zombies. Some fitness games estimate the calories you burned afterward.
               <p>
                  <br>

               <h4 class="Yellow-text">Make a reservation.</h4>
               <p>
                  When you exercise at home, it's easy to let life interfere. That's why it's especially important to have a set time to work out.

                  Find a time that feels best for you (in the morning, before dinner, in the evening) to ensure your success.

                  At the start of every week, look at your calendar and slot in your workouts. If your preferred time slot won't work one day, find another time that will.
               </p>
               <br>

               <h4 class="Yellow-text">Improvise.</h4>
               <p>
                  Once you start feeling energized and burning calories, you'll be even more motivated to keep going. When you're especially crunched for time, try this:
               </p>
               <ul>
                  <li>Throw on some music and have a dance party.</li>
                  <li>While watching TV, walk in place.</li>
                  <li>When you're cleaning or puttering, maximize your steps. Be less efficient. Carry one bag of groceries in at a time. Make two trips up the stairs instead of one. You'll burn more calories.</li>
               </ul>
            </div>

            <div class="col-lg-4 col-md-8 p-0">
               <div class="sidebar-option">
                  <div class="so-latest">
                     <h5 class="title">Featured posts</h5>
                     <div class="latest-item">
                        <div class="li-pic">
                           <img src="img/letest-blog/latest-2.jpg" alt="">
                        </div>
                        <div class="li-text">
                           <h6><a href="./#">Best Nutrition for your Fitness</a></h6>
                           <span class="li-time">Apr 15, 2022</span>
                        </div>
                     </div>
                     <div class="latest-item">
                        <div class="li-pic">
                           <img src="img/letest-blog/latest-3.jpg" alt="">
                        </div>
                        <div class="li-text">
                           <h6><a href="./#">Stretching Exercises to do at Home</a></h6>
                           <span class="li-time">Jun 15, 2022</span>
                        </div>
                     </div>
                     <div class="latest-item">
                        <div class="li-pic">
                           <img src="img/letest-blog/latest-4.jpg" alt="">
                        </div>
                        <div class="li-text">
                           <h6><a href="./#">How to Train to get Muscles</a></h6>
                           <span class="li-time">Aug 1, 2022</span>
                        </div>
                     </div>
                     <div class="latest-item">
                        <div class="li-pic">
                           <img src="img/letest-blog/latest-5.jpg" alt="">
                        </div>
                        <div class="li-text">
                           <h6><a href="./#">Introduction to Yoga For Beginners</a></h6>
                           <span class="li-time">Feb 14, 2022</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Latest Fitness Information Section End -->

   <!-- Footer Section Begin -->
   <section class="footer-section">
      <div class="container">
         <div class="row">
            <div class="col-lg-4">
               <div class="fs-about">
                  <div class="fa-logo">
                     <a href="#"><img src="img/logo.png" alt=""></a>
                  </div>
                  <p>We, HGE help you achieve your fitness goals and healthy lifestyle with equipments that best suits your needs to exercise at your Home.p>
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
                     <li><a href="./Information.php"><span class="Yellow-text">Information</span> (You are here)</a></li>
                     <li><a href="./Wanted.php">Wanted</a></li>
                     <li><a href="./Featured.php">Featured</a></li>
                     <li><a href="./Workshop.php">Workshop</a></li>
                     <li><a href="./Gallery.php">Gallery</a></li>
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