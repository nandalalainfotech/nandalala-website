<?php
ob_start();
?>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

 if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    
$name = htmlentities($_POST['name']);
$email = htmlentities($_POST['email']);
$phone = htmlentities($_POST['phone']);
$message = htmlentities($_POST['message']);
$mail = new PHPMailer();
$mail->IsSMTP();  
$mail->SMTPDebug = 0;
$mail->Mailer = "smtp";
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPAuth = true; 
$mail->Username = "noreply.nandalalainfotech@gmail.com"; 
$mail->Password = "yuntjikzkpxmhdoj";
$mail->AddAddress("info@khazanchi.co.in","khazanchi");
$mail->AddBCC("diva@nandalalainfotech.com","khazanchi");
$mail->SetFrom($email);
$name = isset($_POST['name']) ? preg_replace("/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name']) : "";
$senderEmail = isset($_POST['email']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email']) : "";
$phone = isset($_POST['phone']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['phone']) : "";
$services = isset($_POST['services']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['services']) : "";
$subject = isset($_POST['subject']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['subject']) : "";
$address = isset($_POST['address']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['address']) : "";
$website = isset($_POST['website']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['website']) : "";
$message = isset($_POST['message']) ? preg_replace("/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message']) : "";
$mail->Subject = 'Enquiry received from khazanchi.co.in website ';
$mail->Body .= 'Name: ' . $name . "\n";
$mail->Body .= 'Email: ' . $senderEmail . "\n";
$mail->Body .='Phone:' . $phone . "\n";
$mail->Body .= 'Message: ' . "\n" . $message;
$mail->WordWrap = 50;

    if(!$mail->Send()) {
        echo 'Message was not sent.';
        } 
        else {
        
        echo "<script>
            alert('Thanks for contacting us. We will contact you ASAP!');
        </script>";
        }
         }
         ?>
<!DOCTYPE html>
<html lang="en-US" class="css3transitions">

<head>
    <meta charset="UTF-8" />
    <!-- Title -->
    <title>Khazanchi Jewellers | Contact Us</title>
    <!-- Responsive Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Pingback URL -->
    <link rel="pingback" href="xmlrpc.php" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/image/KJ_FavIcon.png">
    <link rel='stylesheet' href='assets/plugins/LayerSlider/static/css/layerslider.css' type='text/css' media='all' />
    <link rel='stylesheet'
        href='http://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&amp;subset=latin%2Clatin-ext'
        type='text/css' media='all' />
    <link rel='stylesheet' href='assets/plugins/revslider/rs-plugin/css/settings.css' type='text/css' media='all' />
    <link rel='stylesheet'
        href='http://fonts.googleapis.com/css?family=Open+Sans%3A100%2C400%2C300%2C500%2C600%2C700%2C300italic'
        type='text/css' media='all' />
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Satisfy' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/custom.css' type='text/css' />
    <link rel='stylesheet' href='assets/css/style_captcha.css' type='text/css' />
    <link rel='stylesheet' href='assets/css/bootstrap.css' type='text/css' media='all' />
    <link rel='stylesheet' href='style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/bootstrap-responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/odometer-theme-minimal.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/fancybox/source/jquery.fancybox.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/hoverex-all.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/vector-icons.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/linecon.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/steadysets.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/jquery.easy-pie-chart.css' type='text/css' />
    <link rel='stylesheet' href='assets/css/idangerous.swiper.css' type='text/css' />
    <link rel='stylesheet' href='assets/css/eldo.css' type='text/css' />
    <link rel='stylesheet' href='assets/plugins/js_composer/assets/css/js_composer.css' type='text/css' />
    <link rel='stylesheet' href='assets/uploads/js_composer/custom.css' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="whatsapp/whatsapp.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type='text/javascript' src='assets/plugins/LayerSlider/static/js/greensock.js'></script>
    <script type='text/javascript' src='assets/includes/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='assets/includes/js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript'
        src='assets/plugins/LayerSlider/static/js/layerslider.kreaturamedia.jquery.js'></script>
    <script type='text/javascript' src='assets/plugins/LayerSlider/static/js/layerslider.transitions.js'></script>
    <script type='text/javascript' src='assets/plugins/revslider/rs-plugin/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript'
        src='assets/plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easy-pie-chart.js'></script>
    <script type='text/javascript' src='assets/js/jquery.appear.js'></script>
    <script type='text/javascript' src='assets/js/modernizr.custom.66803.js'></script>
    <script type='text/javascript' src='assets/js/odometer.min.js'></script>
    <script type='text/javascript' src='assets/js/animations.js'></script>
    <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.1.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='assets/js/jquery.mobilemenu.js'></script>
    <script type='text/javascript' src='assets/js/isotope.js'></script>
    <script type='text/javascript' src='assets/js/layout-mode.js'></script>
    <script type='text/javascript' src='assets/js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.cycle.all.js'></script>
    <script type='text/javascript' src='assets/js/customSelect.jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.flexslider-min.js'></script>
    <script type='text/javascript' src='assets/fancybox/source/jquery.fancybox.js'></script>
    <script type='text/javascript' src='assets/fancybox/source/helpers/jquery.fancybox-media.js'></script>
    <script type='text/javascript' src='assets/js/jquery.carouFredSel-6.1.0-packed.js'></script>
    <script type='text/javascript' src='assets/js/tooltip.js'></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.js"></script>

</head>
<!-- End of Header -->

<body class="single single-post  page-template-default header_1_body page_header_yes wpb-js-composer vc_responsive">
    <!-- Start Top Navigation -->
    <div class="top_nav">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <div class="pull-left">
                        <div id="widget_topnav-2" class="widget widget_topnav">
                            <div class="widget_activation">
                                <a href="http://kjpl.in/" data-box="login" target="_blank">Live Rates</a>
                            </div>
                        </div>
                        <div id="widget_topinfo-2" class="widget widget_topinfo">
                            <div class="topinfo"><a class="phone" href="tel:444-201-5915"><i class="moon-phone"></i>+91
                                    44 4201 5915
                                </a><a class="email" href="mailto:info@khazanchi.co.in"><i
                                        class="icon-envelope"></i>info@khazanchi.co.in</a></div>
                        </div>
                    </div>
                </div>
                <div class="span6">
                    <div class="pull-right">
                        <div id="social_widget-2" class="widget social_widget">
                            <div class="row-fluid social_row">
                                <div class="span12">
                                    <ul class="footer_social_icons">
                                        <li class="google_plus"><a href="#"><i class="moon-google_plus"></i></a></li>
                                        <li class="instagram"><a
                                                href="https://instagram.com/khazanchijewellers?igshid=YmMyMTA2M2Y="
                                                target="_blank"><i class="moon-instagram"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="moon-twitter"></i></a></li>
                                        <li class="facebook"><a
                                                href="https://www.facebook.com/khazanchijewellers?mibextid=ZbWKwL"
                                                target="_blank"><i class="moon-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Top Navigation -->
    <div id="page-bg"></div>
    <!-- Header BEGIN -->
    <div class="header_wrapper header_1 no-transparent  ">
        <header id="header" class="sticky_header">
            <div class="container">
                <div class="row-fluid">
                    <div class="span12">
                        <!-- Logo -->
                        <div id="logo" class="">
                            <a href='index.html'><img src='assets/image/logos/logo.svg' alt='' class="logo_mbl" /><img
                                    src="assets/image/logos/logo.svg" alt="" class="light" /></a>
                        </div>
                        <!-- #logo END -->
                        <div class="after_logo">
                            <!-- Search -->
                            <div class="header_search">
                                <div class="right_search">
                                    <i class="moon-search-2"></i>
                                </div>
                                <div class="right_search_container">
                                    <form action="#"  id="search-form">
                                        <div class="input-append">
                                            <input type="text" size="16" placeholder="Search&hellip;" name="s" id="s">
                                            <button type="submit" class="more">Search</button>
                                            <a href="#" class="close_"><i class="moon-close"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End Search-->
                        </div>
                        <div id="navigation" class="nav_top pull-right  ">
                            <nav>
                                <ul id="menu-menu-1" class="menu themeple_megemenu">
                                    <li class="menu-item-has-children"><a href="index.html">Home</a>
                                    </li>

                                    <li class="menu-item   menu-item-has-children"><a href="about_us_2.html">About
                                            us</a>
                                        <ul class="sub-menu">
                                        </ul>
                                    </li>
                                    <li class="menu-item   menu-item-has-children"><a
                                            href="product-list.html">Products</a>
                                    </li>
                                    <li class="menu-item   menu-item-has-children"><a href="#">Investors Info</a>
                                    <ul class="sub-menu">
                                        <li><a href="annual-reports.html">Annual Reports</a></li>
                                        <li><a href="annual-return.html">Annual Return </a></li>
                                      <li><a href="board-of-directors.html">Board of Directors</a></li>
                                    <li><a href="founders.html">Founders</a></li>
                                        <li><a href="policies.html">Code Of Conduct & Policies</a></li>
                                        <li><a href="founder-and-promoters.html">Promoters</a></li>
                                        <li><a href="investors.html">Investors Contact</a></li>
                                        <li><a href="initial public-offering -as prospectus.html">Initial Public
                                                Offering as Prospectus</a></li>
                                        <li><a href="our-group-companies.html">Our Group Companies</a></li>
                                        <li><a href="Outcome-of-Board-Meeting.html">Outcome of Board Meeting</a>
                                        </li>
                                        <li><a href="financial-results.html">Financial Results</a>
                                        </li>
                                        <li><a href="corporate-governance-report.html"> Corporate Governance Report</a></li>
                                        <li><a href="share-capital-audit-report.html"> Reconciliation of Share Capital Audit Report</a>
                                        </li>
                                        <li><a href="sdd-compliance-certificate.html"> SDD Compliance Certificate</a></li>
                                        <li><a href="shareholding-pattern.html"> Shareholding Pattern</a></li>
                                        <li><a href="investor-grievance-report.html"> Investor Grievance Report</a></li>
                                    </ul>
                                    </li>
                                    <li class="menu-item  menu-item-has-children"><a href="#">Quick Link
                                        </a>
                                    <ul class="sub-menu">
                                    <li>
                                                <a href="#" onclick='window.open("https://smartodr.in/login/");return false;'>Smart ODR</a></li>
                                        <li><a href="sebi.html">Circular Online Dispute Resolution</a></li>
                                    </ul>
                                </li>
                                    <li class="menu-item   menu-item-has-children current-menu-ancestor"><a
                                            href="contact-us.php">Contact Us</a>
                                        <ul class="sub-menu">
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- #navigation -->
                        <a href="#" class="mobile_small_menu open"></a>
                    </div>
                </div>
            </div>
            <div class="header_shadow"><span class=""></span></div>
        </header>
        <div class="header_shadow"><span class=""></span></div>
        <!-- Responsive Menu -->
        <div class="menu-small">
            <ul class="menu">
                <li class="menu-small menu-item-has-children"><a href="index.html">Home</a></li>

                <li class="menu-small   menu-item-has-children"><a href="about_us_2.html">About us</a>
                    <ul class="sub-menu ">
                    </ul>
                </li>
                <li class="menu-small   menu-item-has-children"><a href="product-list.html">Products</a>
                </li>
                <li class="menu-small   menu-item-has-children"><a href="#">Investors Info</a>
                <ul class="sub-menu">
                        <li><a href="annual-reports.html">Annual Reports</a></li>
                        <li><a href="annual-return.html">Annual Return </a></li>
                      <li><a href="board-of-directors.html">Board of Directors</a></li>
                                    <li><a href="founders.html">Founders</a></li>
                        <li><a href="policies.html">Code Of Conduct & Policies</a></li>
                        <li><a href="founder-and-promoters.html">Promoters</a></li>
                        <li><a href="investors.html">Investors Contact</a></li>
                        <li><a href="initial public-offering -as prospectus.html"> Prospectus</a></li>
                        <li><a href="our-group-companies.html">Our Group Companies</a></li>
                        <li><a href="Outcome-of-Board-Meeting.html">Outcome of Board Meeting</a>
                        </li>
                        <li><a href="financial-results.html">Financial Results</a>
                        </li>
                        <li><a href="corporate-governance-report.html"> Corporate Governance Report</a></li>
                        <li><a href="share-capital-audit-report.html"> Reconciliation of Share Capital Audit Report</a>
                        </li>
                        <li><a href="sdd-compliance-certificate.html"> SDD Compliance Certificate</a></li>
                        <li><a href="shareholding-pattern.html"> Shareholding Pattern</a></li>
                        <li><a href="investor-grievance-report.html"> Investor Grievance Report</a></li>
                    </ul>
                </li>
                <li class="menu-item  menu-item-has-children"><a href="#">Quick Link
                   </a>
                   <ul class="sub-menu">
                       <li>
                           <a href="#" onclick='window.open("https://smartodr.in/login/");return false;'>Smart ODR</a></li>
                         <li><a href="sebi.html">Circular Online Dispute Resolution</a></li>
                     </ul>
                    </li>
                <li class="menu-small   menu-item-has-children"><a href="contact-us.php">Contact Us</a>
                    <ul class="sub-menu ">
                    </ul>
                </li>
            </ul>
        </div>
        <!-- End Responsive Menu -->
    </div>
    <div class="top_wrapper   no-transparent">
        <section>
            <div id="whatsapp">
                <a href="https://wa.me/7904209916" target="_blank" id="toggle1" class="wtsapp">
                    <i class="fa fa-whatsapp"></i>
                </a>
            </div>
        </section>
        <!-- .header -->
        <!-- Page Head -->
        <div class="header_page basic background_image"
            style="background-image:url(assets/img/default_header.jpg);background-repeat: no-repeat; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; color:#2f383d; ">
            <div class="container">
                <style>
                    .breadcrumbs_c {
                        color: #fff;
                        font-size: 13px;
                    }

                    h1.title {
                        color: #fff !important;
                        font-size: 50px
                    }
                </style>
                <h1 class="title">Contact Us</h1>
                <div class="breadcrumbss">
                    <ul class="page_parents pull-right">
                        <li class="breadcrumbs_c"><i class="moon-home-3"></i>&nbsp;&nbsp;&nbsp;You are here</li>
                        <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="index.html">Home</a></li>
                        <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="contact-us.php">Contact US</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section id="content" class="composer_content">

            <div id="fws_556c6eb7ccfe5"
                class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el standard_section    "
                style="padding-top: 0px !important; padding-bottom: 0px !important; ">
                <div class="container  dark">
                    <div class="section_clear">
                        <div class="vc_col-sm-8 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="contact_form wpb_content_element">
                                    <div class="row-fluid">
                                        <div class="row-fluid cont">
                                            <div class="span12 " id="frm_add">
                                                <form class="standard-form row-fluid" id="contactform"
                                                    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                                                    method="post" autocomplete="off">
                                                    <input class="span6" name="name" placeholder="Name" type="text"
                                                        id="name" autocomplete="off" required />
                                                    <input class="span6" name="email" placeholder="E-Mail"
                                                        pattern="[^@\s]+@[^@\s]+\.[^@\s]+" type="text" id="email"
                                                        autocomplete="off" required />
                                                    <input class="span6" name="phone" placeholder="Phone" type="number"
                                                        id="phone" autocomplete="off" required
                                                        pattern="[1-9]{1}[0-9]{9}" />
                                                    <textarea class="span12" placeholder="Message" name="message"
                                                        cols="40" rows="7" id="message" autocomplete="off"
                                                        required></textarea>
                                                    <div class="captcha-area wrapper" style="height:65px">
                                                        <div class="captcha-img wrapper ">
                                                            <span class="captcha "></span>
                                                        </div>
                                                        <button class="reload-btn" value="click"
                                                            style="margin-left: 350px;margin-bottom: 30px; margin-top: -65px;"><i
                                                                class="fas fa-redo-alt" onclick='click()'></i></button>
                                                    </div>
                                                    <form action="click" class="input-area" pattern="[A-Z]{6}"
                                                        method="post">
                                                        <input style="margin-top:20px" method="post" name="captchaInput"
                                                            id="captchaInput" type="text" placeholder="Enter captcha"
                                                            maxlength="6" spellcheck="false" required />
                                                        <span class="check-btn btn-system normal default"
                                                            style="margin-left: -131px;margin-top: 30px;">Check</span>
                                                        <div class="status-text">Captcha is not matched. Please try
                                                            again!</div>

                                                        <script type='text/javascript' src="assets/script.js"></script>
                                                        <p class="perspective">
                                                            <button type="submit" name="send"
                                                                style="margin-top:90px !important margin-left:-215px !important;"
                                                                class="btn-system btn-submit normal default">Submit</button>

                                                        </p>
                                                    </form>

                                                </form>
                                                <div id="ajaxresponse"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_col-sm-4 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="wpb_content_element contact_info">
                                    <div class="header">
                                        <h2>Contact Info</h2>
                                    </div>
                                    <div class="content">
                                        <p>130, NSC Bose Road,
                                            <br />Dhanalakshmi Complex,
                                            <br />Sowcarpet, Chennai- 01.
                                            <br /> Email : info@khazanchi.co.in
                                            <br /> Telephone:+91 44 4201 5915
                                        </p>
                                        <div class="social">
                                            <ul>
                                                <li><a href="https://instagram.com/khazanchijewellers?igshid=YmMyMTA2M2Y="
                                                        target="_blank"><i class="icon-instagram"></i></a></li>
                                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                                <li><a href="https://www.facebook.com/khazanchijewellers?mibextid=ZbWKwL"
                                                        target="_blank"><i class="icon-facebook"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fws_556c6eb7cc395"
                class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el standard_section    "
                style="padding-top: 0px !important; padding-bottom: 0px !important; ">
                <div class="container  dark">
                    <div class="section_clear">
                        <div class="vc_col-sm-12 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="wpb_content_element">
                                    <div class="row-fluid row-google-map " style="position:relative; height:350px;">
                                        <div class="overlay" onClick=" style.pointerEvents= &apos; none &apos; "></div>
                                        <iframe class="googlemap " style="height:350px;" frameborder="0" scrolling="no"
                                            marginheight="0" marginwidth="0"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.1478413841073!2d80.27646491482324!3d13.08981529077839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526f56424f76b1%3A0x72beeb71272d1304!2sKhazanchi%20Jewellers%20Private%20Limited!5e0!3m2!1sen!2sin!4v1676540599975!5m2!1sen!2sin"></iframe>
                                        <div class="desc"></div>
                                    </div>
                                </div>
                                <div style='margin-top:-36px' class="divider__ big_shadow"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->
    </div>
    <div class="footer_wrapper">
        <div class="footer_social_bar">
            <div class="container">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="top_footer top_footer1" id="whats_app">
                            <div class="container">
                                <div class="title"><span> </span>
                                </div>
                                <div class="triangle"></div>
                                <ul class='tweet_list tweet_list1' id='tweet_footer'>
                                    <li>
                                        <h4>
                                            <div class="watsapp" style="color: #fff;">
                                                Get In Touch With Our Team</div>
                                        </h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer" class="type_">
            <div class="inner">
                <div class="container">
                    <div class="row-fluid ff">
                        <!-- widget -->
                        <div class="span3">
                            <div id="text-2" class="widget widget_text">
                                <h4 class="widget-title f_abt" style="background-color: none;">About Khazanchi</h4>
                                <div class="textwidget f_abt_cnt">In the year 1989, Mr. Tarachand Mehta (Jain), a visionary
                                    entrepreneur, graced the bustling city of Chennai with his presence, brimming with
                                    the ambition to craft magnificent jewellery that would sing to the soul of every
                                    woman. And thus, was born the legacy of Khazanchi Jewellers.</div>
                            </div>
                        </div>
                        <div class="span3 titles" id="our-links">
                            <div id="text-2" class="widget widget_text">
                                <h4 class="widget-title mobile f_link" style="background-color: none;">Our Links</h4><br><br>
                                <div class="textwidget " style="list-style-type: none; text-decoration: underline;">
                                    
                                        <li class="f_abt"><a href="index.html">Home</a></li>
                                        <li class="f_abt"><a href="about_us_2.html">About Us</a></li>
                                        <li class="f_abt"><a href="product-list.html">Products</a></li>
                                        <li class="f_abt"><a href="contact-us.php">Contact Us</a></li>
                                    
                                   
                                </div>
                            </div>
                        </div>
                        <div class="span3 titles">
                            <div id="text-2" class="widget widget_text">
                                <h4 class="widget-title f_abt" style="background-color: none;">Investors Info</h4><br><br>
                                <div class="textwidget f_abt" style="list-style-type: none; text-decoration: underline;">
                                    <li><a href="annual-reports.html">Annual Reports</a></li>
                                    <li><a href="annual-return.html">Annual Return </a></li>
                                    <li><a href="board-of-directors.html">Board Of Directors</a></li>
                                    <li><a href="founders.html">Founders</a></li>
                                    <li><a href="policies.html">Code Of Conduct & Policies</a></li>
                                    <li><a href="founder-and-promoters.html">Promoters</a></li>
                                    <li><a href="investors.html">Investors Contact</a></li>
                                    <li><a href="initial public-offering -as prospectus.html"> Prospectus</a></li>
                                    <li><a href="our-group-companies.html">Our Group Companies</a></li>
                                    <li><a href="Outcome-of-Board-Meeting.html">Outcome and Intimation</a>
                                    </li>
                                    <li><a href="financial-results.html">Financial Results</a>
                                    </li>
                                    </li>
                                    <li><a href="quaterly-compliance-certificate.html">Quarterly Compliance
                                        </a></li>

                                    <li><a href="postal-notice.html"> Postal Ballot Notice</a></li>
                                    <li><a href="investor-meet.html"> Investor Meet</a></li>
                                    <li><a href="shareholding-pattern.html"> Shareholding Pattern</a></li>
                                    <li><a href="news-letter.html"> NewsPaper Advertisement</a></li>

                                </div>
                            </div>
                        </div>
                        <div class="span3">
                            <div id="widget_contact_info-2" class="widget widget_contact_info">
                                <h4 class="widget-title widget-title1 f_abt" style="background-color: none;">Contact Info</h4>
                                <div id="popular_widget">
                                    <dl>
                                        <dt>
                                            <i class='moon-location f_abt'></i>
                                        </dt>
                                        <dd>
                                            <div class="title  f_abt ">Address:</div>
                                            <span class=" f_abt1"><br>130, NSC Bose Road, <br>Dhanalakshmi Complex Sowcarpet,<br class=" f_abt"> Chennai-
                                                01.</span>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt>
                                            <i class='moon-envelop  f_abt'></i>
                                        </dt>
                                        <dd>
                                            <div class="title">Email:</div>
                                            <a href="mailto:info@khazanchi.co.in">info@khazanchi.co.in</a>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt>
                                            <i class='moon-phone  f_abt'></i>
                                        </dt>
                                        <dd>
                                            <div class="title">Phone:</div>
                                            <a href="tel:444-201-5915">+91 44 4201 5915</a>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="arrow_down f_abt"><i class="icon-angle-up"></i></div>
            </div>
            <div id="copyright">
                <div class="container">
                    <div class="row-fluid">
                        <div class="span12 desc">
                            <div class="span4">
                                <div id="text-3" class="widget widget_text">
                                    <div class="textwidget cpy">COPYRIGHT &copy; 2024 - ALL RIGHTS RESERVED</div>
                                </div>
                            </div>
                            <div class="span4"></div>
                            <div class="span4">
                                <div id="nav_menu-2" class="widget widget_nav_menu">

                                    <div class="megamenu_container dsn" id="phone_nanda_logo">
                                        <span id="copyRight">Designed by</span>
                                        <a target="_blank" href="https://nandalalainfotech.com/">
                                            <img src="assets/image/icons/Asset 19@0 1.png" class="nanda"
                                                style="margin-top: -26px; display: flex; height: 35px; margin-left: 220px;"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #copyright -->
        </footer>
        <!-- #footer -->
    </div>
    <script type='text/javascript' src='assets/js/jquery.hoverex.js'></script>
    <script type='text/javascript' src='assets/js/imagesloaded.pkgd.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.parallax.js'></script>
    <script type='text/javascript' src='assets/js/jquery.cookie.js'></script>
    <script type='text/javascript' src='assets/js/main.js'></script>
    <script type='text/javascript' src='assets/includes/js/comment-reply.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.placeholder.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.livequery.js'></script>
    <script type='text/javascript' src='assets/js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='assets/js/waypoints.min.js'></script>
    <script type='text/javascript' src='assets/js/background-check.min.js'></script>
    <script type='text/javascript' src='assets/js/idangerous.swiper.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.infinitescroll.js'></script>
    <script type='text/javascript' src='assets/plugins/js_composer/assets/js/js_composer_front.js'></script>
    <script type='text/javascript' src='assets/includes/js/jquery/ui/core.min.js'></script>
    <script type='text/javascript' src='assets/includes/js/jquery/ui/widget.min.js'></script>
    <script type='text/javascript' src='assets/includes/js/jquery/ui/accordion.min.js'></script>
    <script type='text/javascript' src="contact.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function () {
            emailjs.init("9JfDxk7Rw4WLI8EcW");
        })();
    </script>
 <script>el.addEvent('click', function(e){
        if(obj.options.onOpen){
            new Event(e).stop();
            if(obj.options.open == i){
                obj.options.open = null;
                obj.options.onClose(this.href, i);
            }else{
                obj.options.open = i;
                obj.options.onOpen(this.href, i);
            }   
        }       
    })</script>

</body>

</html>