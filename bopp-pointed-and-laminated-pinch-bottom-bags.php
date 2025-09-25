<?php
ob_start();
session_start();
$page_url = basename(__FILE__);
?>


<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <title>REGAL LLP I Manufacturer of BOPP Laminated Pinch Bottom Bags</title>
    <meta name="description" content="Regal LLP manufactures cross-linked POF shrink films with superior strength, high clarity, and advanced packaging performance.">
    <meta name="title" content="Leading Polyolefin (POF) shrink film manufacturer in India" />
    <meta name="description" content=" Looking for Polyolefin (POF) shrink film rolls and pouches? We offer all microns ( 12,15,19,25,30 and 50) in all sizes, including printed rolls. Get in touch today!!
" />

    <meta name="keywords"
        content="Pof Shrink Film, Buy Pof Shrink Film, Pof 50 micron, Pof 15 micron, Pof 19 micorn, pof shrink film roll" />

        <link rel="canonical" href="https://www.regalwoven.com/" />
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
    <link rel="stylesheet" href="css\styles.css" media="all">
    <link rel="stylesheet" href="css/responsives.css" media="all">

    <link rel="stylesheet" href="Newstyle.css" media="all">
    <!-- <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' /> -->
<link rel="shortcut icon" href="images/logo1 favicon.png" type="image/x-icon">
    <style>
        @media (max-width: 768px) {
  /* Full width fix */
  .container, .container-fluid {
    max-width: 100% !important;
    
  }

  /* Remove row negative margins */
  .row {
    /* margin-right: 0 !important;
    margin-left: 0 !important; */
  }

  /* Prevent horizontal scroll */
  html, body {
    overflow-x: hidden !important;
  }

  /* Responsive iframe */
  .ratio iframe {
    width: 100% !important;
    height: 100% !important;
  }
}

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
    </style>


    <?php include 'includes/above-head.php' ?>
</head>

<body>

    <!-- perload section -->
    <div id="preloader">
        <div id="preloader-inner"></div>
    </div>
    <!-- header section -->
    <?php include 'includes/header.php' ?>

    <!-- breadcrumbs -->
    <section class="mobex-section r-breadcurmbs-2 m-secondary-bg" data-aos="fade-down" data-aos-duration="800">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrap_breadcrumbs_1">
                        <h1 class="breadcurmbs-head">BOPP Laminated Pinch Bottom Bags
                        </h1>
                        <ul class="breadcrumbs_content_1 ">
                            <li><a href="index.php" title="home"> Home </a> /</li>
                            <li><span>BOPP Laminated Pinch Bottom Bags</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 bg-light-gray">
        <div class="container p-0">
            <div class="row g-4 ">
                <!-- Left Column -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                    <div class="custom-card w-100 d-flex">
                        <div class="">
                            <!-- <h2 class="fw-bold mb-2 display-5 fw-bold">BOPP Laminated Pinch Bottom Bags</h2> -->
                            <!-- <h6 class="text-muted mb-2">Suitable for:</h6> -->
                            <p class= "para px-md-0 px-3">
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
                        <div class=" d-flex justify-content-start pl-3 mb-3">
                            <button type="button" class="btn btn-enquiry text-end" data-bs-toggle="modal"
                                data-bs-target="#enquiryModal" data-aos="zoom-in" data-aos-delay="300">
                                Send Enquiry <i class="fa-solid fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Right side image -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
                    <img src="gallery\img12.jpg" alt="POF Shrink Film" class="custom-image px-md-0 px-3">
                </div>
            </div>
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
                                    <!-- <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button> -->
                                    <button type="submit" class="btn btn-enquiry">Submit Enquiry</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <section class=" bg-white ">
                <div class="container p-0">
                    
                        <div class="">   
                            <div>
                                <h4 class="mb-4 px-md-0 px-3 mt-md-0 mt-3" data-aos="fade-up" data-aos-duration="700"><strong> BOPP Laminated Pinch Bottom Bags</strong></h4>
                                <P data-aos="fade-up" data-aos-duration="800" class="px-md-0 px-3">We are of the few manufactureres of Pinch Bottom Bags in
                                    India. A new concept Introduced in indian market, Pinch Bottom Bags are made of BOPP laminated PP Woven Fade Material.</P>
                            </div>
                            <div>
                                <div class="d-flex justify-content-center">
                                   <iframe width="800" height="500" src="gallery/Wovenbags.mp4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> 
                                </div> 
                            </div>
                        </div>

                    <div class=" ">
                        <div class="tab-cards" data-aos="fade-up" data-aos-duration="900">
                            <!-- Tab Headers -->
                            <ul class="nav nav-tabs tab-header justify-content-start flex-wrap p-2" id="myTab"
                                role="tablist">
                                <li class="col-md-4 col-12 nav-item pr-1" role="presentation">
                                    <button class="nav-link active py-3" id="benefits-tab" data-bs-toggle="tab"
                                        data-bs-target="#benefits" type="button" role="tab">
                                        Benefits & Details
                                    </button>
                                </li>
                                <li class="col-md-4 col-12 nav-item pr-1" role="presentation">
                                    <button class="nav-link py-3" id="types-tab" data-bs-toggle="tab"
                                        data-bs-target="#types" type="button" role="tab">
                                        Speciality
                                    </button>
                                </li>
                                <li class="col-md-4 col-12 nav-item " role="presentation">
                                    <button class="nav-link py-3" id="speciality-tab" data-bs-toggle="tab"
                                        data-bs-target="#speciality" type="button" role="tab">
                                         SPECIALIZATION
                                    </button>
                                </li>
                            </ul>

                            <!-- Tab Content -->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="benefits" role="tabpanel">
                                    <!-- <h3>Benefits:</h3> -->
                                    <ul class="benefit-list">
                                        <li><strong>1. High Strength & Durability</strong></li>
                                        <li>Made from woven PP fabric for tear resistance, strength, and reusability.
                                        </li>
                                        <li><strong>2. Premium Look </strong></li>
                                        <li> BOPP lamination allows high-quality photographic printing design , making it ideal for branded packaging.</li>
                                        <li> <strong>3. Moisture & Dust Protection </strong></li>
                                        <li> Lamination creates a strong barrier against moisture, helping to extend shelf life.</li>
                                        <li> <strong>4. Pinch Bottom Advantage</strong></li>
                                        <li> Offers strong, stable sealing that prevents leakage and maintains a neat, block-like shape—ideal for stacking.</li>
                                        <li><strong> 5. Eco-Friendly & Recyclable </strong></li>
                                        <li>Reusable and recyclable, making it a sustainable packaging choice.</li>
                                        <li><strong> 6.Customizable </strong></li>
                                        <li>Available in many sizes, colors, gusset types, and print designs.</li>
                                        <li><strong>7. Enhanced Shelf Appeal </strong></li>
                                        <li>The pointed bottom gives a distinctive look, helping your product stand out in retail environments.</li>
                                    </ul>
                                </div>

                                <div class="tab-pane fade" id="types" role="tabpanel">
                                    <!-- <h3>Speciality by Regal Woven Sacks LLP:</h3> -->
                                    <div>
                                            <h4 class="px-md-0 px-3"> Speciality by Regal Woven Sacks LLP:</h4>
                                        <p class="px-md-0 px-3"> 
                                            At Regal Woven Sacks LLP, we deliver more than just bags—we deliver confidence in packaging:
                                            State-of-the-Art Machinery: We utilize high-speed BOPP lamination lines, rotogravure printing presses, and automated sealing machines for precise and consistent quality.
                                            Premium Raw Materials: Sourced from top global suppliers like RELIANCE and DOW, ensuring unmatched strength and finish.
                                            In-House Design & R&D Team: We help our clients design custom artwork and optimize packaging structure to suit product needs.
                                            Flexible MOQ and Fast Turnaround: Whether you're a startup or an established brand, we offer scalable solutions with short lead times.
                                            Strict Quality Control: Every bag is tested for seal strength, print quality, lamination bond, and load-bearing capacity before dispatch.
                                            Sustainability Driven: We recycle 100% of our production waste and follow eco-conscious manufacturing practices.</p>
                                        </div>
                                </div>

                                <div class="tab-pane fade" id="speciality" role="tabpanel">
                                    <!-- <h3>Specialization</h3> -->
                                    <div class="specialization-container">
                                        

                                        <div class="spec-item">
                                            <div class="spec-name">Front width</div>
                                            <div class="spec-value">165 mm – 480 mm</div>
                                        </div>

                                        <div class="spec-item">
                                            <div class="spec-name">Gusset width</div>
                                            <div class="spec-value">50 mm – 200 mm</div>
                                        </div>

                                        <div class="spec-item">
                                            <div class="spec-name">Bag length</div>
                                            <div class="spec-value">500 mm – 1070 mm</div>
                                        </div>

                                        <div class="spec-item">
                                            <div class="spec-name">Fabric colour</div>
                                            <div class="spec-value">As per customer requirement</div>
                                        </div>

                                        <div class="spec-item">
                                            <div class="spec-name">Fabric denier</div>
                                            <div class="spec-value">760 – 1065</div>
                                        </div>

                                        <div class="spec-item">
                                            <div class="spec-name">BOPP Material</div>
                                            <div class="spec-value">Gloss, Gloss Metalized, Gloss Holographic, Matt,
                                                Matt Metalized, Matt Gloss Combo and High COF Gloss/Matt</div>
                                        </div>

                                        <div class="spec-item">
                                            <div class="spec-name">BOPP Micron</div>
                                            <div class="spec-value">18 µ</div>
                                        </div>

                                        <div class="spec-item">
                                            <div class="spec-name">Extrusion Coating</div>
                                            <div class="spec-value">Full</div>
                                        </div>

                                        <div class="spec-item">
                                            <div class="spec-name">EZ Open With Pinch Seal</div>
                                            <div class="spec-value">Yes</div>
                                        </div>

                                        <div class="spec-item">
                                            <div class="spec-name">EZ Open Label Width 100</div>
                                            <div class="spec-value">100 – 460</div>
                                        </div>

                                        <div class="spec-item">
                                            <div class="spec-name">EZ Open Label Length</div>
                                            <div class="spec-value">40 – 80</div>
                                        </div>

                                        <div class="spec-item">
                                            <div class="spec-name">Open Mouth Type</div>
                                            <div class="spec-value">Pinch Cut, Flush Cut</div>
                                        </div>

                                        <div class="spec-item">
                                            <div class="spec-name">Type Of Packing</div>
                                            <div class="spec-value">Bales / Pallet</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-title mt-4" data-aos="fade-up" data-aos-duration="600">FREQUENTLY ASKED
                        QUESTIONS</div>

                    <div class="accordion" id="faqAccordion" data-aos="fade-up" data-aos-duration="700">
                        
                        <!-- Item 1 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="fa-solid fa-box fa-icon"></i>
                        What are BOPP Laminated Pinch Bottom Bags used for?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        These bags are widely used in industries like flour, rice, sugar, pet food, fertilizers, and
                        chemicals. The pinch bottom closure makes them leak-proof, easy to stack, and ideal for retail
                        as well as bulk packaging.
                        </div>
                    </div>
                    </div>

                        <!-- Item 2 -->
                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="fa-solid fa-cogs fa-icon"></i>
                            What makes the Pinch Bottom design special?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                            The pinch bottom design ensures strong sealing, prevents leakage, and provides a neat
                            block-shaped finish. This makes the bags easier to handle, transport, and display while
                            maintaining product freshness and safety.
                            </div>
                        </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="fa-solid fa-leaf fa-icon"></i>
                            Are BOPP Pinch Bottom Bags eco-friendly?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                            Yes, these bags are recyclable and manufactured using eco-conscious processes. Their durability
                            and reusability also reduce packaging waste, making them a sustainable alternative to
                            traditional packaging.
                            </div>
                        </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <i class="fa-solid fa-paint-brush fa-icon"></i>
                            Can these bags be customized for branding?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                            Yes, BOPP Pinch Bottom Bags can be customized with high-quality multi-color printing, glossy or
                            matte finishes, transparent windows, and different sizes. This makes them perfect for strong
                            brand visibility in competitive markets.
                            </div>
                        </div>
                        </div>

                        <!-- Item 5 -->
                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <i class="fa-solid fa-industry fa-icon"></i>
                            Why choose Regal Woven Sacks LLP for Pinch Bottom Bags?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                            Regal offers advanced in-house manufacturing, premium raw materials, strict quality checks,
                            and state-of-the-art printing technology. Our BOPP Pinch Bottom Bags are durable, attractive,
                            and tailored to meet international packaging standards.
                            </div>
                        </div>
                        </div>

                    </div>
                </div>

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


    

    <?php include 'includes/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });
    </script>
    <script src="js/script.js"></script>
    <script src="js/index.js"></script>
    <?php include 'includes/above-body.php' ?>
</body>

</html>