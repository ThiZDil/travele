<?php
session_start();
?>
<!doctype html>
<html lang="en">
   <head>
      
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- favicon -->
      <link rel="icon" type="image/png" href="assets/images/favicon.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/fontawesome/css/all.min.css">
      <!-- jquery-ui css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/jquery-ui/jquery-ui.min.css">
      <!-- modal video css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/modal-video/modal-video.min.css">
      <!-- light box css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/lightbox/dist/css/lightbox.min.css">
      <!-- slick slider css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick.css">
      <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick-theme.css">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <title>GoGlobe | Travel & Tour Planning  </title>
   </head>
   <body class="home">
      
      <div id="siteLoader" class="site-loader">
         <div class="preloader-content">
            <img src="assets/images/loader1.gif" alt="">
         </div>
      </div>
      <div id="page" class="full-page">
  
      <?php include 'logged_page_Header.php'; ?>
         
         <main id="content" class="site-main">
            <!-- Home slider html start -->
            <section class="home-slider-section">
               <div class="home-slider" >
                  <div class="home-banner-items">
                     <div class="banner-inner-wrap" style="background-image: url(assets/images/slider-banner-1.jpg);"></div>
                        <div class="banner-content-wrap">
                           <div class="container">
                              <div class="banner-content text-center">
                                 <h2 class="banner-title">TRAVELLING AROUND THE WORLD</h2>
                                 <p>Embark on a captivating journey to the world's hidden gems, where breathtaking landscapes, vibrant cultures, and unforgettable adventures await. Discover the extraordinary as you wander off the beaten path and create your own extraordinary travel story. Get ready to redefine wanderlust and unlock the essence of wanderlust! </p>
                                 <a href="single-page.php" class="button-primary">CONTINUE READING</a>
                              </div>
                           </div>
                        </div>
                     <div class="overlay"></div>
                  </div>
                  <div class="home-banner-items">
                     <div class="banner-inner-wrap" style="background-image: url(assets/images/slider-banner-2.jpg);"></div>
                        <div class="banner-content-wrap">
                           <div class="container">
                              <div class="banner-content text-center">
                                 <h2 class="banner-title">EXPERIENCE THE NATURE'S BEAUTY</h2>
                                 <p>Taciti quasi, sagittis excepteur hymenaeos, id temporibus hic proident ullam, eaque donec delectus tempor consectetur nunc, purus congue? Rem volutpat sodales! Mollit. Minus exercitationem wisi.</p>
                                 <a href="single-page.php" class="button-primary">CONTINUE READING</a>
                              </div>
                           </div>
                        </div>
                     <div class="overlay"></div>
                  </div>
               </div>
            </section>
           
            <!-- slider html start -->
            <!-- Home search field html start -->
            <!--
            <div class="trip-search-section shape-search-section">
               <div class="slider-shape"></div>
               <div class="container">
                  <div class="trip-search-inner white-bg d-flex">
                     <div class="input-group">
                        <label> Search Destination* </label>
                        <input type="text" name="s" placeholder="Enter Destination">
                     </div>
                     <div class="input-group">
                        <label> Pax Number* </label>
                        <input type="text" name="s" placeholder="No.of People">
                     </div>
                     <div class="input-group width-col-3">
                        <label> Checkin Date* </label>
                        <i class="far fa-calendar"></i>
                        <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
                     </div>
                     <div class="input-group width-col-3">
                        <label> Checkout Date* </label>
                        <i class="far fa-calendar"></i>
                        <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
                     </div>
                     <div class="input-group width-col-3">
                        <label class="screen-reader-text"> Search </label>
                        <input type="submit" name="travel-search" value="INQUIRE NOW">
                     </div>
                  </div>
               </div>
            </div>
            -->
            <!-- search search field html end -->
            
            <section class="destination-section">
               <div class="container">
                  <div class="section-heading">
                     <div class="row align-items-end">
                        <div class="col-lg-7">
                           <h5 class="dash-style">POPULAR DESTINATION</h5>
                           <h2>TOP NOTCH DESTINATION</h2>
                        </div>
                        <div class="col-lg-5">
                           <div class="section-disc" style="padding-top: 10px;">
                              "Experience the allure of our handpicked popular destinations, where every corner exudes charm and captivates your senses. Immerse yourself in the essence of wanderlust and indulge in extraordinary experiences that surpass all expectations. Discover the epitome of travel excellence at our top-notch destinations, where your dreams come alive and unforgettable memories are made."
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="destination-inner destination-three-column">
                     <div class="row">
                        
                        <div class="col-lg-7">
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="desti-item overlay-desti-item">
                                    <figure class="desti-image">
                                       <img src="assets/images/img1.jpg" alt="">
                                    </figure>
                                    <div class="meta-cat bg-meta-cat">
                                       <a href="single-destination.php">Galle</a>
                                    </div>
                                    <div class="desti-content">
                                       <h3>
                                          <a href="single-destination.php">Galle Fort</a>
                                       </h3>
                                       <div class="rating-start" title="Rated 5 out of 4">
                                          <span style="width: 53%"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="desti-item overlay-desti-item">
                                    <figure class="desti-image">
                                       <img src="assets/images/img2.jpg" alt="">
                                    </figure>
                                    <div class="meta-cat bg-meta-cat">
                                       <a href="single-destination.php">Mathara</a>
                                    </div>
                                    <div class="desti-content">
                                       <h3>
                                          <a href="single-destination.php">Mirissa Beach</a>
                                       </h3>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 100%"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-5">
                           <div class="row">
                              <div class="col-md-6 col-xl-12">
                                 <div class="desti-item overlay-desti-item">
                                    <figure class="desti-image">
                                       <img src="assets/images/img3.jpg" alt="">
                                    </figure>
                                    <div class="meta-cat bg-meta-cat">
                                       <a href="#">Arugambey</a>
                                    </div>
                                    <div class="desti-content">
                                       <h3>
                                          <a href="#">Kumana National park</a>
                                       </h3>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 100%"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 col-xl-12">
                                 <div class="desti-item overlay-desti-item">
                                    <figure class="desti-image">
                                       <img src="assets/images/img4.jpg" alt="">
                                    </figure>
                                    <div class="meta-cat bg-meta-cat">
                                       <a href="#">Kandy</a>
                                    </div>
                                    <div class="desti-content">
                                       <h3>
                                          <a href="#">Kunckles Mountain Range</a>
                                       </h3>
                                       <div class="rating-start" title="Rated 5 out of 4">
                                          <span style="width: 60%"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="btn-wrap text-center">
                        <a href="destination.php" class="button-primary">MORE DESTINATION</a>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Home packages section html start -->
            <section class="package-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">EXPLORE GREAT PLACES</h5>
                           <h2>POPULAR PACKAGES</h2>
                           <p>"Unleash your wanderlust and explore the world's most captivating destinations. From awe-inspiring landscapes to cultural marvels, embark on a journey of a lifetime as you delve into great places that will leave you breathless. Choose from our curated popular packages and unlock the gateway to extraordinary experiences that will redefine your travel aspirations."</p>
                        </div>
                     </div>
                  </div>
                  <div class="package-inner">
                     <div class="row">
                        
                    <?php include 'package_section.php'; ?>
                     </div>
                     
                  </div>
               </div>
            </section>
            <!-- packages html end -->
            <!-- Home callback section html start -->
            <section class="callback-section">
               <div class="container">
                  <div class="row no-gutters align-items-center">
                     <div class="col-lg-5">
                        <div class="callback-img" style="background-image: url(assets/images/img8.jpg);">
                           <div class="video-button">
                              <video width="400" height="300" controls>
                                 <source src="assets/video/slvideo.mp4" type="video/mp4">
                                 Your browser does not support the video tag.
                               </video>
                               
                                 <i class="fas fa-play"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-7">
                        <div class="callback-inner">
                           <div class="section-heading section-heading-white">
                              <h5 class="dash-style">CALLBACK FOR MORE</h5>
                              <h2>GO TRAVEL. DISCOVER. REMEMBER US!!</h2>
                              <p>"Ready for the ultimate adventure? Go travel, explore the world, and make memories that will last a lifetime. Discover breathtaking landscapes, vibrant cultures, and hidden treasures with us. From thrilling escapades to serene getaways, we've got it all. Get ready to embark on a journey you'll never forget. Remember us as your trusted companion in creating unforgettable travel experiences."</p>
                           </div>
                           <div class="callback-counter-wrap">
                              <div class="counter-item">
                                 <div class="counter-icon">
                                   <img src="assets/images/icon1.png" alt="">
                                 </div>
                                 <div class="counter-content">
                                    <span class="counter-no">
                                       <span class="counter">500</span>K+
                                    </span>
                                    <span class="counter-text">
                                       Satisfied Clients
                                    </span>
                                 </div>
                              </div>
                              <div class="counter-item">
                                 <div class="counter-icon">
                                   <img src="assets/images/icon2.png" alt="">
                                 </div>
                                 <div class="counter-content">
                                    <span class="counter-no">
                                       <span class="counter">250</span>K+
                                    </span>
                                    <span class="counter-text">
                                       Satisfied Clients
                                    </span>
                                 </div>
                              </div>
                              <div class="counter-item">
                                 <div class="counter-icon">
                                   <img src="assets/images/icon3.png" alt="">
                                 </div>
                                 <div class="counter-content">
                                    <span class="counter-no">
                                       <span class="counter">15</span>K+
                                    </span>
                                    <span class="counter-text">
                                       Satisfied Clients
                                    </span>
                                 </div>
                              </div>
                              <div class="counter-item">
                                 <div class="counter-icon">
                                   <img src="assets/images/icon4.png" alt="">
                                 </div>
                                 <div class="counter-content">
                                    <span class="counter-no">
                                       <span class="counter">10</span>K+
                                    </span>
                                    <span class="counter-text">
                                       Satisfied Clients
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <div class="support-area">
                              <div class="support-icon">
                                 <img src="assets/images/icon5.png" alt="">
                              </div>
                              <div class="support-content">
                                 <h4>Our 24/7 Emergency Phone Services</h4>
                                 <h3>
                                    <a href="#">Call: +94-76-130-2240</a>
                                 </h3>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- callback html end -->
            <!-- Home activity section html start -->
            <section class="activity-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">TRAVEL BY ACTIVITY</h5>
                           <h2>ADVENTURE & ACTIVITY</h2>
                           <p>"Dive into exhilarating adventures and immersive activities as you travel with us. Unleash your inner explorer and experience the thrill of a lifetime. From heart-pounding adrenaline rushes to soul-soothing escapades, we curate unforgettable journeys tailored to your adventurous spirit. Get ready to embark on a voyage of discovery where every moment is filled with excitement. Adventure awaits, let's make it happen!"</p>
                        </div>
                     </div>
                  </div>
                  <div class="activity-inner row">
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon6.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Adventure</a>
                              </h4>
                              <p>15 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon10.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Trekking</a>
                              </h4>
                              <p>12 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon9.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Camp Fire</a>
                              </h4>
                              <p>7 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon8.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Off Road</a>
                              </h4>
                              <p>15 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon7.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Camping</a>
                              </h4>
                              <p>13 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon11.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Exploring</a>
                              </h4>
                              <p>25 Destination</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- activity html end -->
            <!-- Home special section html start -->
            <section class="special-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">TRAVEL OFFER & DISCOUNT</h5>
                           <h2>SPECIAL TRAVEL OFFER</h2>
                           <p>"Uncover extraordinary travel offers and exclusive discounts that will ignite your wanderlust. Our special travel offers are designed to make your dream vacation a reality, without breaking the bank. Whether you seek a relaxing retreat or an adrenaline-fueled adventure, our curated packages ensure unforgettable experiences at unbeatable prices. Don't miss out on these limited-time offers—book now and embark on the journey of a lifetime, while saving big!"</p>
                        </div>
                     </div>
                  </div>
                  <div class="special-inner">
                     <div class="row">
                        <div class="col-md-6 col-lg-4">
                           <div class="special-item">
                              <figure class="special-img">
                                 <img src="assets/images/img9.jpg" alt="">
                              </figure>
                              <div class="badge-dis">
                                 <span>
                                    <strong>20%</strong>
                                    off
                                 </span>
                              </div>
                              <div class="special-content">
                                 <div class="meta-cat">
                                    <a href="hello.html">Galle</a>
                                 </div>
                                 <h3>
                                    <a href="package-detail.html">Experience the natural beauty of glacier</a>
                                 </h3>
                                 <div class="package-price">
                                    Price:
                                    <del>$1500</del>
                                    <ins>$1200</ins>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="special-item">
                              <figure class="special-img">
                                 <img src="assets/images/img10.jpg" alt="">
                              </figure>
                              <div class="badge-dis">
                                 <span>
                                    <strong>15%</strong>
                                    off
                                 </span>
                              </div>
                              <div class="special-content">
                                 <div class="meta-cat">
                                    <a href="hello.html">Kandy</a>
                                 </div>
                                 <h3>
                                    <a href="package-detail.html">Trekking to the mountain camp site</a>
                                 </h3>
                                 <div class="package-price">
                                    Price:
                                    <del>$1300</del>
                                    <ins>$1105</ins>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="special-item">
                              <figure class="special-img">
                                 <img src="assets/images/img11.jpg" alt="">
                              </figure>
                              <div class="badge-dis">
                                 <span>
                                    <strong>15%</strong>
                                    off
                                 </span>
                              </div>
                              <div class="special-content">
                                 <div class="meta-cat">
                                    <a href="hello.html">Mathara</a>
                                 </div>
                                 <h3>
                                    <a href="package-detail.html">Sunset view of beautiful lakeside city</a>
                                 </h3>
                                 <div class="package-price">
                                    Price:
                                    <del>$1800</del>
                                    <ins>$1476</ins>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

               <div class="btn-wrap text-center">
                        <a href="package-offer.php" class="button-primary">VIEW ALL OFFERS</a>
                     </div>
            </section>
            <!-- special html end -->
            <!-- Home special section html start -->
            <section class="best-section">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-5">
                        <div class="section-heading">
                           <h5 class="dash-style">OUR TOUR GALLERY</h5>
                           <h2>BEST TRAVELER'S SHARED PHOTOS</h2>
                           <p>"Step into our captivating tour gallery and witness the world through the lens of fellow travelers. Immerse yourself in a visual feast of breathtaking landscapes, vibrant cultures, and unforgettable moments captured by the best. These shared photos embody the essence of wanderlust, inspiring your own travel aspirations. Get ready to embark on a journey of awe and wonder as you explore our curated collection of the world's most captivating destinations."</p>
                        </div>
                        <figure class="gallery-img">
                           <img src="assets/images/img12.jpg" alt="">
                        </figure>
                     </div>
                     <div class="col-lg-7">
                        <div class="row">
                           <div class="col-sm-6">
                              <figure class="gallery-img">
                                 <img src="assets/images/img13.jpg" alt="">
                              </figure>
                           </div>
                           <div class="col-sm-6">
                              <figure class="gallery-img">
                                 <img src="assets/images/img14.jpg" alt="">
                              </figure>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12">
                              <figure class="gallery-img">
                                 <img src="assets/images/img15.jpg" alt="">
                              </figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- best html end -->
            <!-- Home client section html start -->
            <div class="client-section">
               <div class="container">
                  <div class="client-wrap client-slider secondary-bg">
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo1.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo2.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo3.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo4.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo5.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo2.png" alt="">
                        </figure>
                     </div>
                  </div>
               </div>
            </div>
            <!-- client html end -->
            <!-- Home subscribe section html start -->
            <section class="subscribe-section" style="background-image: url(assets/images/img16.jpg);">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-7">
                        <div class="section-heading section-heading-white">
                           <h5 class="dash-style">HOLIDAY PACKAGE OFFER</h5>
                           <h2>HOLIDAY SPECIAL 25% OFF !</h2>
                           <h4>Sign up now to recieve hot special offers and information about the best tour packages, updates and discounts !!</h4>
                           <div class="newsletter-form">
                              <form>
                                 <input type="email" name="s" placeholder="Your Email Address">
                                 <input type="submit" name="signup" value="SIGN UP NOW!">
                              </form>
                           </div>
                           <p>Join now and be the first to receive sizzling special offers, updates, and discounts on the best tour packages. Don't miss out on exclusive deals and exciting information. Sign up today and embark on your next adventure!</p>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- subscribe html end -->
            <!-- Home blog section html start -->
            <section class="blog-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">FROM OUR BLOG</h5>
                           <h2>OUR RECENT POSTS</h2>
                           <p>"Dive into the captivating world of travel through our blog, where we share our recent posts filled with inspiration, insights, and expert tips. From hidden gems and must-visit destinations to immersive experiences and cultural discoveries, our blog is your go-to resource for all things travel. Stay updated with the latest trends, wanderlust-inducing stories, and practical advice that will enhance your journey. Join us as we explore the world one blog post at a time."</p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-lg-4">
                        <article class="post">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="assets/images/img17.jpg" alt="">
                              </a>
                           </figure>
                           <div class="entry-content">
                              <h3>
                                 <a href="#">Life is a beautiful journey not a destination</a>
                              </h3>
                              <div class="entry-meta">
                                 <span class="byline">
                                    <a href="#">Demoteam</a>
                                 </span>
                                 <span class="posted-on">
                                    <a href="#">August 17, 2021</a>
                                 </span>
                                 <span class="comments-link">
                                    <a href="#">No Comments</a>
                                 </span>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <article class="post">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="assets/images/img18.jpg" alt="">
                              </a>
                           </figure>
                           <div class="entry-content">
                              <h3>
                                 <a href="#">Take only memories, leave only footprints</a>
                              </h3>
                              <div class="entry-meta">
                                 <span class="byline">
                                    <a href="#">Demoteam</a>
                                 </span>
                                 <span class="posted-on">
                                    <a href="#">August 17, 2021</a>
                                 </span>
                                 <span class="comments-link">
                                    <a href="#">No Comments</a>
                                 </span>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <article class="post">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="assets/images/img19.jpg" alt="">
                              </a>
                           </figure>
                           <div class="entry-content">
                              <h3>
                                 <a href="#">Journeys are best measured in new friends</a>
                              </h3>
                              <div class="entry-meta">
                                 <span class="byline">
                                    <a href="#">Demoteam</a>
                                 </span>
                                 <span class="posted-on">
                                    <a href="#">August 17, 2021</a>
                                 </span>
                                 <span class="comments-link">
                                    <a href="#">No Comments</a>
                                 </span>
                              </div>
                           </div>
                        </article>
                     </div>
                  </div>
               </div>
            </section>
             <!-- blog html end -->
             <!-- Home testimonial section html start -->
            <div class="testimonial-section" style="background-image: url(assets/images/img23.jpg);">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-10 offset-lg-1">
                        <div class="testimonial-inner testimonial-slider">
                           <div class="testimonial-item text-center">
                              <figure class="testimonial-img">
                                 <img src="assets/images/img20.jpg" alt="">
                              </figure>
                              <div class="testimonial-content">
                                 <p>" I have always thought that librarians are a little bit like doctors, travel agents and professors all rolled into one. We all know that a great story can lift spirits, take you anywhere in the world you want to go and in any time period to boot, and the lessons you learn from a good book can buoy your own convictions and even change your life. "</p>
                                 <cite>
                                    — Dorothea Benton Frank

                                    <span class="company">Travel Agent</span>
                                 </cite>
                              </div>
                           </div>
                           <div class="testimonial-item text-center">
                              <figure class="testimonial-img">
                                 <img src="assets/images/img21.jpg" alt="">
                              </figure>
                              <div class="testimonial-content">
                                 <p>" No matter where I've gone or why I've gone there it ends up that I never see anything. Becoming a movie star is living on a merry-go-round. When you travel you take the merry-go-round with you. You don't see natives or new scenery. You see chiefly the same press agents, the same sort of interviewers, and the same picture layouts of yourself. "</p>
                                 <cite>
                                    — Marilyn Monroe

                                    <span class="company">Travel Agent</span>
                                 </cite>
                              </div>
                           </div>
                           <div class="testimonial-item text-center">
                              <figure class="testimonial-img">
                                 <img src="assets/images/img22.jpg" alt="">
                              </figure>
                              <div class="testimonial-content">
                                 <p>" I love trains. It's the only way to travel anymore where it doesn't involve a TSA agent slowly tracing the curve of my inner thigh."</p>
                                 <cite>
                                    — Bill Maher

                                    <span class="company">Travel Agent</span>
                                 </cite>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- testimonial html end -->
            <!-- Home contact details section html start -->
            <section class="contact-section">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="contact-img" style="background-image: url(assets/images/img24.jpg);">
                        </div>
                     </div>
                     <div class="col-lg-8">
                        <div class="contact-details-wrap">
                           <div class="row">
                              <div class="col-sm-4">
                                 <div class="contact-details">
                                    <div class="contact-icon">
                                       <img src="assets/images/icon12.png" alt="">
                                    </div>
                                    <ul>
                                       <li>
                                          <a href="#">support@gmail.com</a>
                                       </li>
                                       <li>
                                          <a href="#">info@domain.com</a>
                                       </li>
                                       <li>
                                          <a href="#">name@company.com</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="contact-details">
                                    <div class="contact-icon">
                                       <img src="assets/images/icon13.png" alt="">
                                    </div>
                                    <ul>
                                       <li>
                                          <a href="#">076 123 4567</a>
                                       </li>
                                       <li>
                                          <a href="#">075 670 8778</a>
                                       </li>
                                       <li>
                                          <a href="#">077 199 3445</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="contact-details">
                                    <div class="contact-icon">
                                       <img src="assets/images/icon14.png" alt="">
                                    </div>
                                    <ul>
                                       <li>
                                          76/2, Rubberwatta road,
                                       </li>
                                       <li>
                                          Gangodawila,
                                       </li>
                                       <li>
                                          Nugegoda, Sri Lanka
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="contact-btn-wrap">
                           <h3>LET'S JOIN US FOR MORE UPDATE !!</h3>
                           <a href="#" class="button-primary">LEARN MORE</a>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!--  contact details html end -->
         </main>
         <?php include 'footer.php'; ?>
      <!-- JavaScript -->
      <script src="assets/js/jquery.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/vendors/jquery-ui/jquery-ui.min.js"></script>
      <script src="assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
      <script src="assets/js/jquery.counterup.js"></script>
      <script src="assets/vendors/modal-video/jquery-modal-video.min.js"></script>
      <script src="assets/vendors/masonry/masonry.pkgd.min.js"></script>
      <script src="assets/vendors/lightbox/dist/js/lightbox.min.js"></script>
      <script src="assets/vendors/slick/slick.min.js"></script>
      <script src="assets/js/jquery.slicknav.js"></script>
      <script src="assets/js/custom.min.js"></script>
      <script>
   function checkLogin(pack_ID) {
    const urlParams = new URLSearchParams(window.location.search);
    const loginStatus = urlParams.get('login');
    const userId = urlParams.get('user_id');
    const packId = pack_ID;
    if (loginStatus === 'success' && userId) {
        // User is logged in and has a user_id, proceed with booking
        // Pass the user_id and pack_id to the booking.html page if needed
        window.location.href = 'package-detail.php?user_id=' + userId + '&pack_id=' + packId;
    } else {
        // User is not logged in or user_id is missing, display error message
        alert('You need to log in to book.');
    }
   }
</script>

   </body>
</html>