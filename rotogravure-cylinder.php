<?php
ob_start();
session_start();
$page_url = basename(__FILE__);
?>


<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leading Polyolefin (POF) shrink film manufacturer in India</title>
    <meta name="title" content="Leading Polyolefin (POF) shrink film manufacturer in India" />
    <meta name="description"
        content=" Looking for Polyolefin (POF) shrink film rolls and pouches? We offer all microns ( 12,15,19,25,30 and 50) in all sizes, including printed rolls. Get in touch today!!" />

    <meta name="keywords"
        content="Pof Shrink Film, Buy Pof Shrink Film, Pof 50 micron, Pof 15 micron, Pof 19 micorn, pof shrink film roll" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
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
    <link rel="stylesheet" href="css/styles.css" media="all">
    <link rel="stylesheet" href="css/responsives.css" media="all">

    <link rel="stylesheet" href="Newstyle.css" media="all">
    <!-- <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' /> -->


    <?php include 'includes/above-head.php' ?>

    <style>
    /* Responsive Styles */
    .img-box img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .text-content {
        padding: 15px;
    }

    .custom-icon-list,
    .pof-feature-list {
        padding-left: 20px;
    }

    .pill-badge {
        display: inline-block;
        margin: 5px;
        padding: 5px 10px;
        background-color: #f0f0f0;
        border-radius: 20px;
        font-size: 14px;
    }

    .icon-list {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .icon-item {
        flex: 1 1 200px;
        padding: 5px;
    }

    .cta-row {
        padding: 20px;
        margin: 20px auto;
        max-width: 1200px;
    }

    .btn-enquirys {
        white-space: nowrap;
    }

    /* Accordion responsive adjustments */
    .accordion-button {
        font-size: 0.9rem;
        padding: 12px 15px;
    }

    /* Responsive layout adjustments */
    @media (max-width: 992px) {
        .row.align-items-center {
            flex-direction: column;
        }

        .text-content {
            padding-right: 0;
            margin-bottom: 20px;
        }

        .cta-row {
            flex-direction: column;
            text-align: center;
        }

        .cta-row h4 {
            margin-bottom: 20px;
        }
    }

    @media (max-width: 768px) {

        .row.px-5,
        .row.align-items-center {
            padding-left: 15px !important;
            padding-right: 15px !important;
        }

        .icon-list {
            flex-direction: column;
        }

        .icon-item {
            flex: 1 1 100%;
        }

        .pill-badge {
            font-size: 12px;
            padding: 4px 8px;
        }
    }

    @media (max-width: 576px) {
        .accordion-button {
            font-size: 0.8rem;
        }

        .section-title {
            font-size: 1.2rem;
        }

        h2.fw-bold {
            font-size: 1.5rem;
        }
    }

    /* Existing styles */
    .fa-circle:before {
        content: "\f111";
        color: #223f9a !important;
    }

    .accordion-button {
        width: 100%;
        background-color: #f7f9fc;
        border: none;
        border-radius: 10px !important;
        font-weight: 600;
        font-size: 1rem;
        color: #333;
        padding: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.06);
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .accordion-button .fa-icon {
        transition: transform 0.3s ease;
        font-size: 1.1rem;
        color: #004080;
    }

    .accordion-button:not(.collapsed) {
        background-color: #004080;
        color: #fff;
    }

    .accordion-button:not(.collapsed) .fa-icon {
        transform: rotate(90deg);
        color: #000;
    }

    .accordion-body {
        background-color: #ffffff;
        padding: 1rem 1.25rem;
        border-radius: 0 0 10px 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        color: #444;
    }

    .accordion-item {
        margin-bottom: 1rem;
        border: none;
        border-radius: 10px;
        overflow: hidden;
    }

    .accordion-items {
        background: #fff;
        border-radius: 12px;
        box-shadow: inset 0 0 8px rgba(39, 1, 229, 0.05) !important;
        margin-bottom: 15px;
        border: none !important;
    }

    .accordion-buttons:focus {
        border: none !important;
    }

    .accordion-buttons:focus-visible {
        border: none !important;
    }

    .accordion-buttons {
        border-radius: 12px;
        font-weight: 600;
        padding: 15px 20px;
        border: none !important;
        background-color: white;
    }

    .accordion-button:not(.collapsed) {
        background-color: #fff;
        color: #000;
        box-shadow: none;
    }

    .accordion-bodys {
        padding: 0 20px 15px 20px;
        color: #555;
        font-size: 0.95rem;
    }

    /* AOS animation delays */
    [data-aos-delay="100"] {
        transition-delay: 100ms;
    }

    [data-aos-delay="200"] {
        transition-delay: 200ms;
    }

    [data-aos-delay="300"] {
        transition-delay: 300ms;
    }
    </style>
</head>

<body>

    <!-- preload section -->
    <div id="preloader">
        <div id="preloader-inner"></div>
    </div>
    <!-- header section -->
    <?php include 'includes/header.php' ?>

    <!-- breadcrumbs -->
    <section class="mobex-section r-breadcurmbs-2 m-secondary-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrap_breadcrumbs_1">
                        <h1 class="breadcurmbs-head" data-aos="fade-up">Rotogravure Cylinder</h1>
                        <ul class="breadcrumbs_content_1" data-aos="fade-up" data-aos-delay="100">
                            <li><a href="index.php" title="home"> Home </a> /</li>
                            <li><span>Rotogravure Cylinder</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 bg-light-gray">
        <div class="container">
            <!-- <div class="row g-4">
                Left Column
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="custom-card w-100 d-flex">
                        <div>
                            <h2 class="fw-bold mb-3 display-5 fw-bold">Non-Cross Linked Woven Bags</h2>
                            <h6 class="text-muted mb-2">Suitable for:</h6>
                            <p data-aos="fade-up" data-aos-delay="100">
                                We proudly stand as one of India's premier manufacturers and exporters of PP Woven Sacks
                                and BOPP Laminated PP Woven Bags. Our expansive manufacturing facility spans an
                                impressive 8000 square meters, a
                                testament to our commitment to excellence and innovation in packaging solutions. With
                                cutting-edge technology and a dedicated workforce, we have the capacity to produce an
                                astounding 150,000 bags per day,
                                ensuring uninterrupted supply and timely delivery to meet our clients' needs. At Regal
                                Woven Sacks, we're not just meeting industry standards; we're setting new benchmarks for
                                quality and efficiency in the
                                packaging sector.
                            </p>
                        </div>
                        <div class="d-flex justify-content-start" data-aos="fade-up" data-aos-delay="200">
                            <button type="button" class="btn btn-enquiry text-end" data-bs-toggle="modal"
                                data-bs-target="#enquiryModal">
                                Send Enquiry <i class="fa-solid fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>

                Right side image
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="gallery\img12.jpg" alt="POF Shrink Film" class="custom-image">
                </div>
            </div> -->

            <!--  Send Enquiry open Modal -->
            <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content rounded-4 shadow">
                        <div class="modal-header text-white" style="background-color:#312f92">
                            <h5 class="modal-title" id="enquiryModalLabel">Send Enquiry</h5>
                            <!-- Custom Close Button (SVG X icon) -->
                            <button type="button" class="btn border-0 bg-transparent p-0 ms-auto"
                                data-bs-dismiss="modal" aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white"
                                    viewBox="0 0 24 24">
                                    <path d="M18 6L6 18M6 6l12 12" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form id="enquiryForm">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter your name"
                                        required />
                                </div>

                                <div class="mb-3">
                                    <label for="contact" class="form-label">Mobile No.<span
                                            class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="contact"
                                        placeholder="Enter contact number" required />
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email<span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Enter email address" required />
                                </div>

                                <div class="mb-3">
                                    <label for="message" class="form-label">Message<span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" id="message" rows="2"
                                        placeholder="Enter your message" required></textarea>
                                </div>

                                <div class="modal-footer justify-content-between">
                                    <button type="submit" class="btn btn-enquiry">Submit Enquiry</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <section class="bg-white">
                <div class="container">
                    <div class="content-section">
                        <h3 class="fw-bold" data-aos="fade-up">Rotogravure Cylinder</h3>
        <p class="section-title" data-aos="fade-up"></p>
                        <div class="d-flex justify-content-between align-items-start gap-3">
    
    <!-- Text Section -->
    <div class="w-50">
        
        <p data-aos="fade-up" data-aos-delay="100" style="padding:30px 20px 0 0">
            Establieshed in the year 2001, M/s Regal Woven Sacks LLP. is a flagship company of
            "Regal Woven", which has emerged as India's pioneer leader in Electro-Mechanical
            engraving, with substantial market share of the flexible packaging industry of
            manufactring rotogravure cylinder / printing cylinder. We have in-house designers
            because design is what sets your product apart from the competition. Our in-house
            team of creative designers assists us in emphasising the importance of aesthetics
            in all of our packaging solutions. Rotogravure cylinder or printing cylinder for
            printing are one of the things that makes packaging more convenient and dynamic.
            At the moment, we have over 10,000 cylinders at Regal. It's a large number, but we
            know how to keep them safe. We have a system in place to ensure that our plant is
            error-free.
        </p>
    </div>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/S9HTsRoSr50?si=WHmqn5uOmlIi5XEI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

</div>

                                </div>
                                <div class="row align-items-center mt-4">
                                <!-- Left Side Text -->
                                <div class="col-lg-8 mb-4 mb-lg-0" data-aos="fade-right">
                                <h3 class="fw-bold">A Global Leader in Rotogravure Cylinders Manufacturer in India</h3>
                                <p data-aos="fade-up" data-aos-delay="100">Singla Engravures LLP is one of the reliable and trustworthy rotogravure cylinders manufacturer in India. With proven track records of more than a decade, we manufacture and supply top-notch cylinders for flexible packaging, vinyl flooring and wallpaper printing. True to our focus on quality and creativity, we have an end-to.
                                Providing Innovative Cylinder Solutions for the Future.</p>
                                <p data-aos="fade-up" data-aos-delay="150"><strong>1.High-Quality Materials: </strong>
                                     Premium materials for durable and reliable cylinders.</p>
                                <p data-aos="fade-up" data-aos-delay="200"><strong>2.Expert Team:</strong> Skilled
                                    professionals
                                    ensuring top standards</p>
                                <p data-aos="fade-up" data-aos-delay="250"><strong>3.Tailored Solutions:</strong>
                                    Customizable options to meet diverse industry needs.</p>
                                <ul class="mb-0 list-unstyled" data-aos="fade-up" data-aos-delay="300">
                                    <li>
                                        <p class="mb-1"><i class="fa fa-circle "
                                                style="font-size:10px; padding-right: 5px;"></i> The Best services of Multiple Industries
</p>
                                    </li>
                                    <li>
                                        <p class="mb-1"><i class="fa fa-circle "
                                                style="font-size:10px; padding-right: 5px;"></i> Personalised Solutions
</p>
                                    </li>
                                    <li>
                                        <p class="mb-1"><i class="fa fa-circle "
                                                style="font-size:10px; padding-right: 5px;"></i> Accurate Testing

                                        </p>
                                    </li>
                                    <li>
                                        <p class="mb-1"><i class="fa fa-circle "
                                                style="font-size:10px; padding-right: 5px;"></i> Environmental warehouse
</p>
                                    </li>
                                    <li>
                                        <p class="mb-0"><i class="fa fa-circle "
                                                style="font-size:10px; padding-right: 5px;"></i> Transparent Pricing
</p>
                                    </li>
                                    <li>
                                        <p class="mb-0"><i class="fa fa-circle "
                                                style="font-size:10px; padding-right: 5px;"></i>  Satisfaction Guarantee 100%

</p>
                                    </li>
                                    <li>
                                        <p class="mb-0"><i class="fa fa-circle "
                                                style="font-size:10px; padding-right: 5px;"></i>   Personalised Solutions


</p>
                                    </li>
                                    <li>
                                        <p class="mb-0"><i class="fa fa-circle "
                                                style="font-size:10px; padding-right: 5px;"></i>   Accurate Testing


</p>
                                    </li>
                                    <li>
                                        <p class="mb-0"><i class="fa fa-circle "
                                                style="font-size:10px; padding-right: 5px;"></i>    Environmental warehouse


</p>
                                    </li>
                                    <li>
                                        <p class="mb-0"><i class="fa fa-circle "
                                                style="font-size:10px; padding-right: 5px;"></i>    Transparent Pricing



</p>
                                    </li>
                                    <li>
                                        <p class="mb-0"><i class="fa fa-circle "
                                                style="font-size:10px; padding-right: 5px;"></i>    Satisfaction Guarantee 100%



</p>
                                    </li>
                                    <li>
                                        <p class="mb-0"><i class="fa fa-circle "
                                                style="font-size:10px; padding-right: 5px;"></i>    Personalised Solutions



</p>
                                    </li>
                                </ul>
                            </div>

                            <!-- Right Side Image -->
                            <div class="col-lg-4 text-center mt-3" data-aos="fade-left">
                                <img src="images\Polyolefin_Shrink_Film.jpg" class="img-fluid rounded grayscale-hover"
                                    alt="Rotogravure Cylinders">
                            </div>
                        </div>

                        <h5 class="fw-bold mt-3" data-aos="fade-up">Partner With Us</h5>
                        <p data-aos="fade-up" data-aos-delay="100">
                            Whether you are an OEM, packaging converter, distributor, or brand owner, Regal Woven, a
                            leading
                            packaging solution provider,
                            offers reliability and flexibility. We ship our products pan-India and export globally with
                            dedicated account managers for B2B customers.
                        </p>

                        <div class="section-title mt-4" data-aos="fade-up">OUR KEY DIFFERENTIATORS</div>

                        <h4 class="fw-bold mb-4" data-aos="fade-up">What makes our Non-Cross Linked POF Shrink Films
                            unique?</h4>

                        <div class="row g-4">
                            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon-card h-100">
                                    <img src="images\Versatile-Use.png.webp" alt="Shrink Icon"
                                        style="width: 100px; height: 90px;">
                                    <h4 class="fw-bold">Versatile Use</h4>
                                    <h6 class="text-muted mb-4">Suitable for a variety of products.</h6>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-card h-100">
                                    <img src="images\High-Clarity-Gloss.png.webp" alt="Shrink Icon"
                                        style="width: 100px; height: 90px;">
                                    <h4 class="fw-bold">High Clarity</h4>
                                    <h6 class="text-muted mb-4">Ensures clear product visibility.</h6>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-card h-100">
                                    <img src="images\Good-Shrink-Ratio.png.webp" alt="Shrink Icon"
                                        style="width: 100px; height: 90px;">
                                    <h4 class="fw-bold">Good Shrink Ratio</h4>
                                    <h6 class="text-muted mb-4">Provides a tight, wrinkle-free wrap.</h6>
                                </div>
                            </div>
                        </div>

                        <div class="section-title mt-4" data-aos="fade-up">MORE FROM THE RANGE</div>
                        <h3 class="fw-bold mb-4" data-aos="fade-up">All your POF Shrink Films requirements at one
                            place...</h3>

                        <div class="row g-4 mb-5">
                            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="product-box h-100 d-flex flex-column justify-content-between">
                                    <div>
                                        <img src="gallery\img12.jpg"
                                            class="product-img" alt="Cross Linked Film">
                                        <h6 class="mt-3 fw-bold">BOPP LAMINATED PINCH BOTTOM BAGS</h6>
                                    </div>
                                    <a href="/regal-woven-website/bopp-pointed-and-laminated-pinch-bottom-bags.php" style="text-decoration: none;">
                                        <div class="know-more">
                                        <span>Know More</span> <i class="bi bi-arrow-right"></i>
                                    </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="product-box h-100 d-flex flex-column justify-content-between">
                                    <div class="div">
                                        <img src="images\bopp-bag-2.png" class="product-img"
                                            alt="Sustainable Film">
                                        <h6 class="mt-3 fw-bold">BOPP LAMINATED BAGS </h6>
                                    </div>
                                    <a href="/regal-woven-website/bopp-laminated-bags.php" style="text-decoration: none;">
                                        <div class="know-more">
                                        <span>Know More</span> <i class="bi bi-arrow-right"></i>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="product-box h-100 d-flex flex-column justify-content-between">
                                    <div>
                                        <img src="images\handle-bag-3.png" class="product-img"
                                            alt="Sustainable Film">
                                        <h6 class="mt-3 fw-bold">BOPP LAMINATED HANDLE BAGS</h6>
                                    </div>
                                    <a href="/regal-woven-website/bopp-laminated-handle-bags.php" style="text-decoration: none;">
                                        <div class="know-more">
                                        <span>Know More</span> <i class="bi bi-arrow-right"></i>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="product-box h-100 d-flex flex-column justify-content-between">
                                    <img src="images\blog1.jpg" class="product-img" alt="Sustainable Film">
                                    <h6 class="mt-3 fw-bold">FLEXO LAMINATED BAGS</h6>
                                    <a href="/regal-woven-website/flexo-laminated-bags.php" style="text-decoration: none;">
                                        <div class="know-more">
                                        <span>Know More</span> <i class="bi bi-arrow-right"></i>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <!-- <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="product-box h-100 d-flex flex-column justify-content-between">
                                    <div>
                                        <img src="images\IMG_0064_RGB.jpg" class="product-img" alt="Sustainable Film">
                                        <h6 class="mt-3 fw-bold">ROTOGRAVURE CYLINDER</h6>
                                    </div>
                                    <a href="" style="text-decoration: none;">
                                        <div class="know-more">
                                        <span>Know More</span> <i class="bi bi-arrow-right"></i>
                                    </div>
                                    </a>
                                </div>
                            </div> -->
                        </div>
                        <div class="section-title mt-4" data-aos="fade-up">FREQUENTLY ASKED QUESTIONS</div>

                        <div class="accordion" id="faqAccordion">
                            <!-- Item 1 -->
                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fa-solid fa-box fa-icon"></i>
                                        Are Non-Cross Linked POF Films Safe For Food Packaging?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes, it is compatible with food-grade, BPA-free, and compliant with
                                        international
                                        food
                                        safety regulations.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="fa-solid fa-cogs fa-icon"></i>
                                        Can These Films Be Used On Automatic Packaging Machines?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes, these films are compatible with both manual and automatic packaging
                                        systems.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <i class="fa-solid fa-leaf fa-icon"></i>
                                        What are the environmental benefits of using these films?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        These films are recyclable, lightweight, and reduce overall packaging waste,
                                        making
                                        them
                                        eco-friendly.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
        <div class="container-fluid overflow-hidden">
            <div class="row">
                <div class=" col-12 px-0">

                    <div class=" d-flex flex-column flex-md-row justify-content-around align-items-center py-5 mt-4 w-100 rounded"
                        style="background-color: #312f92e8;">
                        <h4 class="mb-3 mb-md-0 fw-bold text-white text-center text-md-start" data-aos="fade-right">
                            Curious to explore how our packaging solutions fit your business needs?
                        </h4>
                        <div class="d-flex justify-content-end" data-aos="fade-left">
                            <button type="button" class="btn btn-enquirys text-end" data-bs-toggle="modal"
                                data-bs-target="#enquiryModal">
                                Send Enquiry <i class="fa-solid fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <?php include 'includes/footer.php' ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    // Initialize AOS
    AOS.init({
        duration: 800,
        once: true,
        easing: 'ease-in-out',
        offset: 100
    });

    // Preloader
    window.addEventListener('load', function() {
        document.getElementById('preloader').style.display = 'none';
    });

    document.getElementById('readMoreBtn').onclick = function() {
        var moreContent = document.getElementById('moreContent');
        var readMoreBtn = document.getElementById('readMoreBtn');
        if (moreContent.style.display === 'none') {
            moreContent.style.display = 'block';
            readMoreBtn.textContent = 'Read Less';
        } else {
            moreContent.style.display = 'none';
            readMoreBtn.textContent = 'Read More';
        }
    };
    </script>

    <script src="js/script.js"></script>
    <script src="js/index.js"></script>

    <?php include 'includes/above-body.php' ?>
</body>

</html>