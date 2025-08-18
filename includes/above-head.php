<meta charset="utf-8">

<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,500i,700,700i,900" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- <link rel="stylesheet" href="css/bootstrap1.min.css" media="all">
<link rel="stylesheet" href="css/all.min.css" media="all">
<link rel="stylesheet" href="css/owl.carousel.min.css" media="all">
<link rel="stylesheet" href="css/light-box.css" media="all">
<link rel="stylesheet" href="css/tp-animation.css" media="all">
<link rel="stylesheet" href="css/styles.css" media="all">
<link rel="stylesheet" href="css/responsive.css" media="all">

<link rel="canonical" href="https://www.regalwoven.com/" /> -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JMJM904CL4"></script>

<script type="application/ld+json">
{
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "RegalWoven",
        "url": "https://www.regalwoven.com/",
        "logo": "https://www.regalwoven.com/images/logo1.png"
    }
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "RegalWoven",
    "image": "https://www.regalwoven.com/images/logo1.png",
    "telephone": "9650677106",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "7/9, Sahibabad Industrial Area Site 4",
        "addressLocality": "Ghaziabad",
        "postalCode": "201010",
        "addressCountry": "IN"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.6539942,
        "longitude": 77.32324229999999
    }
}
</script>


<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-JMJM904CL4');
</script>
<meta name="google-site-verification" content="sXiHUDi8NfSviVD3IRfUpHAseEJQE75_vsdWLJBPfZ4"   />
<?php 
	if(isset($_REQUEST['msg'])){ 
		echo "<script type=\"text/javascript\">";   
		$msg = $_REQUEST['msg']; 
		if($msg == 'sent'){ 
			echo "alert('Thanks! We have Recieved your Query');"; 
		} else if($msg == 'error'){ 
			echo "alert('ERROR!!! Please try again...');";  
		} else if($msg == 'invalid_code'){
			echo "alert('Incorrect Captcha Value Entered...');";  
		}
		echo "</script>"; 
	}