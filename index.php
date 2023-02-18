<!DOCTYPE html>
<html  >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.6.11, mobirise.com">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="">
  <meta property="og:image" content="">
  <meta name="twitter:title" content="Home">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-200x60.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/parallax/jarallax.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Karla:200,300,400,500,600,700,800,200i,300i,400i,500i,600i,700i,800i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla:200,300,400,500,600,700,800,200i,300i,400i,500i,600i,700i,800i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
    <style>
        .category {
            transition: transform .3s; /* Animation */
        }
        .category:hover {
            transform: scale(0.9); 
        }
        .dash-container {
            height: 100%;
        }
        .banner-container {
            padding-top: 80px;
        }
        /*slider external css*/
        body {
            background: white;
        }
        #slider{
            width:100%;
            margin:0 auto;
            position:relative;
            overflow:hidden;
            
        }

        .slide{
            width:100%;
            display:none;
            animation-name:fade;
            animation-duration:1s;
        
        }
        img{
            width:100%; 
            }
            @keyframes fade{
            from{opacity:0.5;}
            to{opacity:1;}
        }

        .controls {
            color: black;
            position:absolute;
            top:50%;
            transform:translateY(-50%);
            font-size:1.5em;
            padding:15px 10px;
            border-radius:5px;
        }

        .controls:hover{
            background:white;
            transition:0.3s;
        }

        .controls:active{
            color:grey;
        }

        #left-arrow {
            left:10px;
        }

        #right-arrow {
            right:10px;
        }

        #dots-con{
            text-align:center;
        }
        .dot{
            display:inline-block;
            background:grey;
            padding:8px;
            border-radius:50%;
            margin:10px 5px;
        }

        .active{
            background:crimson;
        }

        @media (max-width:576px){
            #slider{width:100%;
        }
        
        .controls{
            font-size:1em;
        }
        
        #dots-con{
            display:none;
        }
        } 
    </style>

<!-- Navbar -->
<?php include 'navbar.php'; ?>


<!--Slider-->
<div class="dash-container">
    <div class="banner-container">
        <div id="slider">  
            <div class="slide" >
                <img src="assets/images/banner-c.jpg" >
            </div>
            <div class="slide" >
                <img src="assets/images/banner-b.jpg" >
            </div>
            <div class="slide" >
                <img src="assets/images/banner-a.jpg" >
            </div>
            <div class="slide" >
                <img src="assets/images/banner-c.jpg" >
            </div>
            <!--Controlling arrows-->
            <span class="controls" onclick="prevSlide(-1)" id="left-arrow">
                <svg viewBox="0 0 448 512" width="20" title="arrow-left">
                    <path d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z" />
                </svg>
            </span>
            <span class="controls" id="right-arrow" onclick="nextSlide(1)">
                <svg viewBox="0 0 448 512" width="20" title="arrow-right">
                    <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z" />
                </svg>
            </span>
            <div id="dots-con">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div> 
</div>


<section data-bs-version="5.1" class="gallery3 cid-tuTlYFKihu" id="gallery3-1j">
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="item features-image col-6 col-md-4 col-lg-3 col-xl-3">
                <div class="category">
                    <div class="item-wrapper" style="border-radius: 25px;">
                        <div class="item-img">
                            <a href="PLP.php">
                                <img src="assets/images/mbr-561x561.jpg" alt="">
                            </a>
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-7">
                                <strong>Birthday Cake</strong>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item features-image col-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="category">
                        <div class="item-wrapper" style="border-radius: 25px;">
                            <div class="item-img">
                                <a href="PLP.php">
                                    <img src="assets/images/mbr-561x373.jpg" alt="">
                                </a>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7">
                                    <strong>Breads</strong>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="category">
                        <div class="item-wrapper" style="border-radius: 25px;">
                            <div class="item-img">
                                <a href="PLP.php">
                                    <img src="assets/images/mbr-561x382.jpg" alt="">
                                </a>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7">
                                    <strong>Choclate</strong>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="category">
                        <div class="item-wrapper" style="border-radius: 25px;">
                            <div class="item-img">
                                <a href="PLP.php"><img src="assets/images/mbr-6-561x374.jpg" alt="" title="" data-slide-to="3" data-bs-slide-to="3"></a>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7">
                                    <strong>Cookies</strong>
                                </h5>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="item features-image col-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="category">
                        <div class="item-wrapper" style="border-radius: 25px;">
                            <div class="item-img">
                                <a href="PLP.php">
                                    <img src="assets/images/mbr-7-561x374.jpg" alt="" data-slide-to="4" data-bs-slide-to="4">
                                </a>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7">
                                    <strong>Dry Cakes</strong>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="category">
                        <div class="item-wrapper" style="border-radius: 25px;">
                            <div class="item-img">
                                <a href="PLP.php">
                                    <img src="assets/images/mbr-1920x1397.jpg" alt="" data-slide-to="5" data-bs-slide-to="6">
                                </a>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7">
                                    <strong>Dry Fruits</strong>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="category">
                        <div class="item-wrapper" style="border-radius: 25px;">
                            <div class="item-img">
                                <a href="PLP.php">
                                    <img src="assets/images/mbr-1280x1920.jpg" alt="" data-slide-to="6" data-bs-slide-to="7">
                                </a>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7">
                                    <strong>Gift Packs</strong>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="category">
                        <div class="item-wrapper" style="border-radius: 25px;">
                            <div class="item-img">
                                <a href="PLP.php">
                                    <img src="assets/images/mbr-4-1920x1280.jpg" alt="" data-slide-to="7" data-bs-slide-to="8">
                                </a>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7">
                                    <strong>Wedding Cakes</strong>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content4 cid-ttB5miXUX3" id="content4-d">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-md-12 col-lg-10">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                    <strong>Delicious Cakes</strong>
                </h3>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content2 cid-ttyatwolGz" id="content2-2">
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="item features-image col-6 col-md-4 col-lg-3 col-xl-3">
                <div class="item-wrapper" style="border-radius: 25px;">
                    <div class="category">
                        <div class="item-img">
                            <img src="assets/images/mbr-561x431.jpg" alt="" title="">
                        </div>
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-4"><strong>₹599/-</strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Pineapple Cake</strong></h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-4"><a href="PDP.php" class="text-primary"><strong>View Details</strong></a></p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2">
                        <a href="PDP.php" class="btn item-btn btn-primary display-4" target="_blank">
                            <span class="mbrib-plus mbr-iconfont mbr-iconfont-btn"></span>ADD
                        </a>
                    </div>
                </div>
            </div>
            <div class="item features-image col-6 col-md-4 col-lg-3 col-xl-3">
                <div class="item-wrapper" style="border-radius: 25px;">
                    <div class="category">
                        <div class="item-img">
                            <img src="assets/images/mbr-561x372.jpg" alt="" title="">
                        </div>
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-4"><strong>₹699/-</strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Smooth Kitkat Cake</strong></h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-4">
                            <a href="PDP.php" class="text-primary">
                                <strong>View Details</strong>
                            </a>
                            <br>
                        </p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn btn-primary item-btn display-4" target="_blank"><span class="mbrib-plus mbr-iconfont mbr-iconfont-btn"></span>ADD</a></div>
                </div>
            </div>
            <div class="item features-image col-6 col-md-4 col-lg-3 col-xl-3">
                <div class="item-wrapper" style="border-radius: 25px;">
                    <div class="category">
                        <div class="item-img">
                            <img src="assets/images/mbr-561x374.jpg" alt="" title="">
                        </div>
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-4"><strong>₹699/-</strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Red Velvet Cake</strong></h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-4"><a href="PDP.php" class="text-primary"><strong>View Details</strong></a><br></p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2">
                        <a href="PDP.php" class="btn btn-primary item-btn display-4" target="_blank">
                            <span class="mbrib-plus mbr-iconfont mbr-iconfont-btn"></span>ADD
                        </a>
                    </div>
                </div>
            </div>
            <div class="item features-image col-6 col-md-4 col-lg-3 col-xl-3">
                <div class="item-wrapper" style="border-radius: 25px;">
                    <div class="category">
                        <div class="item-img">
                            <img src="assets/images/mbr-1920x1346.jpg" alt="Mobirise Website Builder" title="" data-slide-to="3" data-bs-slide-to="4">
                        </div>
                    </div>    
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-4"><strong>₹499/-</strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Butterscotch Cake</strong></h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-4"><a href="PDP.php" class="text-primary"><strong>View Details</strong></a><br></p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="PDP.php" class="btn btn-primary item-btn display-4" target="_blank"><span class="mbrib-plus mbr-iconfont mbr-iconfont-btn"></span>ADD</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content4 cid-ttB5sC0tk7" id="content4-f">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-md-12 col-lg-10">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                    <strong>Occaions Cakes</strong>
                </h3>
                
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content2 cid-ttyauUGBTw" id="content2-3">
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="item features-image col-6 col-md-4 col-lg-3 col-xl-3">
                <div class="item-wrapper" style="border-radius: 25px;">
                    <div class="category">
                        <div class="item-img">
                            <img src="assets/images/mbr-1-561x374.jpg" alt="" title="">
                        </div>
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-4"><strong>₹699/-</strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Valentines Cake</strong></h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-4"><a href="PDP.php" class="text-primary"><strong>View Details</strong></a><br></p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2">
                        <a href="" class="btn item-btn btn-primary display-4" target="_blank">
                            <span class="mbrib-plus mbr-iconfont mbr-iconfont-btn"></span>ADD
                        </a>
                    </div>
                </div>
            </div>
            <div class="item features-image col-6 col-md-4 col-lg-3 col-xl-3">
                <div class="item-wrapper" style="border-radius: 25px;">
                    <div class="category">
                        <div class="item-img">
                            <img src="assets/images/mbr-2-1920x1280.jpg" alt="" title="">
                        </div>
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-4"><strong>₹299/-</strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Mother's Day Cake</strong></h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-4"><a href="PDP.php" class="text-primary"><strong>View Details</strong></a><br>
                        </p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn btn-primary item-btn display-4" target="_blank"><span class="mbrib-plus mbr-iconfont mbr-iconfont-btn"></span>ADD</a></div>
                </div>
            </div>
            <div class="item features-image col-6 col-md-4 col-lg-3 col-xl-3">
                <div class="item-wrapper" style="border-radius: 25px;">
                    <div class="category">
                        <div class="item-img">
                            <img src="assets/images/mbr-561x374.jpg" alt="" title="">
                        </div>
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-4"><strong>₹999/-</strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Anniversary Cake</strong></h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-4"><a href="PDP.php" class="text-primary"><strong>View Details</strong></a></p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn btn-primary item-btn display-4" target="_blank"><span class="mbrib-plus mbr-iconfont mbr-iconfont-btn"></span>ADD</a></div>
                </div>
            </div>
            <div class="item features-image col-6 col-md-4 col-lg-3 col-xl-3">
                <div class="item-wrapper" style="border-radius: 25px;">
                    <div class="category">
                        <div class="item-img">
                            <img src="assets/images/mbr-561x375.jpg" alt="" title="" data-slide-to="3" data-bs-slide-to="4">
                        </div>
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-4"><strong>₹399/-</strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Wedding Cake</strong></h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-4"><a href="PDP.php" class="text-primary"><strong>View Details</strong></a><br></p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn btn-primary item-btn display-4" target="_blank"><span class="mbrib-plus mbr-iconfont mbr-iconfont-btn"></span>ADD</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="features13 cid-ttEGcrtTWn" id="features14-o">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="mbr-section-title align-center mb-4 mbr-fonts-style display-1"><strong>Services</strong></h3>
            </div>
            <div class="card col-12 col-md-4 col-lg-2 p-3">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont socicon-homes socicon"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-4"><strong>Home Delivery</strong></h4>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-4 col-lg-2">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mbrib-shopping-bag"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-4"><strong>Take Away Only</strong></h4>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-4 col-lg-2">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mbrib-delivery"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-4"><strong>Same Day Delivery</strong></h4>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-4 col-lg-2">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mbrib-alert"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-4"><strong>Pre-Order Necessary</strong></h4>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-4 col-lg-2">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mobi-mbri-hearth mobi-mbri" style="color: rgb(36, 182, 16); fill: rgb(36, 182, 16);"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-4"><strong>Egg Less Cakes</strong></h4>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-4 col-lg-2">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mbrib-home"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-4"><strong>Home Bakers</strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content4 cid-ttAUwjDIwK" id="content4-8">
    

    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-md-12 col-lg-12">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2"><strong>Online Cake Delivery via Cake Daddy's Cake Shop</strong></h3>
                <h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-4">Gratifying cakes are essential for every little celebration, and when you buy them from Cake Daddy’s online cake shop, the moments become memorable. Every foodie soul falls for the freshly baked cakes. The most tempting part about cakes is that we can have them in an umpteen range of droolsome flavours such as Red Velvet, Chocolate, Vanilla, Pineapple, Butterscotch, Black Forest, Vanilla etc. If you are looking for the most reliable bakery to order cake online, Cake Daddy is the right place for you. India’s leading online bakery is offering you the most scrumptious cakes ever. Buy cake online from us and convey your love and hearty wishes to your dear ones. We guarantee freshness in our cakes that are made with top-quality ingredients. Our steadfast doorstep delivery of droolsome cakes will satiate your sugar cravings instantly. Pick your favourite cakes right away and get swift online cake delivery across India without any hassle.</h4>
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="form2 cid-ttAZiMcg7z mbr-parallax-background" id="form2-b">

    

    
    <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(255, 255, 255);"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="08odZR378So4uNOy0D2WKKo4fN9KJ/XI4a/C2hXeZNlNVc/3he3DFKkON7XDgGU9efq+hlIhEuadI0ro4evUhktI4vX0F4LukDKaq+JLuGhJaCKspxv/I6xB2oTxiEji">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            Oops...! some problem!
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 class="mbr-section-title mb-4 align-center mbr-fonts-style display-5">
                                <strong>SUBSCRIBE</strong></h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="mbr-text mbr-fonts-style mb-5 align-center display-4"><strong>Get updates on promotions and offers coupons.</strong></p>
                        </div>
                        <div class="col-lg col-md col-12 form-group mb-3" data-for="email">
                            <input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control" id="name-form2-b">
                        </div>
                        <div class="col-lg col-md col-12 form-group mb-3" data-for="email">
                            <input type="email" name="email" placeholder="Email" data-form-field="email" class="form-control" id="email-form2-b">
                        </div>
                        <div class="mbr-section-btn col-md-auto col"><button type="submit" class="btn btn-primary-outline display-4">SUBMIT</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php';?>

<section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 0rem;">
    <a href="https://mobiri.se/702646" style="flex: 1 1;height: 0rem;position: absolute;width: 100%;z-index: 1;">
        <img alt="" style="height: 0rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
    </a>
    <p style="margin: 0;text-align: center;" class="display-7"></p>
    <a style="z-index:1" href="https://mobirise.com/builder/landing-page-builder.html"></a>
</section>

<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  
<script src="assets/parallax/jarallax.js"></script>  
<script src="assets/web/assets/cookies-alert-plugin/cookies-alert-core.js"></script>  
<script src="assets/web/assets/cookies-alert-plugin/cookies-alert-script.js"></script>  
<script src="assets/smoothscroll/smooth-scroll.js"></script>  
<script src="assets/ytplayer/index.js"></script>  
<script src="assets/dropdown/js/navbar-dropdown.js"></script>  
<script src="assets/theme/js/script.js"></script>  
<script src="assets/formoid/formoid.min.js"></script>  
<script> 
    var slides = document.querySelectorAll(".slide");
    var dots = document.querySelectorAll(".dot");
    var index = 0;


    function prevSlide(n){
    index+=n;
    console.log("prevSlide is called");
    changeSlide();
    }

    function nextSlide(n){
    index+=n;
    changeSlide();
    }

    changeSlide();

    function changeSlide(){
        
    if(index>slides.length-1)
        index=0;
    
    if(index<0)
        index=slides.length-1;
    
    

    for(let i=0;i<slides.length;i++){
    slides[i].style.display = "none";
    
    dots[i].classList.remove("active");
    
    
    }
    
    slides[index].style.display = "block";
    dots[index].classList.add("active");
}
</script>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<input name="cookieData" type="hidden" data-cookie-customDialogSelector='null' data-cookie-colorText='#ffffff' data-cookie-colorBg='rgba(237, 87, 225, 0.99)' data-cookie-textButton='Agree' data-cookie-colorButton='#7815a4' data-cookie-colorLink='#424a4d' data-cookie-underlineLink='true' data-cookie-text="We use cookies to give you the best experience.">
    <input name="animation" type="hidden">
  </body>
</html>