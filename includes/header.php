<?php 
/* Getting the current page name and storing it in a variable. */
include('admin/includes/database/db_controllers.php');
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Supreme HackLord</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/logo3.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/vendor/jquery/jquery.toast.css" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/vendor/tailwind/tailwind.min.css" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <img src="assets/img/logo3.png" alt="Supreme Hacklord" />

            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto <?= ($activePage == 'index') ? 'active':''; ?>"
                            href="#hero">Home</a></li>
                    <li class="dropdown">
                        <a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="company.php"
                                    class='<?= ($activePage == 'company') ? 'active':''; ?>'>Company</a></li>
                            <li><a href="faqs.php" class='<?= ($activePage == 'faqs') ? 'active':''; ?>'>Faqs</a></li>
                            <li><a href="testimonials.php"
                                    class='<?= ($activePage == 'testimonials') ? 'active':''; ?>'>Testimonials</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link scrollto <?= ($activePage == 'services') ? 'active':''; ?>"
                            href="services.php">Services</a>
                    </li>
                    <li class="dropdown">
                        <a href="#"><span>Features</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="terms.php" class=' <?= ($activePage == 'terms') ? 'active':''; ?>'>Terms of
                                    Services</a></li>
                            <li><a href="privacy.php" class='<?= ($activePage == 'privacy') ? 'active':''; ?>'>Privacy
                                    Policy</a></li>
                        </ul>
                    </li>

                    <li><a href="blog.php" class='<?= ($activePage == 'blog') ? 'active':''; ?>'>Blog</a></li>

                    <li>
                        <a class="nav-link scrollto <?= ($activePage == 'contact') ? 'active':''; ?>"
                            href="contact.php">Contact Us</a>
                    </li>
                    <li>
                        <a class="getstarted scrollto <?= ($activePage == 'complaint') ? 'active':''; ?>"
                            href="complaint.php">File Complaint</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->