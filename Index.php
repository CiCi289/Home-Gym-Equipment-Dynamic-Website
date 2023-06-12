<?php
session_set_cookie_params(['SameSite' => 'None', 'Secure' => true]);
session_start();
include('connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Gym Equipment</title>

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
                <li class="active"><a href="./Index.php">Home</a></li>
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
                            <li class="active"><a href="./Index.php">Home</a></li>
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

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hs-slider owl-carousel">

            <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6 p-5 overlay">
                            <div class="hi-text">
                                <span>Change Your Body</span>
                                <h1>Be <strong>stronger</strong><br> At Home</h1>
                                <a href="Gallery.php" class="primary-btn text-center">Shop Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-9.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6 p-5 overlay">
                            <div class="hi-text">
                                <span>Be Fit At Home</span>
                                <h1>Gain<strong> Fitness</strong><br> At Home</h1>
                                <a href="Gallery.php" class="primary-btn text-center">Shop Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/HomeGymEq1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6 p-5 overlay">
                            <div class="hi-text">
                                <span>Do Exercises At Home</span>
                                <h1>Be<strong> Fit</strong><br> At Home</h1>
                                <a href="Gallery.php" class="primary-btn text-center">Shop Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- ChooseUs Section Begin -->
    <section class="chooseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Why choose us?</span>
                        <h2>Gain Fitness at your home</h2>
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

    <!-- 2 most featured products -->
    <div class="featured-section">
        <div class="container">
            <div class="px-5 py-5 text-center">
                <p class="Yellow-text">For this month, these two products are our customers' favourite!
                </p>
                <h2>Our Two Most Featured Products for this month</h2>

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
    <!-- 2 most featured products -->

    <!-- Product Section Begin -->
    <section class="pricing-section spad-2">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12">
                    <div class="section-title">
                        <span class="White-text">Home Gym Equipments are here for you...</span>
                        <h2>Our Products</h2>
                    </div>
                </div>
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
                    for ($a = 0; $a < $count; $a += 6)
                    {
                        $query1 = "SELECT * FROM Product p, ProductType pt, ProductCategory pc  
                              WHERE p.ProductTypeID = pt.ProductTypeID
                              AND p.ProductCategoryID = pc.ProductCategoryID
                              ORDER BY ProductID LIMIT $a,6";
                        $ret1 = mysqli_query($connection, $query1);
                        $count1 = mysqli_num_rows($ret1);

                        echo "<div class='row justify-content-center'>";

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
                            <div class="col-lg-4 col-md-8">
                                <div class="ps-item">
                                    <h3 class="ellipsis-text"><?php echo $ProductName ?></h3>
                                    <div class="mw-100">
                                        <img class="Product-image" src="<?php echo $ProductImage1 ?>">
                                    </div>
                                    <div class="pi-price">
                                        <h4 class="py-4 Yellow-text">$ <?php echo $ProductPrice ?></h4>
                                        <span class="py-2"><?php echo $ProductCategoryName ?></span>
                                    </div>
                                    <a href="Product_Details.php?ProductID=<?php echo $ProductID ?>" class="primary-btn pricing-btn">Product Details...</a>
                                </div>
                            </div>
                <?php
                        }
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- View Count -->
    <div class="ViewCount-section">
        <?php
        if (!isset($_SESSION['CustomerID']))
        {
            // echo "<script>alert('Login')</script>";
            $Viewcount1 = 'Please log in to see Page Views!';
        }
        else
        {
            $CustomerID = $_SESSION['CustomerID'];
            // $select = "SELECT SUM(ViewCount) FROM Customer";
            $select = "SELECT * FROM Customer
                    WHERE CustomerID='$CustomerID'";
            $query = mysqli_query($connection, $select);
            $Viewcount = mysqli_num_rows($query);

            if ($count > 0)
            {
                $row = mysqli_fetch_array($query);
                $Viewcount1 = $row['ViewCount'];
                // echo "ViewCount :" . $count1;
            }
        }
        ?>
        <div class="justify-content-around p-5">
            <div class="text-center">
                <h3>Current User's Page Views: <span class="Count Yellow-text"><b><?php echo $Viewcount1 ?></b></span></h3>
                <p>We are continuously upgrading our products & services for our customers!</p>
            </div>
        </div>
    </div>
    <!-- View Count -->

    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="./img/hero/hero-12.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text p-3">
                        <h2>Book now for Fitness education class & Equipment repair services</h2>
                        <!-- <div class="bt-tips">HGE is where health, beauty and fitness meets.</div> -->
                        <a href="Workshop.php" class="primary-btn  btn-normal">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- About Us -->
    <div class="AboutUs-section spad-2">
        <div class="row align-item-middle">
            <div class="col-lg-7 p-5">
                <h3>About <span class="Yellow-text">HGE</span></h3>
                <p>We are a group of people that enjoys helping you achieve your fitness goals through means of building an affordable and quality home gym that meets your exercise regime and budget.
                    That's why we have created this website aimed on building a place in comfort of your own home dedicated to reaching attaining your goals at the most affordable price.
                </p>
                <p>
                    Ultimately, we aim to provide our most honest advice to any customer according to their requirements, as our mission is to help everyone build a home gym place that best suits their needs.
                    We hope that with the most suitable equipment, everyone will be able to maintain a healthy lifestyle.
                </p>
            </div>
            <div class="col-lg-5 px-5">
                <div>
                    <img class="cus_img" src="img/gallery/gallery-6.jpg" alt="">
                </div>
            </div>

        </div>
    </div>
    <!-- About Us End-->

    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gt-text text-center">
                        <span class="fa fa-map-marker fa-2x"></span>
                        <p>15 AungThaPyay ST, MingalarTaungNyunt TSP,<br /> YGN, Myanmar</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text text-center">
                        <span class="fa fa-mobile fa-2x"></span>
                        <ul>
                            <li>09-756970111</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text email text-center">
                        <span class="fa fa-envelope fa-2x"></span>
                        <p>Support.HGE@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map">
        <iframe class="map iframe" src="https://maps.google.com/maps?q=Aungthapyay%20street,%20Myanmar&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        <a href="https://www.embedgooglemap.net"></a>
    </div>

    <!-- Get In Touch Section End -->

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
                            <li><a href="./Index.php"><span class="Yellow-text">Home</span> (You are here)</a></li>
                            <li><a href="./Information.php">Information</a></li>
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

    <!-- Search model -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model End -->

    <!-- Cookie Consent Modal -->
    <div id="Cookie-popup">
        <div class=" d-flex justify-content-center mt-5">
            <div class="card card text-white bg-dark p-3 cookie">
                <span class="cookie-text">Please accept Cookies as we use Cookies to personalize contents, ads and analyze site traffics.<br></span>
                <div class="mt-4 text-right">
                    <span class="mr-3 decline cookie-text">Decline</span>
                    <button id="acceptcookie" class="btn btn-light btn-sm cookie-text" type="button">Allow cookies</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Cookie Consent Modal -->


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
    <script type="text/javascript" src="./js/cookie.js"></script>
</body>

</html>