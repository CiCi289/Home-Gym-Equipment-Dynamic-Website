<?php
session_start();
include('connect.php');
// error_reporting(0);

if (isset($_POST['btnBook']))
{
   $txtbookingname = $_POST['txtbookingname'];
   $txtbookingemail = $_POST['txtbookingemail'];
   $txtbookingmessage = $_POST['txtbookingmessage'];
   $strippedtxtbookingmessage = str_replace("'", "''", $txtbookingmessage);
   $cboBookingReason = $_POST['cboBookingReason'];
   $txtpolicy = $_POST['txtpolicy'];

   if ($cboBookingReason == 'Choose Reason to Book')
   {
      echo "<script>window.alert('Make sure to select a booking reason before submitting Booking.')</script>";
   }
   else
   {
      if ($txtpolicy == 'Agree')
      {
         $insert = "INSERT INTO Booking 
                     (BookingName, BookingEmail, BookingMessage, BookingReasonID, BookingTimestamp)
                     VALUES('$txtbookingname','$txtbookingemail','$strippedtxtbookingmessage','$cboBookingReason',CURRENT_TIMESTAMP())";

         $result = mysqli_query($connection, $insert);
      }
      else
      {
         echo "<script>window.alert('Make sure to read and check our privacy policy before submitting Booking.')</script>";
      }
   }

   if ($result)
   {
      echo "<script>window.alert('Thank you for your Booking. We will contact you soon! :)')</script>";
      echo "<script>window.location = 'Workshop.php'</script>";
   }
   else
   {
      echo "<script>window.alert('Booking was not submitted! Plz try again. :(')</script>";
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Workshop</title>

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
            <li class="active"><a href="./Workshop.php">Workshop</a></li>
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
                     <li class="active"><a href="./Workshop.php">Workshop</a></li>
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
                  <h2>Workshop</h2>
                  <div class="bt-option">
                     <a href="./Index.php">Home</a>
                     <span>Workshop</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Breadcrumb Section End -->

   <!-- Our services Section Begin -->
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
   <!-- Our services Section End -->

   <!-- Gallery Section Begin -->
   <div class="gallery-section spad-2">

      <div class="section-title text-center">
         <span>Here are...</span>
         <h2>Our maintenance Crews & repaired Equipments</h2>
      </div>

      <div class="gallery">
         <div class="grid-sizer"></div>
         <div class="gs-item grid-wide set-bg" data-setbg="./img/repair/Eq-repair1.jpg">
            <a href="./img/repair/Eq-repair1.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
         </div>
         <div class="gs-item set-bg" data-setbg="./img/repair/Eq-repair2.jpg">
            <a href="./img/repair/Eq-repair2.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
         </div>
         <div class="gs-item set-bg" data-setbg="./img/repair/Eq-repair3.jpg">
            <a href="./img/repair/Eq-repair3.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
         </div>
         <div class="gs-item grid-wide set-bg" data-setbg="./img/repair/Eq-repair6.jpg">
            <a href="./img/repair/Eq-repair6.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
         </div>
         <div class="gs-item grid-wide set-bg" data-setbg="./img/repair/Eq-repair4.jpg">
            <a href="./img/repair/Eq-repair4.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
         </div>
         <div class="gs-item set-bg" data-setbg="./img/repair/Eq-repair7.jpg">
            <a href="./img/repair/Eq-repair7.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
         </div>
         <div class="gs-item set-bg" data-setbg="./img/repair/Eq-repair8.jpg">
            <a href="./img/repair/Eq-repair8.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
         </div>
         <div class="gs-item set-bg" data-setbg="./img/repair/Eq-repair9.jpg">
            <a href="./img/repair/Eq-repair9.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
         </div>
         <div class="gs-item set-bg" data-setbg="./img/repair/Eq-repair10.jpg">
            <a href="./img/repair/Eq-repair10.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
         </div>
         <div class="gs-item set-bg" data-setbg="./img/repair/Eq-repair11.jpg">
            <a href="./img/repair/Eq-repair11.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
         </div>
         <div class="gs-item set-bg" data-setbg="./img/repair/Eq-repair12.jpg">
            <a href="./img/repair/Eq-repair12.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
         </div>
         <div class="gs-item set-bg" data-setbg="./img/repair/Eq-repair13.jpg">
            <a href="./img/repair/Eq-repair13.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
         </div>
         <div class="gs-item set-bg" data-setbg="./img/repair/Eq-repair16.jpg">
            <a href="./img/repair/Eq-repair16.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
         </div>

      </div>
   </div>
   <!-- Gallery Section End -->

   <!-- Team Section Begin -->
   <section class="team-section2 team-page spad">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="team-title">
                  <div class="section-title">
                     <span>Our Team</span>
                     <h2>TRAIN WITH EXPERTS</h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="row justify-content-around">
            <div class="col-lg-4 col-sm-6">
               <div class="ts-item set-bg" data-setbg="img/team/team-1.jpg">
                  <div class="Gallery-img"></div>
                  <div class="ts_text">
                     <h4>Christine Rachel</h4>
                     <span>Gym Trainer</span>
                     <div class="tt_social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa  fa-envelope-o"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-6">
               <div class="ts-item set-bg" data-setbg="img/team/team-2.jpg">
                  <div class="Gallery-img"></div>
                  <div class="ts_text">
                     <h4>Mike Stevenson</h4>
                     <span>Gym Trainer</span>
                     <div class="tt_social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa  fa-envelope-o"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-6">
               <div class="ts-item set-bg" data-setbg="img/team/team-4.jpg">
                  <div class="Gallery-img"></div>
                  <div class="ts_text">
                     <h4>David Regor</h4>
                     <span>Gym Trainer</span>
                     <div class="tt_social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa  fa-envelope-o"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Team Section End -->

   <!-- Contact Section Begin -->
   <section class="contact-section spad">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 mx-auto">
               <span class="White-text">Want to book us for Repairs/Education classes/Training classes...?</span>
               <h1>Booking</h1>
               <br>
               <div class="User-forms-section">
                  <form method="POST" action="Workshop.php">
                     <h5>Customer Name</h5>
                     <input type="text" name="txtbookingname" placeholder="Your Name" required />

                     <h5>Customer Email</h5>
                     <input type="email" name="txtbookingemail" placeholder="Email Address" required />

                     <select name="cboBookingReason" class="select-bar" required>
                        <option>Choose Reason to Book</option>
                        <?php
                        $query = "SELECT * FROM BookingReason";
                        $ret = mysqli_query($connection, $query);
                        $count = mysqli_num_rows($ret);

                        for ($i = 0; $i < $count; $i++)
                        {
                           $row = mysqli_fetch_array($ret);
                           $Reason_ID = $row['BookingReasonID'];
                           $Reason_Name = $row['BookingReasonName'];

                           echo "<option value='$Reason_ID'>$Reason_Name</option>";
                        }
                        ?>
                     </select>

                     <h5>Additional Message To HGE</h5>
                     <textarea name="txtbookingmessage" cols="30" rows="10" placeholder="Type your message here..."></textarea>

                     <h5>Privacy Policy</h5>
                     <input class="small-checkbox" type="checkbox" name="txtpolicy" value="Agree">
                     <span class="text-center">I agree to the <a data-toggle="modal" data-target="#PrivacyPolicy">Privacy Policy</a>.</span>

                     <hr>
                     <button type="submit" name="btnBook" value="Save">Submit Booking</button>
                     <br>
                     <button type="reset" value="Clear">Clear</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Contact Section End -->

   <!-- Privacy Policy model -->
   <div class="modal fade" id="PrivacyPolicy" tabindex="-1" aria-labelledby="PolicyLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="PolicyLabel">Our Privacy Policy</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body mx-3">
               <h1>Privacy policy</h1>
               <p>We respect your privacy and are committed to protecting it through our compliance with this privacy policy (“Policy”). This Policy describes the types of information we may collect from you or that you may provide (“Personal Information”) on the <a target="_blank" rel="nofollow" href="http://www.homegymequipment.com">homegymequipment.com</a> website (“Website” or “Service”) and any of its related products and services (collectively, “Services”), and our practices for collecting, using, maintaining, protecting, and disclosing that Personal Information. It also describes the choices available to you regarding our use of your Personal Information and how you can access and update it.</p>
               <p>This Policy is a legally binding agreement between you (“User”, “you” or “your”) and this Website operator (“Operator”, “we”, “us” or “our”). If you are entering into this agreement on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this agreement, in which case the terms “User”, “you” or “your” shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this agreement, you must not accept this agreement and may not access and use the Website and Services. By accessing and using the Website and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Policy. This Policy does not apply to the practices of companies that we do not own or control, or to individuals that we do not employ or manage. This privacy policy was created with the help of the <a target="_blank" href="https://www.websitepolicies.com/privacy-policy-generator" rel="noopener">privacy policy generator</a>.</p>
               <h2>Collection of personal information</h2>
               <p>You can access and use the Website and Services without telling us who you are or revealing any information by which someone could identify you as a specific, identifiable individual. If, however, you wish to use some of the features offered on the Website, you may be asked to provide certain Personal Information (for example, your name and e-mail address).</p>
               <p>We receive and store any information you knowingly provide to us when you create an account, or fill any forms on the Website. When required, this information may include the following:</p>
               <ul>
                  <li>Account details (such as user name, unique user ID, password, etc)</li>
                  <li>Contact information (such as email address, phone number, etc)</li>
                  <li>Basic personal information (such as name, country of residence, etc)</li>
               </ul>
               <p>You can choose not to provide us with your Personal Information, but then you may not be able to take advantage of some of the features on the Website. Users who are uncertain about what information is mandatory are welcome to contact us.</p>
               <h2>Privacy of children</h2>
               <p>We do not knowingly collect any Personal Information from children under the age of 13. If you are under the age of 13, please do not submit any Personal Information through the Website and Services. If you have reason to believe that a child under the age of 13 has provided Personal Information to us through the Website and Services, please contact us to request that we delete that child’s Personal Information from our Services.</p>
               <p>We encourage parents and legal guardians to monitor their children’s Internet usage and to help enforce this Policy by instructing their children never to provide Personal Information through the Website and Services without their permission. We also ask that all parents and legal guardians overseeing the care of children take the necessary precautions to ensure that their children are instructed to never give out Personal Information when online without their permission.</p>
               <h2>Use and processing of collected information</h2>
               <p>We act as a data controller and a data processor when handling Personal Information, unless we have entered into a data processing agreement with you in which case you would be the data controller and we would be the data processor.</p>
               <p> Our role may also differ depending on the specific situation involving Personal Information. We act in the capacity of a data controller when we ask you to submit your Personal Information that is necessary to ensure your access and use of the Website and Services. In such instances, we are a data controller because we determine the purposes and means of the processing of Personal Information.</p>
               <p>We act in the capacity of a data processor in situations when you submit Personal Information through the Website and Services. We do not own, control, or make decisions about the submitted Personal Information, and such Personal Information is processed only in accordance with your instructions. In such instances, the User providing Personal Information acts as a data controller.</p>
               <p>In order to make the Website and Services available to you, or to meet a legal obligation, we may need to collect and use certain Personal Information. If you do not provide the information that we request, we may not be able to provide you with the requested products or services. Any of the information we collect from you may be used for the following purposes:</p>
               <ul>
                  <li>Create and manage user accounts</li>
                  <li>Send product and service updates</li>
                  <li>Run and operate the Website and Services</li>
               </ul>
               <p>Processing your Personal Information depends on how you interact with the Website and Services, where you are located in the world and if one of the following applies: (i) you have given your consent for one or more specific purposes; (ii) provision of information is necessary for the performance of an agreement with you and/or for any pre-contractual obligations thereof; (iii) processing is necessary for compliance with a legal obligation to which you are subject; (iv) processing is related to a task that is carried out in the public interest or in the exercise of official authority vested in us; (v) processing is necessary for the purposes of the legitimate interests pursued by us or by a third party. We may also combine or aggregate some of your Personal Information in order to better serve you and to improve and update our Website and Services.</p>
               <p> Note that under some legislations we may be allowed to process information until you object to such processing by opting out, without having to rely on consent or any other of the legal bases. In any case, we will be happy to clarify the specific legal basis that applies to the processing, and in particular whether the provision of Personal Information is a statutory or contractual requirement, or a requirement necessary to enter into a contract.</p>
               <h2>Managing information</h2>
               <p>You are able to delete certain Personal Information we have about you. The Personal Information you can delete may change as the Website and Services change. When you delete Personal Information, however, we may maintain a copy of the unrevised Personal Information in our records for the duration necessary to comply with our obligations to our affiliates and partners, and for the purposes described below. If you would like to delete your Personal Information or permanently delete your account, you can do so on the settings page of your account on the Website or simply by contacting us.</p>
               <h2>Disclosure of information</h2>
               <p> Depending on the requested Services or as necessary to complete any transaction or provide any Service you have requested, we may share your information with our affiliates, contracted companies, and service providers (collectively, “Service Providers”) we rely upon to assist in the operation of the Website and Services available to you and whose privacy policies are consistent with ours or who agree to abide by our policies with respect to Personal Information. We will not share any personally identifiable information with third parties and will not share any information with unaffiliated third parties.</p>
               <p>Service Providers are not authorized to use or disclose your information except as necessary to perform services on our behalf or comply with legal requirements. Service Providers are given the information they need only in order to perform their designated functions, and we do not authorize them to use or disclose any of the provided information for their own marketing or other purposes.</p>
               <h2>Retention of information</h2>
               <p>We will retain and use your Personal Information for the period necessary as long as your user account remains active, to enforce our agreements, resolve disputes, and unless a longer retention period is required or permitted by law.</p>
               <p>We may use any aggregated data derived from or incorporating your Personal Information after you update or delete it, but not in a manner that would identify you personally. Once the retention period expires, Personal Information shall be deleted. Therefore, the right to access, the right to erasure, the right to rectification, and the right to data portability cannot be enforced after the expiration of the retention period.</p>
               <h2>Do Not Track signals</h2>
               <p>Some browsers incorporate a Do Not Track feature that signals to websites you visit that you do not want to have your online activity tracked. Tracking is not the same as using or collecting information in connection with a website. For these purposes, tracking refers to collecting personally identifiable information from consumers who use or visit a website or online service as they move across different websites over time. How browsers communicate the Do Not Track signal is not yet uniform. As a result, the Website and Services are not yet set up to interpret or respond to Do Not Track signals communicated by your browser. Even so, as described in more detail throughout this Policy, we limit our use and collection of your Personal Information.</p>
               <h2>Social media features</h2>
               <p>Our Website and Services may include social media features, such as the Facebook and Twitter buttons, Share This buttons, etc (collectively, “Social Media Features”). These Social Media Features may collect your IP address, what page you are visiting on our Website and Services, and may set a cookie to enable Social Media Features to function properly. Social Media Features are hosted either by their respective providers or directly on our Website and Services. Your interactions with these Social Media Features are governed by the privacy policy of their respective providers.</p>
               <h2>Links to other resources</h2>
               <p>The Website and Services contain links to other resources that are not owned or controlled by us. Please be aware that we are not responsible for the privacy practices of such other resources or third parties. We encourage you to be aware when you leave the Website and Services and to read the privacy statements of each and every resource that may collect Personal Information.</p>
               <h2>Information security</h2>
               <p>We secure information you provide on computer servers in a controlled, secure environment, protected from unauthorized access, use, or disclosure. We maintain reasonable administrative, technical, and physical safeguards in an effort to protect against unauthorized access, use, modification, and disclosure of Personal Information in our control and custody. However, no data transmission over the Internet or wireless network can be guaranteed.</p>
               <p>Therefore, while we strive to protect your Personal Information, you acknowledge that (i) there are security and privacy limitations of the Internet which are beyond our control; (ii) the security, integrity, and privacy of any and all information and data exchanged between you and the Website and Services cannot be guaranteed; and (iii) any such information and data may be viewed or tampered with in transit by a third party, despite best efforts.</p>
               <p>As the security of Personal Information depends in part on the security of the device you use to communicate with us and the security you use to protect your credentials, please take appropriate measures to protect this information.</p>
               <h2>Data breach</h2>
               <p>In the event we become aware that the security of the Website and Services has been compromised or Users’ Personal Information has been disclosed to unrelated third parties as a result of external activity, including, but not limited to, security attacks or fraud, we reserve the right to take reasonably appropriate measures, including, but not limited to, investigation and reporting, as well as notification to and cooperation with law enforcement authorities. In the event of a data breach, we will make reasonable efforts to notify affected individuals if we believe that there is a reasonable risk of harm to the User as a result of the breach or if notice is otherwise required by law. When we do, we will send you an email.</p>
               <h2>Changes and amendments</h2>
               <p>We reserve the right to modify this Policy or its terms related to the Website and Services at any time at our discretion. When we do, we will send you an email to notify you. We may also provide notice to you in other ways at our discretion, such as through the contact information you have provided.</p>
               <p>An updated version of this Policy will be effective immediately upon the posting of the revised Policy unless otherwise specified. Your continued use of the Website and Services after the effective date of the revised Policy (or such other act specified at that time) will constitute your consent to those changes. However, we will not, without your consent, use your Personal Information in a manner materially different than what was stated at the time your Personal Information was collected.</p>
               <h2>Acceptance of this policy</h2>
               <p>You acknowledge that you have read this Policy and agree to all its terms and conditions. By accessing and using the Website and Services and submitting your information you agree to be bound by this Policy. If you do not agree to abide by the terms of this Policy, you are not authorized to access or use the Website and Services.</p>
               <h2>Contacting us</h2>
               <p>If you have any questions, concerns, or complaints regarding this Policy, the information we hold about you, or if you wish to exercise your rights, we encourage you to contact us using the details below:</p>
               <p><a target="_blank" rel="nofollow" href="http://www.homegymequipment.com/contact_us">http://www.homegymequipment.com/contact_us/</a></p>
               <p>We will attempt to resolve complaints and disputes and make every reasonable effort to honor your wish to exercise your rights as quickly as possible and in any event, within the timescales provided by applicable data protection laws.</p>
               <p>This document was last updated on June 6, 2022</p>
            </div>
         </div>
      </div>
   </div>
   <!-- Privacy Policy model -->

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
   <!-- About Us -->

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
            <div class="col-lg-2"></div>
            <div class="col-6 col-lg-3 col-md-3 col-sm-6">
               <div class="fs-widget">
                  <h4>Useful links</h4>
                  <ul>
                     <li><a href="./Index.php">Home</a></li>
                     <li><a href="./Information.php">Information</a></li>
                     <li><a href="./Wanted.php">Wanted</a></li>
                     <li><a href="./Featured.php">Featured</a></li>
                     <li><a href="./Workshop.php"><span class="Yellow-text">Workshop</span> (You are here)</a></li>
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