<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  @include('layout.header')
  <body>
     @include('layout.app')
      <!-- Swiper-->
      <section class="section swiper-container swiper-slider swiper-slider-2" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
          <div class="swiper-slide context-dark" data-slide-bg="{{asset('images/slide-1-1920x753.jpg')}}">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-md-7 col-lg-6 offset-lg-1 offset-xxl-0">
                    <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">Welcome to Entel service center!</span></h3>
                    <h5 class="swiper-subtitle" data-caption-animate="fadeInLeft" data-caption-delay="300">We deliver high-quality computer repair services.</h5><a class="button button-lg button-primary button-winona button-shadow-2" href="#" data-caption-animate="fadeInUp" data-caption-delay="300">View more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="images/slide-2-1920x753.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-9 col-md-8 col-xl-6 offset-lg-1 offset-xxl-0">
                    <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInDown" data-caption-delay="0">professional customer service</span></h3>
                    <h5 class="swiper-subtitle" data-caption-animate="fadeInRight" data-caption-delay="300">We provide extensive support for every customer.</h5>
                    <div class="button-wrap oh"><a class="button button-lg button-primary button-winona button-shadow-2" href="#" data-caption-animate="slideInUp" data-caption-delay="0">View more</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="images/slide-3-1920x753.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-md-7 col-xl-6 offset-lg-1 offset-xxl-0">
                    <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInLeft" data-caption-delay="100">A team of seasoned tech experts</span></h3>
                    <h5 class="swiper-subtitle" data-caption-animate="fadeInUp" data-caption-delay="0">We employ the best people in the industry.</h5>
                    <div class="button-wrap oh"><a class="button button-lg button-primary button-winona button-shadow-2" href="#" data-caption-animate="slideInLeft" data-caption-delay="100">View more</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="images/slide-4-1920x753.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-10 col-md-8 col-lg-7 offset-lg-1 offset-xxl-0">
                    <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">IT Support Services</span></h3>
                    <h5 class="swiper-subtitle" data-caption-animate="fadeInRight" data-caption-delay="300">We offer professional high-tech repair solutions.</h5>
                    <div class="button-wrap oh"><a class="button button-lg button-primary button-winona button-shadow-2" href="#" data-caption-animate="fadeInDown" data-caption-delay="0">View more</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination" data-bullet-custom="true"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev">
          <div class="preview">
            <div class="preview__img"></div>
          </div>
          <div class="swiper-button-arrow"><span class="icon mdi mdi-arrow-left"></span></div>
        </div>
        <div class="swiper-button-next">
          <div class="swiper-button-arrow"><span class="icon mdi mdi-arrow-right"></span></div>
          <div class="preview">
            <div class="preview__img"></div>
          </div>
        </div>
      </section>

      <!-- About Company-->
      <section class="section section-md section-lg-0 bg-gray-100 text-md-left section-relative" id="test">
        <div class="tabs-custom container" id="tabs-8">
          <div class="row row-40 flex-lg-row-reverse">
            <div class="col-lg-4">
              <div class="nav-tabs-2-button">
                <h5 class="nav-tabs-2-title">About Company</h5><span class="icon mdi mdi-arrow-down" data-custom-scroll-to="test"></span>
              </div>
              <ul class="nav nav-tabs-2">
                <li class="nav-item-2 wow fadeInRight" role="presentation"><a class="active" href="#tabs-8-1" data-toggle="tab">Our Services</a></li>
                <li class="nav-item-2 wow fadeInRight" role="presentation"><a href="#tabs-8-2" data-toggle="tab">Our Mission</a></li>
                <li class="nav-item-2 wow fadeInRight" role="presentation"><a href="#tabs-8-3" data-toggle="tab">Our Vision</a></li>
                <li class="nav-item-2 wow fadeInRight" role="presentation"><a href="#tabs-8-4" data-toggle="tab">Our Goals</a></li>
              </ul>
            </div>
            <div class="col-lg-8 tab-content-2 wow fadeInLeft">
              <div class="tab-content">
                <div class="tab-pane fade show active" id="tabs-8-1">
                  <div class="row row-40 row-lg-50 row-xl-60">
                    <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-desktop"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title"><a href="single-service.html">Technology Solution</a></h5>
                            <p class="box-icon-classic-text">We provide quality Technology Solution to make your company optmistic.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-thumbs-up"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title"><a href="#">General Traiding</a></h5>
                            <p class="box-icon-classic-text">Entel supplying None Food Items and any offices environment</p>
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-hammer-wrench"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title"><a href="single-service.html">Maintenance</a></h5>
                            <p class="box-icon-classic-text">Our experts can easily diagnose any Electronic-related issue and quickly resolve it.</p>
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="col-sm-6">
                      <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                          <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-database"></div>
                          </div>
                          <div class="unit-body">
                            <h5 class="box-icon-classic-title"><a href="single-service.html">Data Storage</a></h5>
                            <p class="box-icon-classic-text">When you require a guaranteed and affordable Storage and Server service, feel free to contact us!</p>
                          </div>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tabs-8-2">
                  <div class="box-info">
                    <div class="unit flex-column flex-md-row align-items-center">
                      <div class="unit-left">
                        <div class="box-info-figure"><img src="images/about-1-326x390.jpg" alt="" width="326" height="390"/>
                        </div>
                      </div>
                      <div class="unit-body">
                        <div class="box-info-content">
                          <h5 class="box-info-title">Our Mission</h5>
                          <p class="box-info-text">Our mission is to provide innovative IT services for all Company. We also aim to give you excellent customer service and quality
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tabs-8-3">
                  <div class="box-info">
                    <div class="unit flex-column flex-md-row align-items-center">
                      <div class="unit-left">
                        <div class="box-info-figure"><img src="images/about-2-326x390.jpg" alt="" width="326" height="390"/>
                        </div>
                      </div>
                      <div class="unit-body">
                        <div class="box-info-content">
                          <h5 class="box-info-title">Our Vision</h5>
                          <p class="box-info-text">Our vision is to grow and develop as #1 service center for IT solution in our country. We are going to achieve this by converting all opportunities into sustainable business growth, nurturing a culture of innovation, and providing better value to our partners and consumers while also offering best-in-class services.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tabs-8-4">
                  <div class="box-info">
                    <div class="unit flex-column flex-md-row align-items-center">
                      <div class="unit-left">
                        <div class="box-info-figure"><img src="images/about-3-326x390.jpg" alt="" width="326" height="390"/>
                        </div>
                      </div>
                      <div class="unit-body">
                        <div class="box-info-content">
                          <h5 class="box-info-title">Our Goals</h5>
                          <p class="box-info-text">We aim to help our clients in  IT life-cycle from operating, maintaining and securing the necessary systems, networking and equipment critical for mission fulfillmen’ we are going to archive this through Our team, which strives to offer top-notch customer service</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- What we offer-->
      <section class="section section-lg bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">What we offer</span></h3>
          <div class="owl-carousel owl-style-3 dots-style-2" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30" data-autoplay="true" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut">
            <!-- Services Creative-->
            <article class="services-creative"><a class="services-creative-figure" href="#"><img src="images/product_1.jpg" alt="" width="370" height="230"/></a>
              <div class="services-creative-caption">
                <h5 class="services-creative-title"><a href="#">Computer Store</a></h5>
                <p class="services-creative-text">We have professional computer store for all our clients.</p><span class="services-creative-counter box-ordered-item">01</span>
                <!-- <p class="services-creative-text">Our team provides professional data recovery services for all our clients.</p><span class="services-creative-counter box-ordered-item">01</span> -->
              </div>
            </article>
            <!-- Services Creative-->
            <article class="services-creative"><a class="services-creative-figure" href="#"><img src="images/services-2-370x230.jpg" alt="" width="370" height="230"/></a>
              <div class="services-creative-caption">
                <h5 class="services-creative-title"><a href="#">CISCO Devices</a></h5>
                <p class="services-creative-text">We offer affordable CISCO Devices to individual and corporate clients.</p><span class="services-creative-counter box-ordered-item">02</span>
              </div>
            </article>
            <!-- Services Creative-->
            <!-- <article class="services-creative"><a class="services-creative-figure" href="#"><img src="images/.jpg" alt="" width="370" height="230"/></a>
              <div class="services-creative-caption">
                <h5 class="services-creative-title"><a href="#">UPS</a></h5>
                <p class="services-creative-text">If you are looking for UPS solution for your office use,our team are here for you.</p><span class="services-creative-counter box-ordered-item">03</span>
              </div>
            </article> -->
            <!-- Services Creative-->
            <article class="services-creative"><a class="services-creative-figure" href="#"><img src="images/solor.jpg" alt="" width="370" height="230"/></a>
              <div class="services-creative-caption">
                <h5 class="services-creative-title"><a href="single-service.html">Solor Equipments</a></h5>
                <p class="services-creative-text">We also sell and repair all kinds of solor products, from Solor panel to sorlor Gadgets.</p><span class="services-creative-counter box-ordered-item">03</span>
              </div>
            </article>
            <!-- Services Creative-->
            <article class="services-creative"><a class="services-creative-figure" href="#"><img src="images/product_6.jpg" alt="" width="370" height="230"/></a>
              <div class="services-creative-caption">
                <h5 class="services-creative-title"><a href="single-service.html">Zebra ZXP Series</a></h5>
                <p class="services-creative-text">We offer Printer services like Zebra ZXP Series Maintenance to Organization and corporate clients.</p><span class="services-creative-counter box-ordered-item">04</span>
              </div>
            </article>
            <!-- Services Creative-->
            <article class="services-creative"><a class="services-creative-figure" href="#"><img src="images/slide-4-1920x753.jpg" alt="" width="370" height="230"/></a>
              <div class="services-creative-caption">
                <h5 class="services-creative-title"><a href="single-service.html">Network Support</a></h5>
                <p class="services-creative-text">We provide extensive 24/7 remote support via network to our customers.</p><span class="services-creative-counter box-ordered-item">05</span>
              </div>
            </article>

            <article class="services-creative"><a class="services-creative-figure" href="#"><img src="images/grid-gallery-1-1200x800-original.jpg" alt="" width="370" height="230"/></a>
              <div class="services-creative-caption">
                <h5 class="services-creative-title"><a href="single-service.html">Data storage and Server Support</a></h5>
                <p class="services-creative-text">We provide extensive 24/7 remote support via network to our customers.</p><span class="services-creative-counter box-ordered-item">07</span>
              </div>
            </article>
          </div>
        </div>
      </section>

      <!-- Section CTA-->
      <section class="section parallax-container" data-parallax-img="images/bg-cta.jpg">
        <div class="parallax-content section-lg context-dark text-md-left">
          <div class="container">
            <div class="row justify-content-between align-items-center row-20">
              <div class="col-12 col-md-6 col-lg-7 col-xl-8">
                <div class="cta-classic">
                  <h4 class="cta-classic-title text-secondary wow fadeInLeft">providing an unmatched level of quality and services</h4>
                  <p class="cta-classic-text wow fadeInRight" data-wow-delay=".1s">Efficient IT solutions for individual and corporate clients</p>
                </div>
              </div>
              <div class="col-12 col-md-5 col-lg-4 col-xl-3"><a class="button button-lg button-secondary button-winona wow fadeInUp" href="{{url('/services-1')}}" data-wow-delay=".2s">Learn More</a></div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section-->
      <section class="section section-xl bg-default text-md-left">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-12 col-lg-12 col-xl-3">
              <div class="box-team">
                <h3 class="oh-desktop "><span class="d-inline-block wow slideInUp text-secondary wow" data-wow-delay=".1s">About Us</span></h3>
                <p class="wow fadeInRight" data-wow-delay=".2s"><em>"Entel has an affordable pricing policy, which allows us to tailor the services to our clients".</em> </p>
              </div>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-9">
              <!-- Owl Carousel-->
              <div class="owl-carousel owl-carousel-pricing" data-items="1" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
                <div class="box-pricing-main">
                    <p class="wow  container-fluid" style="color:black; font-size:16px" data-wow-delay=".2s">Entel Co Ltd is not a solely linear Company We allow ourselves to delve into many different facets, industries, and projects in order to offer our innovative ideas and talent. Entel was founded in 2009, operating from a humble residential office and today continues to grow towards success.</p>
                    <p class="wow  container-fluid" style="color:black; font-size:16px" data-wow-delay=".2s">We take pride in the care we give not only to our customers, but the family bonds that are created within our company. While we strive to perform and offer exceeding results, we also are committed to acquiring the best quality and talent to guarantee no room for falling short.</p>
              </div>
            </div>
          </div>
        </div>

      </section>
      <!-- Icon Creative-->
      <section class="section parallax-container" data-parallax-img="images/bg-icon-2.jpg">
        <div class="parallax-content section-xl context-dark text-md-left">
          <div class="container">
            <h3 class="oh-desktop text-center"><span class="d-inline-block wow slideInDown">why choose us</span></h3>
            <div class="row row-lg row-30">
              <div class="col-sm-6 col-md-4 col-lg-3 oh-desktop">
                <article class="box-icon-creative wow slideInUp">
                  <div class="box-icon-creative-body">
                    <div class="box-icon-creative-icon linearicons-thumbs-up"></div>
                    <p class="box-icon-creative-title"><a href="#">98% of satisfied clients</a></p>
                  </div>
                </article>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 oh-desktop">
                <article class="box-icon-creative wow slideInDown">
                  <div class="box-icon-creative-body">
                    <div class="box-icon-creative-icon linearicons-rocket"></div>
                    <p class="box-icon-creative-title"><a href="#">Quick repair process</a></p>
                  </div>
                </article>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 oh-desktop">
                <article class="box-icon-creative wow slideInUp">
                  <div class="box-icon-creative-body">
                    <div class="box-icon-creative-icon linearicons-shield-check"></div>
                    <p class="box-icon-creative-title"><a href="#">100% guarantee</a></p>
                  </div>
                </article>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 oh-desktop">
                <article class="box-icon-creative wow slideInDown">
                  <div class="box-icon-creative-body">
                    <div class="box-icon-creative-icon linearicons-medal-empty"></div>
                    <p class="box-icon-creative-title"><a href="#">more than 20 awards</a></p>
                  </div>
                </article>
              </div>
            </div>
          </div>

        </div>
      </section>
      <!-- Section-->
      <section class="section section-xl bg-gray-100 text-md-left">
        <div class="container">
          <div class="row row-60 justify-content-center flex-lg-row-reverse">
            <div class="col-md-8 col-lg-6 col-xl-5">
              <div class="offset-left-xl-70">
                <h3 class="oh-desktop"><span class="d-inline-block wow slideInLeft">Our clients</span></h3>
                <div class="slick-quote">
                  <!-- Slick Carousel-->
                  <div class="slick-slider carousel-parent" data-autoplay="true" data-swipe="true" data-items="1" data-child="#child-carousel-2" data-for="#child-carousel-2" data-slide-effect="true">
                    <div class="item">
                      <!-- Quote Modern-->
                      <article class="quote-modern">
                        <h5 class="quote-modern-text"><span class="q">I was very impressed with the knowledge and professionalism of the staff of Entel. They did a great job repairing my iPad and it didn’t cost me a lot.</span></h5>
                        <h5 class="quote-modern-author">TRA,</h5>
                        <p class="quote-modern-status">Regular Client</p>
                      </article>
                    </div>
                    <div class="item">
                      <!-- Quote Modern-->
                      <article class="quote-modern">
                        <h5 class="quote-modern-text"><span class="q">Guys at Entel have repaired my computer in the past at a very reasonable price. The quality of work was excellent. I would highly recommend them.</span></h5>
                        <h5 class="quote-modern-author">Tigo,</h5>
                        <p class="quote-modern-status">Regular Client</p>
                      </article>
                    </div>
                    <div class="item">
                      <!-- Quote Modern-->
                      <article class="quote-modern">
                        <h5 class="quote-modern-text"><span class="q">I've taken in several computers with a multitude of different problems and your team was able to get them fixed super quick. Thank you!</span></h5>
                        <h5 class="quote-modern-author">Jane McMillan,</h5>
                        <p class="quote-modern-status">Regular Client</p>
                      </article>
                    </div>
                    <div class="item">
                      <!-- Quote Modern-->
                      <article class="quote-modern">
                        <h5 class="quote-modern-text"><span class="q">I am so glad to see Entel open for business. I have worked with them on several occasions and I can't be more impressed with their service.</span></h5>
                        <h5 class="quote-modern-author">Will Jones,</h5>
                        <p class="quote-modern-status">Regular Client</p>
                      </article>
                    </div>
                  </div>
                  <div class="slick-slider child-carousel" id="child-carousel-2" data-arrows="true" data-for=".carousel-parent" data-items="4" data-sm-items="4" data-md-items="4" data-lg-items="4" data-xl-items="4" data-slide-to-scroll="1">
                    <div class="item"><img class="img-circle" src="images/tra.png" alt="" width="83" height="83"/>
                    </div>
                    <div class="item"><img class="img-circle" src="images/tigo.png" alt="" width="83" height="83"/>
                    </div>
                    <div class="item"><img class="img-circle" src="images/team-7-83x83.jpg" alt="" width="83" height="83"/>
                    </div>
                    <div class="item"><img class="img-circle" src="images/team-8-83x83.jpg" alt="" width="83" height="83"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xl-7">
              <!-- Clients Classic-->
              <div class="clients-classic-wrap">
                <div class="row no-gutters">
                  <div class="col-sm-6 wow fadeInLeft">
                    <div class="clients-classic"><a class="clients-classic-figure" href="#"><img src="images/cisco.png" alt="" width="200" height="90"/></a></div>
                  </div>
                  <div class="col-sm-6 wow fadeInRight">
                    <div class="clients-classic"><a class="clients-classic-figure" href="#"><img src="images/zebra.png" alt="" width="200" height="90"/></a></div>
                  </div>
                </div>
                <div class="row no-gutters">
                  <div class="col-sm-6 wow fadeInLeft">
                    <div class="clients-classic"><a class="clients-classic-figure" href="#"><img src="images/hp.jpeg" alt="" width="200" height="90"/></a></div>
                  </div>
                  <div class="col-sm-6 wow fadeInRight">
                    <div class="clients-classic"><a class="clients-classic-figure" href="#"><img src="images/avaya.png" alt="" width="200" height="90"/></a></div>
                  </div>
                </div>
                <div class="row no-gutters">
                  <div class="col-sm-6 wow fadeInLeft">
                    <div class="clients-classic"><a class="clients-classic-figure" href="#"><img src="images/motorola.png" alt="" width="200" height="90"/></a></div>
                  </div>
                  <div class="col-sm-6 wow fadeInRight">
                    <div class="clients-classic"><a class="clients-classic-figure" href="#"><img src="images/fluke.png" alt="" width="200" height="90"/></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section parallax-container" data-parallax-img="images/bg-counter-3.jpg">
        <div class="parallax-content section-inset-9 context-dark">
          <div class="container">
            <div class="row row-30 justify-content-center justify-content-xl-between align-items-lg-end">
              <div class="col-sm-6 col-md-3">
                <div class="counter-classic">
                  <h3 class="counter-classic-number"><span class="counter">1283</span>
                  </h3>
                  <h6 class="counter-classic-title">services</h6>
                  <div class="counter-classic-decor"></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="counter-classic">
                  <h3 class="counter-classic-number"><span class="counter">19</span>
                  </h3>
                  <h6 class="counter-classic-title">awards won</h6>
                  <div class="counter-classic-decor"></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="counter-classic">
                  <h3 class="counter-classic-number"><span class="counter">32</span>
                  </h3>
                  <h6 class="counter-classic-title">partners</h6>
                  <div class="counter-classic-decor"></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="counter-classic">
                  <h3 class="counter-classic-number"><span class="counter">15</span>
                  </h3>
                  <h6 class="counter-classic-title">monthly clients</h6>
                  <div class="counter-classic-decor"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section-->
      <section class="section section-xl bg-default text-md-left">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-5 col-lg-4 col-xl-3">
              <div class="box-team">
                <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Our team</span></h3>
                <h6 class="title-style-1 wow fadeInLeft" data-wow-delay=".1s">professional Entel team</h6>
                <p class="wow fadeInRight" data-wow-delay=".2s">Since our establishment, we have gathered a team of dedicated for professional work.</p>
                <div class="group-sm oh-desktop">
                  <div class="button-style-1 wow slideInLeft"><span class="icon mdi mdi-email-outline"></span><span class="button-style-1-text"><a href="contacts.html">Contact us</a></span></div>
                  <!-- <div class="wow slideInRight">
                    <div class="owl-custom-nav" id="owl-custom-nav-1"></div>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-8 col-xl-9">
              <div class="owl-carousel owl-style-5" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30" data-autoplay="false" data-animation-in="fadeIn" data-animation-out="fadeOut" data-navigation-class="#owl-custom-nav-1">
                <!-- Team Modern-->
                <article class="team-modern"><a class="team-modern-figure" href="#"><img src="images/team-18-270x236.jpg" alt="" width="270" height="236"/></a>
                  <div class="team-modern-caption">
                    <h6 class="team-modern-name"><a href="#">Frank McMillan</a></h6>
                    <div class="team-modern-status">General Manager</div>
                    <ul class="list-inline team-modern-social-list">
                      <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                    </ul>
                  </div>
                </article>
                <!-- Team Modern-->
                <article class="team-modern"><a class="team-modern-figure" href="#"><img src="images/field_technician.jpeg" alt="" width="270" height="236"/></a>
                  <div class="team-modern-caption">
                    <h6 class="team-modern-name"><a href="#">Davy Swai</a></h6>
                    <div class="team-modern-status">Field Technician</div>
                    <ul class="list-inline team-modern-social-list">
                      <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                    </ul>
                  </div>
                </article>
                <!-- Team Modern-->
                <article class="team-modern"><a class="team-modern-figure" href="#"><img src="images/team-3-270x236.jpg" alt="" width="270" height="236"/></a>
                  <div class="team-modern-caption">
                    <h6 class="team-modern-name"><a href="#">Ben Wilson</a></h6>
                    <div class="team-modern-status">Customer Service Manager</div>
                    <ul class="list-inline team-modern-social-list">
                      <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                    </ul>
                  </div>
                </article>
                <!-- Team Modern-->
                <!-- <article class="team-modern"><a class="team-modern-figure" href="#"><img src="images/team-20-270x236.jpg" alt="" width="270" height="236"/></a>
                  <div class="team-modern-caption">
                    <h6 class="team-modern-name"><a href="#">Ben Fitzgerald</a></h6>
                    <div class="team-modern-status">Repair Technician</div>
                    <ul class="list-inline team-modern-social-list">
                      <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                    </ul>
                  </div>
                </article> -->
                <!-- Team Modern-->
                <!-- <article class="team-modern"><a class="team-modern-figure" href="#"><img src="images/team-21-270x236.jpg" alt="" width="270" height="236"/></a>
                  <div class="team-modern-caption">
                    <h6 class="team-modern-name"><a href="#">John Tuff</a></h6>
                    <div class="team-modern-status">Field Technician</div>
                    <ul class="list-inline team-modern-social-list">
                      <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                    </ul>
                  </div>
                </article> -->
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Subscribe to Our Newsletter-->
      <section class="section parallax-container" data-parallax-img="images/bg-forms-1.jpg">
        <div class="parallax-content section-md context-dark text-md-left">
          <div class="container">
            @if(session()->has('message'))
                <div class="alert alert" role = "alert">
                  <p class="lead" style="color: #f33155">
                    {{session()->get('message')}}
                  </p>
                </div>
            @endif
            <div class="row row-30 justify-content-center align-items-center">
              <div class="col-lg-4 col-xl-3">
                <h5 class="oh-desktop"><span class="d-inline-block wow slideInUp">Newsletter</span></h5>
                <p class="oh-desktop"><span class="d-inline-block wow slideInDown">Sign up for our newsletter and follow us on social media</span></p>
              </div>
              <div class="col-lg-8 col-xl-9">
                <!-- RD Mailform-->
                <form class="rd-form  rd-form-inline oh-desktop rd-form-inline-lg" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="/email_subcribe">
                  <div class="form-wrap wow slideInUp">
                    <input class="form-input" id="subscribe-form-0-email" type="email" name="email_subcribe" data-constraints="@Email @Required" value="{{old('email_subcribe')}}"/>
                    <label class="form-label" for="subscribe-form-0-email">Your E-mail*</label>
                  </div>
                  <div class="form-button wow slideInRight">
                    <button class="button button-winona button-lg button-primary" type="submit">Subscribe</button>
                  </div>
                  @csrf
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Latest news-->
      <section class="section section-xl bg-default text-md-left">
        <div class="tabs-custom tabs-post container" id="tabs-9">
          <div class="row align-items-md-end align-items-xl-start">
            <div class="col-md-6 tab-content-3 wow fadeInUp">
              <div class="tab-content">
                <div class="tab-pane fade show active" id="tabs-9-1">
                  <div class="post-amy-figure"><img src="images/site-1.jpg" alt="" width="570" height="505"/>
                  </div>
                </div>
                <div class="tab-pane fade" id="tabs-9-2">
                  <div class="post-amy-figure"><img src="images/site-3.jpg" alt="" width="570" height="505"/>
                  </div>
                </div>
                <div class="tab-pane fade" id="tabs-9-3">
                  <div class="post-amy-figure"><img src="images/site-2.jpg" alt="" width="570" height="505"/>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 index-1">
              <h3 class="tabs-post-title oh-desktop"><span class="d-inline-block wow slideInDown">Recent Works</span></h3>
              <ul class="nav nav-tabs">
                <li class="nav-item wow fadeInRight" role="presentation"><a class="nav-link active" href="#tabs-9-1" data-toggle="tab"></a>
                  <div class="post-amy">
                    <h5 class="post-amy-title"><a href="#tabs-9-1">Installation of city Light</a></h5>
                    <ul class="post-amy-info list-inline">
                      <li class="post-amy-time"><span class="icon mdi mdi-clock"></span>
                        <time datetime="2018-05-26">Dec 2019</time>
                      </li>
                      <li class="post-amy-autor"><span class="icon mdi mdi-account-outline"></span><a href="#">Kigoma, Tanzania</a></li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item wow fadeInRight" role="presentation"><a class="nav-link" href="#tabs-9-2" data-toggle="tab"></a>
                  <div class="post-amy">
                    <h5 class="post-amy-title"><a href="#tabs-9-2">Transpotation of Non-Food Product</a></h5>
                    <ul class="post-amy-info list-inline">
                      <li class="post-amy-time"><span class="icon mdi mdi-clock"></span>
                        <time datetime="2018-05-26">Jan 2020</time>
                      </li>
                      <li class="post-amy-autor"><span class="icon mdi mdi-account-outline"></span><a href="#">Arusha, Tanzania</a></li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item wow fadeInRight" role="presentation"><a class="nav-link" href="#tabs-9-3" data-toggle="tab"></a>
                  <div class="post-amy">
                    <h5 class="post-amy-title"><a href="#tabs-9-3">Networking Installation</a></h5>
                    <ul class="post-amy-info list-inline">
                      <li class="post-amy-time"><span class="icon mdi mdi-clock"></span>
                        <time datetime="2018-05-26">Mar 2020</time>
                      </li>
                      <li class="post-amy-autor"><span class="icon mdi mdi-account-outline"></span><a href="#">Kigoma, Tanzania</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Page Footer-->
     @include('layout.footer')
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="{{asset('js/core.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>

	<!--LIVEDEMO_00 -->

	<script type="text/javascript">
	 var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-7078796-5']);
	  _gaq.push(['_trackPageview']);
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();</script>

  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
