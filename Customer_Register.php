<?php
include('connect.php');

if ((isset($_POST['btnSave'])) && $_POST['g-recaptcha-response'] != "")
{
    $secret = '6Lf3tVEgAAAAACjBJ-Pa7CzCJx1-wFVWN91AuXZy';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);

    if ($responseData->success)
    {
        $txtcustomerfirstname = $_POST['txtcustomerfirstname'];
        $txtcustomersurname = $_POST['txtcustomersurname'];
        $txtcustomerphone = $_POST['txtcustomerphone'];
        $txtcustomeraddress = $_POST['txtcustomeraddress'];
        $txtcustomeremail = $_POST['txtcustomeremail'];
        $txtcustomerpassword = $_POST['txtcustomerpassword'];

        $Image = $_FILES['filecustomerprofile']['name'];
        $Folder = "image/";
        $Filename = $Folder . '_' . $Image;

        $copy = copy($_FILES['filecustomerprofile']['tmp_name'], $Filename);

        if (!$copy)
        {
            echo "<p>Cannot Upload!</p>";
            exit();
        }

        $select = "SELECT * FROM Customer Where CustomerEmail = '$txtcustomeremail'";
        $ret = mysqli_query($connection, $select);
        $count = mysqli_num_rows($ret);

        if ($count > 0)
        {
            echo "<script>window.alert('Customer cannot register! Account with this email already exists!')</script>";
            echo "<script>window.location = 'Customer_Register.php'</script>";
            exit();
        }
        else
        {
            echo $query = "INSERT INTO Customer
                (CustomerFirstName,CustomerSurName,CustomerPhone,CustomerAddress,CustomerEmail,CustomerPassword,CustomerProfile,ViewCount)
                Values('$txtcustomerfirstname','$txtcustomersurname','$txtcustomerphone','$txtcustomeraddress','$txtcustomeremail','$txtcustomerpassword','$Filename',1)";

            $result = mysqli_query($connection, $query);
        }

        if ($result)
        {
            echo "<script>window.alert('Customer Registeration Successful!')</script>";
            echo "<script>window.location = 'Customer_Register.php'</script>";
        }
        else
        {
            echo "<p>Error in Customer Register : " . mysqli_error($connection) . "</p>";
        }
    }
}

if ((isset($_POST['btnSave'])) && $_POST['g-recaptcha-response'] == "")
{
    echo "<script>window.alert('Please complete Recaptcha Verification before submitting!')</script>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register New Account</title>

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
                <li class="active"><a href="./Customer_Register.php">Register</a></li>
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
                            <li class="active"><a href="./Customer_Register.php">Register</a></li>
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
                        <h2>Register New Account</h2>
                        <div class="bt-option">
                            <a href="./Index.php">Home</a>
                            <span>Register New Account</span>
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
                    <h1>Register New Account</h1>
                    <br>
                    <div class="User-forms-section">
                        <form method="POST" action="Customer_Register.php" enctype="multipart/form-data">
                            <h5>First Name</h5>
                            <input type="text" name="txtcustomerfirstname" placeholder="First Name" value='<?php echo isset($_POST['txtcustomerfirstname']) ? $_POST['txtcustomerfirstname'] : ''; ?>' required />

                            <h5>Last/Sur Name</h5>
                            <input type="text" name="txtcustomersurname" placeholder="Last Name" value='<?php echo isset($_POST['txtcustomersurname']) ? $_POST['txtcustomersurname'] : ''; ?>' required />

                            <h5>Email</h5>
                            <input type="email" name="txtcustomeremail" placeholder="Your email" value='<?php echo isset($_POST['txtcustomeremail']) ? $_POST['txtcustomeremail'] : ''; ?>' required />

                            <h5>Password</h5>
                            <input type="text" name="txtcustomerpassword" placeholder="Password" value='<?php echo isset($_POST['txtcustomerpassword']) ? $_POST['txtcustomerpassword'] : ''; ?>' required>

                            <h5>Phone</h5>
                            <input type="number" name="txtcustomerphone" placeholder="Phone no." value='<?php echo isset($_POST['txtcustomerphone']) ? $_POST['txtcustomerphone'] : ''; ?>' required />

                            <h5>Address</h5>
                            <input type="text" name="txtcustomeraddress" placeholder="Your address" value='<?php echo isset($_POST['txtcustomeraddress']) ? $_POST['txtcustomeraddress'] : ''; ?>' required />

                            <h5>Profile Picture</h5>
                            <input type="file" name="filecustomerprofile" required />

                            <!-- Capture Verification -->
                            <div class="g-recaptcha" data-sitekey="6Lf3tVEgAAAAAF1kDOyFDehnczzVYpgHlChLpfzV" data-size="compact"></div>

                            <p>Already have an account? <span><a href="./Customer_Login.php">Log in</a></span></p>

                            <hr>
                            <button type="submit" name="btnSave" value="Save">Register</button>
                            <br>
                            <button type="reset" value="Clear">Clear</button>
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
                            <li><a href="./Customer_Register.php"><span class="Yellow-text">Register</span> (You are here)</a></li>
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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