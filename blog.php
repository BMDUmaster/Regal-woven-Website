<?php
   ob_start();
   session_start();
   $page_url = basename(__FILE__);
   ?>
<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Regal Woven Blogs | Expert Tips on Packaging and Materials</title>
    <meta name="title" content="Contact Us | Regal Woven Sacks- Leading Packaging Solutions">
    <meta name="description"
        content="Regal Woven Sacks Private Limited is the largest supplier and exporter of Polyolefin Shrink Film and BOPP woven bags in India. So contact us or visit our site to know more." />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
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
</head>

<body>
    <!-- perload section -->
    <div id="preloader">
        <div id="preloader-inner"></div>
    </div>
    <?php include 'includes/header.php' ?>
    <!-- breadcrumbs -->
    <section class="mobex-section r-breadcurmbs-2 m-secondary-bg" id="blogs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrap_breadcrumbs_1">
                        <h1 class="breadcurmbs-head">Blog
                        </h1>
                        <ul class="breadcrumbs_content_1 ">
                            <li><a href="/" title="home"> Home </a> /</li>
                            <li><span>Blog</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog section  layout 2-->
    <section class="bg-light">

        <div class="container py-5">
            <div class="row g-4">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="blog-card shadow h-100 d-flex flex-column">
                        <img src="images/eco-friendly-regal-woven.webp" alt="Blog 1" class="blog-image">
                        <div class="blog-body  d-flex flex-column flex-grow-1 ">
                            <h5 class="fw-bold mb-4">Eco-Friendly POF Shrink Film – Sustainable Packaging</h5>
                            <div class="mt-auto mb-3">
                                <a href="blogdetails.php">
                                    <button class="btn read-btn">
                                        Read More <i class="bi bi-arrow-up-right"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-12 col-sm-6 col-md-4">
                    <div class="blog-card shadow h-100 d-flex flex-column">
                        <img src="images\post-2.jpg" alt="Blog 2" class="blog-image">
                        <div class="blog-body  d-flex flex-column flex-grow-1">
                            <h5 class="fw-bold mb-4">Advanced Robotics Revolutionizing Industrial Workflows</h5>
                            <div class="mt-auto mb-3">
                                <a href="blogdetails.php">
                                    <button class="btn read-btn">
                                        Read More <i class="bi bi-arrow-up-right"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="blog-card shadow h-100 d-flex flex-column">
                        <img src="images\post-3.jpg" alt="Blog 3" class="blog-image">
                        <div class="blog-body  d-flex flex-column flex-grow-1">
                            <h5 class="fw-bold mb-4">Top Benefits of the Robotics in Manufacturing</h5>
                            <div class="mt-auto mb-3">
                                <a href="blogdetails.php">
                                    <button class="btn read-btn">
                                        Read More <i class="bi bi-arrow-up-right"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
            <!-- <div class="row g-4 mt-5">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="blog-card shadow h-100 d-flex flex-column">
                        <img src="images\post-4.jpg" alt="Blog 4" class="blog-image">
                        <div class="blog-body  d-flex flex-column flex-grow-1 ">
                            <h5 class="fw-bold mb-4">Leveraging Data Analytics for Smarter Production</h5>
                            <div class="mt-auto mb-3">
                                <a href="blogdetails.php">
                                    <button class="btn read-btn">
                                        Read More <i class="bi bi-arrow-up-right"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="blog-card shadow h-100 d-flex flex-column">
                        <img src="images\post-5.jpg" alt="Blog 5" class="blog-image">
                        <div class="blog-body  d-flex flex-column flex-grow-1">
                            <h5 class="fw-bold mb-4">Reducing Operational Costs Through Automation</h5>
                            <div class="mt-auto mb-3">
                                <a href="blogdetails.php">
                                    <button class="btn read-btn">
                                        Read More <i class="bi bi-arrow-up-right"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="blog-card shadow h-100 d-flex flex-column">
                        <img src="images\post-6.jpg" alt="Blog 6" class="blog-image">
                        <div class="blog-body  d-flex flex-column flex-grow-1">
                            <h5 class="fw-bold mb-4">The Advantages of Customized Manufacturing Solutions</h5>
                            <div class="mt-auto mb-3">
                                <a href="blogdetails.php">
                                    <button class="btn read-btn">
                                        Read More <i class="bi bi-arrow-up-right"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        </div>
    </section>

    <!-- footer -->
    <script src="js/index.js"></script>
    <script src="js/script.js"></script>
    <?php include 'includes/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <?php include 'includes/above-body.php' ?>
    <style>
    .views h4 {
        font-size: 20px;
    }
    </style>
</body>

</html>