<?php
session_start();
include('connect.php');

if (isset($_POST['btnlogin']))
{
    $txtcustomeremail = $_POST['txtcustomeremail'];
    $txtcustomerpassword = $_POST['txtcustomerpassword'];

    $insert = "SELECT * FROM Customer 
               WHERE CustomerEmail='$txtcustomeremail' AND CustomerPassword='$txtcustomerpassword'";
    $query = mysqli_query($connection, $insert);
    $count = mysqli_num_rows($query);

    if ($count > 0)
    {
        $update = "UPDATE Customer set ViewCount=ViewCount+1
                  WHERE CustomerEmail='$txtcustomeremail' AND CustomerPassword='$txtcustomerpassword'";
        mysqli_query($connection, $update);

        $row = mysqli_fetch_array($query);
        $CustomerID = $row['CustomerID'];
        $_SESSION['CustomerID'] = $CustomerID;



        echo "<script>window.alert('Customer Login Successful!')</script>";
        echo "<script>window.location='Index.php'</script>";
    }
    else
    {
        if (isset($_SESSION['loginError']))
        {
            $countError = $_SESSION['loginError'];
            //check 3 attempts: 2 if, 1 else

            if ($countError == 1)
            {
                $_SESSION['loginError'] = 2;
                echo "<script>window.alert('Customer Login Failed! Please Try Again. Error Attempt: 2.')</script>";
            }
            if ($countError == 2)
            {
                echo "<script>window.alert('Customer Login Failed! Please Try Again. Error Attempt: 3.')</script>";
                echo "<script>window.location='LoginTimer.php'</script>";
            }
        }
        else
        {
            $_SESSION['loginError'] = 1;
            echo "<script>window.alert('Customer Login Failed! Please Try Again. Error Attempt: 1.')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log Into Account</title>

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
                <li class="active"><a href="./Customer_Login.php">Log in</a></li>
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
                            <li class="active"><a href="./Customer_Login.php">Log in</a></li>
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
                        <h2>Log Into Account</h2>
                        <div class="bt-option">
                            <a href="./Index.php">Home</a>
                            <span>Log Into Account</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <h1>Log into Account</h1>
                    <br>
                    <div class="User-forms-section">
                        <form action="Customer_Login.php" method="POST">

                            <h5>Email</h5>
                            <input type="email" name="txtcustomeremail" placeholder="Enter Email" required></td>

                            <h5>Password</h5>
                            <input type="password" name="txtcustomerpassword" placeholder="Enter Your Password" required></td>

                            <br> <br>
                            <p>Does not have an account created? <span><a href="./Customer_Register.php">Register new account</a></span>.</p>

                            <hr>
                            <button type="submit" name="btnlogin" value="Login">Login</button>
                            <br>
                            <button type="reset" name="btncancel" value="Cancel">Cancel</button>
                        </form>
                        <form action="Customer_Logout.php" method="POST">
                            <button type="submit" name="btnlogout" value="Logout">Logout of current account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

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
                            <li><a href="./Customer_Login.php"><span class="Yellow-text">Log in</span> (You are here)</a></li>
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