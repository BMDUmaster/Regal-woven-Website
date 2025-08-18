<?php
   ob_start();
   session_start();
   $page_url = basename(__FILE__);
   ?>
<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Regal Woven Sacks LLP- Leading Packaging Solutions Provider</title>
    <meta name="title" content="Regal Woven Sacks LLP- Leading Packaging Solutions Provider">
    <meta name="description"
        content="Learn about Regal Woven Sacks, a top provider of high-quality packaging solutions. Discover our expertise in POF shrink film and PP woven bags, and our commitment to excellence in every product." />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,500i,700,700i,900" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=6"> -->




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Font Awesome (use only one version to avoid conflicts) -->
    <!-- Recommended: Font Awesome 6.5.0 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css\styles.css" media="all">
    <link rel="stylesheet" href="css/responsives.css" media="all">

    <link rel="stylesheet" href="Newstyle.css" media="all">
    <!-- <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' /> -->

    <?php include 'includes/above-head.php' ?>

<body>

    <!-- perload section -->
    <div id="preloader">
        <div id="preloader-inner"></div>
    </div>
    <!-- header section -->
    <!-- header section -->
    <?php include 'includes/header.php' ?>
<div class="container py-5">
  <div class="row">
    <!-- Logo & Description -->
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="wrap_footer_col">
        <a href="/">
          <img src="images/logo0.jpg" alt="Regal Woven Logo" width="200">
        </a>
        <p class="head-title mt-3" style="text-align: justify;">
          Established on 23 March 2007, Regal Woven Sacks LLP has become a trusted leader in the packaging industry, delivering top-quality POF Shrink Film and BOPP Laminated PP Woven Bags to India's premier companies.
        </p>
      </div>
    </div>

    <!-- Navigation Links -->
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="wrap_footer_col footer-nav">
        <h3 class="footer-title">Quick Links</h3>
        <ul class="footer-list head-title list-unstyled">
          <li>
            <a href="/"><i class="fas fa-arrow-right me-2 text-secondary"></i>Home</a>
          </li>
          <li>
            <a href="/about"><i class="fas fa-arrow-right me-2 text-secondary"></i>About Us</a>
          </li>
          <li>
            <a href="#"><i class="fas fa-arrow-right me-2 text-secondary"></i>Our Business</a>
          </li>
          <li>
            <a href="/contact"><i class="fas fa-arrow-right me-2 text-secondary"></i>Contact Us</a>
          </li>
          <li>
            <a href="/terms-and-conditions"><i class="fas fa-arrow-right me-2 text-secondary"></i>Terms & Conditions</a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Contact Info -->
    <div class="col-lg-4 col-md-12">
      <div class="wrap_footer_col our_address">
        <h3 class="footer-title">Our Address</h3>
        <p class="head-title contact-address">
          <i class="fas fa-map-marker-alt me-2 text-warning"></i>
          H 94-105, UPSIDC M. G. Road Industrial Area, Hapur, Uttar Pradesh 201015
        </p>

        <p class="contact_email head-title">
          <i class="fas fa-phone-alt me-2 text-warning"></i>
          <a href="tel:+919650677106" class="text-white">(+91) 9650677106</a>
        </p>

        <p class="contact_email head-title">
          <i class="fas fa-envelope me-2 text-warning"></i>
          <a href="mailto:marketingregalwoven@gmail.com" class="text-white">marketingregalwoven@gmail.com</a>
        </p>

        <div class="d-flex align-items-center mt-3">
          <p class="mb-0 text-light fw-bold me-2">Follow us:</p>
          <div class="d-flex align-items-center">
            <a href="#" target="_blank" class="text-light me-2">
              <i class="bi bi-linkedin fs-5"></i>
            </a>
            <a href="#" target="_blank" class="text-light me-2">
              <i class="bi bi-facebook fs-5"></i>
            </a>
            <a href="#" target="_blank" class="text-light me-2">
              <i class="bi bi-instagram fs-5"></i>
            </a>
            <a href="#" target="_blank" class="text-light">
              <i class="bi bi-youtube fs-5"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


    <!-- footer -->


    <?php include 'includes/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

    <!-- js library including -->
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- <script src="js/masonary.min.js"></script>
    <script src="js/multipleFilterMasonry.js"></script>
    <script src="js/noframework.waypoints.min.js"></script>
    <script src="js/light-box.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/progressbar.min.js"></script> -->
    <script src="js/index.js"></script>


    <?php include 'includes/above-body.php' ?>


  


</body>


</html>