<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Marvelous</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../../landing-page/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../landing-page/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../landing-page/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../landing-page/ssets/img/favicons/favicon.png">
    <link rel="manifest" href="../../../landing-page/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../landing-page/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="../../../landing-page/assets/css/theme.css" rel="stylesheet" />

  </head>


  <body>
  

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="/welcome"><h1>Marvelous</h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
              <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#service">Service</a></li>
              <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#destination">Destination</a></li>
              <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#booking">Booking</a></li>
              <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#testimonial">Testimonial</a></li>
            <form action="{{ route ('logout')}}" method="POST">
              @csrf
            </form>

              </li>
            </ul>
          </div>
        </div>
      </nav>
      <section style="padding-top: 7rem;">
        <div class="bg-holder" style="background-image:url(assets/img/hero/hero-bg.svg);">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 hero-img" src="../../../landing-page/assets/img/hero/hero-img.png" alt="hero-header" /></div>
            <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
              <h4 class="fw-bold text-danger mb-3">Your Guide to Marvelous Journeys</h4>
              <h1 class="hero-title">Travel, Explore, and Live Your Marvelous Story</h1>
              <p class="mb-4 fw-medium">Uncover breathtaking destinations, create unforgettable memories, and embark on the adventure of a lifetime. Let Marvelous be your compass to a world of wonder.</p>
              <div class="text-center text-md-start"> <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="#!" role="button">Find out more</a>
                <div class="w-100 d-block d-md-none"></div><a href="#!" role="button" data-bs-toggle="modal" data-bs-target="#popupVideo"><span class="btn btn-danger round-btn-lg rounded-circle me-3 danger-btn-shadow"> <img src="../../../landing-page/assets/img/hero/play.svg" width="15" alt="paly"/></span></a><span class="fw-medium">Our best tour in 2025</span>
                <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                      <iframe class="rounded" style="width:100%;max-height:500px;" height="500px"src="https://www.youtube.com/embed/z4PIpL9Ehek"
                      title="YouTube video player"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen>
                    ></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5 pt-md-9" id="service">

        <div class="container">
          <div class="position-absolute z-index--1 end-0 d-none d-lg-block"><img src="../../../landing-page/assets/img/category/shape.svg" style="max-width: 200px" alt="service" /></div>
          <div class="mb-7 text-center">
            <h5 class="text-secondary">Why choose Marvelous? </h5>
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Our Marvelous Services</h3>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="../../../landing-page/assets/img/category/icon1.png" width="75" alt="Service" />
                  <h4 class="mb-3">Perfect Weather Insights</h4>
                  <p class="mb-0 fw-medium">Get accurate, real-time weather forecasts for your chosen destinations, helping you pack smart and plan your activities flawlessly.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="../../../landing-page/assets/img/category/icon2.png" width="75" alt="Service" />
                  <h4 class="mb-3">Seamless Flight Search</h4>
                  <p class="mb-0 fw-medium">Discover the best flight deals and routes to your dream destinations, making your travel planning effortless and efficient.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="../../../landing-page/assets/img/category/icon3.png" width="75" alt="Service" />
                  <h4 class="mb-3">Curated Local Experiences</h4>
                  <p class="mb-0 fw-medium">Uncover vibrant local events, festivals, and hidden gems that will immerse you in the true culture of each place you visit.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="../../../landing-page/assets/img/category/icon4.png" width="75" alt="Service" />
                  <h4 class="mb-3">Personalized Itineraries</h4>
                  <p class="mb-0 fw-medium">Enjoy tailored travel recommendations and customizable itineraries designed to match your unique interests and preferences.</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5" id="destination">

        <div class="container">
          <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4"><img src="../../../landing-page/assets/img/dest/shape.svg" alt="destination" /></div>
          <div class="mb-7 text-center">
            <h5 class="text-secondary">Top Selling </h5>
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Top Destinations</h3>
          </div>
          <div class="row">
            <div class="col-md-4 mb-4">
              <div class="card overflow-hidden shadow"> <img class="card-img-top" src="../../../landing-page/assets/img/dest/dest1.jpg" alt="Rome, Italty" />
                <div class="card-body py-4 px-3">
                  <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                    <h4 class="text-secondary fw-medium"><a class="link-900 text-decoration-none stretched-link" href="#!">Pasilong Sa Naga</a></h4><span class="fs-1 fw-medium">₱2.5k</span>
                  </div>
                  <div class="d-flex align-items-center"> <img src="../../../landing-page/assets/img/dest/navigation.svg" style="margin-right: 14px" width="20" alt="navigation" /><span class="fs-0 fw-medium">1 Day Trip</span></div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card overflow-hidden shadow"> <img class="card-img-top" src="../../../landing-page/assets/img/dest/dest2.jpg" alt="London, UK" />
                <div class="card-body py-4 px-3">
                  <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                    <h4 class="text-secondary fw-medium"><a class="link-900 text-decoration-none stretched-link" href="#!">Moalboal</a></h4><span class="fs-1 fw-medium">₱20k</span>
                  </div>
                  <div class="d-flex align-items-center"> <img src="../../../landing-page/assets/img/dest/navigation.svg" style="margin-right: 14px" width="20" alt="navigation" /><span class="fs-0 fw-medium">3 Days Trip</span></div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card overflow-hidden shadow"> <img class="card-img-top" src="../../../landing-page/assets/img/dest/dest3.jpg" alt="Full Europe" />
                <div class="card-body py-4 px-3">
                  <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                    <h4 class="text-secondary fw-medium"><a class="link-900 text-decoration-none stretched-link" href="#!">Bantayan Island</a></h4><span class="fs-1 fw-medium">₱30k</span>
                  </div>
                  <div class="d-flex align-items-center"> <img src="../../../landing-page/assets/img/dest/navigation.svg" style="margin-right: 14px" width="20" alt="navigation" /><span class="fs-0 fw-medium">5 Days Trip</span></div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="booking">

        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="mb-4 text-start">
                <h5 class="text-secondary">Easy and Fast </h5>
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Book Your Marvelous Trip in 3 Simple Steps</h3>
              </div>
              <div class="d-flex align-items-start mb-5">
                <div class="bg-primary me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="../../../landing-page/assets/img/steps/selection.svg" width="22" alt="steps" /></div>
                <div class="flex-1">
                  <h5 class="text-secondary fw-bold fs-0">Choose Destination</h5>
                  <p>Explore our handpicked destinations and find your dream location. <br class="d-none d-sm-block"> Whether it's a bustling city or a tranquil escape, <br><strong>Marvelous</strong> has it all.</p>
                </div>
              </div>
              <div class="d-flex align-items-start mb-5">
                <div class="bg-danger me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="../../../landing-page/assets/img/steps/water-sport.svg" width="22" alt="steps" /></div>
                <div class="flex-1">
                  <h5 class="text-secondary fw-bold fs-0">Plan & Personalize</h5>
                  <p>Craft your perfect itinerary with our expert guides and personalized <br class="d-none d-sm-block"> recommendations. Marvelous helps you customize every detail for an unforgettable journey.</p>
                </div>
              </div>
              <div class="d-flex align-items-start mb-5">
                <div class="bg-info me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="../../../landing-page/assets/img/steps/taxi.svg" width="22" alt="steps" /></div>
                <div class="flex-1">
                  <h5 class="text-secondary fw-bold fs-0">Embark on Your Adventure</h5>
                  <p>With everything meticulously planned, simply pack your bags <br class="d-none d-sm-block"> and get ready to experience the wonders of your chosen destination. <strong>your marvelous adventure awaits!</strong></p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-start">
              <div class="card position-relative shadow" style="max-width: 370px;">
                <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right:-160px;top:-210px;"> <img src="../../../landing-page/assets/img/steps/bg.png" style="max-width:550px;" alt="shape" /></div>
                <div class="card-body p-3"> <img class="mb-4 mt-2 rounded-2 w-100" src="../../../landing-page/assets/img/steps/booking-img.jpg" alt="booking" />
                  <div>
                    <h5 class="fw-medium">Trip To Greece</h5>
                    <p class="fs--1 mb-3 fw-medium">14-29 June | by Rinel Urot</p>
                    <div class="icon-group mb-4"> <span class="btn icon-item"> <img src="../../../landing-page/assets/img/steps/leaf.svg" alt=""/></span><span class="btn icon-item"> <img src="assets/img/steps/map.svg" alt=""/></span><span class="btn icon-item"> <img src="assets/img/steps/send.svg" alt=""/></span>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center mt-n1"><img class="me-3" src="../../../landing-page/assets/img/steps/building.svg" width="18" alt="building" /><span class="fs--1 fw-medium">24 people going</span></div>
                      <div class="show-onhover position-relative">
                        <div class="card hideEl shadow position-absolute end-0 start-xl-50 bottom-100 translate-xl-middle-x ms-3" style="width: 260px;border-radius:18px;">
                          <div class="card-body py-3">
                            <div class="d-flex">
                              <div style="margin-right: 10px"> <img class="rounded-circle" src="../../../landing-page/assets/img/steps/favorite-placeholder.png" width="50" alt="favorite" /></div>
  
                            </div>
                          </div>
                        </div>
                        <button class="btn"> <img src="../../../landing-page/assets/img/steps/heart.svg" width="20" alt="step" /></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="testimonial">

        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="mb-8 text-start">
                <h5 class="text-secondary">Testimonials </h5>
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">What people say about Us.</h3>
              </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
              <div class="pe-7 ps-5 ps-lg-0">
                <div class="carousel slide carousel-fade position-static" id="testimonialIndicator" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button class="active" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="0" aria-current="true" aria-label="Testimonial 0"></button>
                    <button class="false" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="1" aria-current="true" aria-label="Testimonial 1"></button>
                    <button class="false" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="2" aria-current="true" aria-label="Testimonial 2"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item position-relative active">
                      <div class="card shadow" style="border-radius:10px;">
                        <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover" src="../../../landing-page/assets/img/testimonial/author.png" height="65" width="65" alt="" /></div>
                        <div class="card-body p-4">
                          <p class="fw-medium mb-4">&quot;Marvelous made planning my dream vacation incredibly easy! Their personalized recommendations led me to hidden gems I would have never found on my own. I had the most incredible time exploring Southeast Asia, all thanks to their detailed guides and seamless support.&quot;</p>
                          <h5 class="text-secondary">Joseph Macbill, Travel Enthusiast</h5>
                          <p class="fw-medium fs--1 mb-0">Panglao, Bohol</p>
                        </div>
                      </div>
                      <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                    </div>
                    <div class="carousel-item position-relative ">
                      <div class="card shadow" style="border-radius:10px;">
                        <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover" src="../../../landing-page/assets/img/testimonial/author2.png" height="65" width="65" alt="" /></div>
                        <div class="card-body p-4">
                          <p class="fw-medium mb-4">&quot;I used Marvelous for my recent trip to Leyte, and it was a game-changer. The 'Perfect Weather Insights' helped me pack just right, and the 'Curated Local Experiences' section introduced me to some amazing local events. It felt like having a personal travel expert in my pocket!&quot;</p>
                          <h5 class="text-secondary">Karol Josef, CEO of EyeSight</h5>
                          <p class="fw-medium fs--1 mb-0">Maasin, Leyte.</p>
                        </div>
                      </div>
                      <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                    </div>
                    <div class="carousel-item position-relative ">
                      <div class="card shadow" style="border-radius:10px;">
                        <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover" src="../../../landing-page/assets/img/testimonial/author3.png" height="65" width="65" alt="" /></div>
                        <div class="card-body p-4">
                          <p class="fw-medium mb-4">&quot;As a busy professional, I appreciate how Marvelous simplifies the entire travel planning process. From finding the best flights to crafting a personalized itinerary, they handled everything. My family and I had a truly unforgettable trip to Siargao, all thanks to Marvelous's expertise.&quot;</p>
                          <h5 class="text-secondary">MJ, Film Director</h5>
                          <p class="fw-medium fs--1 mb-0">Siargao</p>
                        </div>
                      </div>
                      <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                    </div>
                  </div>
                  <div class="carousel-navigation d-flex flex-column flex-between-center position-absolute end-0 top-lg-50 bottom-0 translate-middle-y z-index-1 me-3 me-lg-0" style="height:60px;width:20px;">
                    <button class="carousel-control-prev position-static" type="button" data-bs-target="#testimonialIndicator" data-bs-slide="prev"><img src="../../../landing-page/assets/img/icons/up.svg" width="16" alt="icon" /></button>
                    <button class="carousel-control-next position-static" type="button" data-bs-target="#testimonialIndicator" data-bs-slide="next"><img src="../../../landing-page/assets/img/icons/down.svg" width="16" alt="icon" /></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <div class="position-relative pt-9 pt-lg-8 pb-6 pb-lg-8">
        <div class="container">
          <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 flex-center">
            <div class="col">
              <div class="card shadow-hover mb-4" style="border-radius:10px;">
                <div class="card-body text-center"> <img class="img-fluid" src="../../../landing-page/assets/img/partner/1.png" alt="" /></div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-hover mb-4" style="border-radius:10px;">
                <div class="card-body text-center"> <img class="img-fluid" src="../../../landing-page/assets/img/partner/2.png" alt="" /></div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-hover mb-4" style="border-radius:10px;">
                <div class="card-body text-center"> <img class="img-fluid" src="../../../landing-page/assets/img/partner/3.png" alt="" /></div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-hover mb-4" style="border-radius:10px;">
                <div class="card-body text-center"> <img class="img-fluid" src="../../../landing-page/assets/img/partner/4.png" alt="" /></div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-hover mb-4" style="border-radius:10px;">
                <div class="card-body text-center"> <img class="img-fluid" src="../../../landing-page/assets/img/partner/5.png" alt="" /></div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-6">

        <div class="container">
          <div class="py-8 px-5 position-relative text-center" style="background-color: rgba(223, 215, 249, 0.199);border-radius: 129px 20px 20px 20px;">
            <div class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3"> <img src="../../../landing-page/assets/img/cta/send.png" style="max-width:70px;" alt="send icon" /></div>
            <div class="position-absolute end-0 top-0 z-index--1"> <img src="../../../landing-page/assets/img/cta/shape-bg2.png" width="264" alt="cta shape" /></div>
            <div class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block"> <img src="../../../landing-page/assets/img/cta/shape-bg1.png" style="max-width: 340px;" alt="cta shape" /></div>
            <div class="row justify-content-center">
              <div class="col-lg-8 col-md-10">
                <h2 class="text-secondary lh-1-7 mb-7">Subscribe to get information, latest news and other interesting offers about Marvelous</h2>
                <form class="row g-3 align-items-center w-lg-75 mx-auto">
                  <div class="col-sm">
                    <div class="input-group-icon">
                      <input class="form-control form-little-squirrel-control" type="email" placeholder="Enter email " aria-label="email" /><img class="input-box-icon" src="../../../landing-page/assets/img/cta/mail.svg" width="17" alt="mail" />
                    </div>
                  </div>
                  <div class="col-sm-auto">
                    <button class="btn btn-danger orange-gradient-btn fs--1">Subscribe</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-0 pb-lg-4">

        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-7 col-12 mb-4 mb-md-6 mb-lg-0 order-0"> <h1>Marvelous</h1>
              <p class="fs--1 text-secondary mb-0 fw-medium">Book your trip in minute, get full Control for much longer.</p>
            </div>
            <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-1 order-md-2">
              <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Company</h4>
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">About</a></li>
                <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Careers</a></li>
                <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Mobile</a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-2 order-md-3">
              <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Contact</h4>
              <ul class="list-unstyled mb-0">

              </ul>
            </div>
            <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-3 order-md-4">
              <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">More</h4>
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Airlinefees</a></li>
                <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Airline</a></li>
                <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Low fare tips</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-5 col-12 mb-4 mb-md-6 mb-lg-0 order-lg-4 order-md-1">
              <div class="icon-group mb-4"> <a class="text-decoration-none icon-item shadow-social" id="facebook" href="#!"><i class="fab fa-facebook-f"> </i></a><a class="text-decoration-none icon-item shadow-social" id="instagram" href="#!"><i class="fab fa-instagram"> </i></a><a class="text-decoration-none icon-item shadow-social" id="twitter" href="#!"><i class="fab fa-twitter"> </i></a></div>
              <h4 class="fw-medium font-sans-serif text-secondary mb-3">Discover our app</h4>
              <div class="d-flex align-items-center"> <a href="#!"> <img class="me-2" src="../../../landing-page/assets/img/play-store.png" alt="play store" /></a><a href="#!"> <img src="../../../landing-page/assets/img/apple-store.png" alt="apple store" /></a></div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <div class="py-5 text-center">
        <p class="mb-0 text-secondary fs--1 fw-medium">All rights reserved@marvelous.co</p>
      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../../../landing-page/vendors/@popperjs/popper.min.js"></script>
    <script src="../../../landing-page/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../landing-page/vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../../landing-page/vendors/fontawesome/all.min.js"></script>
    <script src="../../../landing-page/assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">
  </body>

</html>