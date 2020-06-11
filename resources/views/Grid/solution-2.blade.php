<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
@include('layout.header')
  <body>
    @include('layout.app')
      <!-- Breadcrumbs -->
      <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Health Care</h3>
            <div class="breadcrumbs-custom-decor"></div>
          </div>
          <div class="box-transform" style="background-image: url(images/bg-blog.jpg);"></div>
        </div>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <li><a href="grid-blog.html">Solutions</a></li>
            <li class="active">Health Care</li>
          </ul>
        </div>
      </section>
      <!-- Grid Blog-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-40 row-lg-60 justify-content-center">
            <div class="col-sm-6 col-lg-4 order-lg-1">
              <!-- Post Classic-->
              <article class="post post-classic">
                <div class="post-classic-figure"><img src="images/health.jpg" alt="" width="370" height="210"/>
                </div>
                <div class="post-classic-content">
                  <p class="post-classic-title"><a href="#">Entel  Maintenance health Equipments</a>
                  </p>
                </div>
                <!-- <time class="post-classic-time" datetime="2018-04-30">April 30, 2018</time> -->
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 order-lg-1">
              <!-- Post Classic-->
              <article class="post post-classic post-classic-2">
                <div class="post-classic-figure"><img src="images/health-2.jpg" alt="" width="370" height="365"/>
                </div>
                <div class="post-classic-content">
                  <p class="post-classic-title"><a href="#">We provide Medical Software, for small and large size</a>
                  </p>
                </div>
                <!-- <time class="post-classic-time" datetime="2018-04-25">April 25, 2018</time> -->
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 order-md-3 order-lg-1">
              <!-- Post Classic-->
              <article class="post post-classic">
                <div class="post-classic-figure"><img src="images/health-3.jpg" alt="" width="370" height="210"/>
                </div>
                <div class="post-classic-content">
                  <p class="post-classic-title"><a href="#">We also delivery Health equipment in varies place base in the location of our client</a>
                  </p>
                </div>
                <!-- <time class="post-classic-time" datetime="2018-04-05">April 05, 2018</time> -->
              </article>
            </div>
            <!-- <div class="col-sm-6 col-lg-4 order-md-2 order-lg-1">

              <article class="post post-classic post-classic-2">
                <div class="post-classic-figure"><img src="images/post-4-370x365.jpg" alt="" width="370" height="365"/>
                </div>
                <div class="post-classic-content">
                  <p class="post-classic-title"><a href="#">Debunking 15 Common Myths About Computer Repair</a>
                  </p>
                </div>
                <time class="post-classic-time" datetime="2018-06-11">June 11, 2018</time>
              </article>
            </div> -->
            <!-- <div class="col-sm-6 col-lg-4 order-md-4 order-lg-1">

              <article class="post post-classic">
                <div class="post-classic-figure"><img src="images/post-5-370x210.jpg" alt="" width="370" height="210"/>
                </div>
                <div class="post-classic-content">
                  <p class="post-classic-title"><a href="#">Restoring an HDD: What You Should Know</a>
                  </p>
                </div>
                <time class="post-classic-time" datetime="2018-06-06">June 06, 2018</time>
              </article>
            </div> -->
            <!-- <div class="col-sm-6 col-lg-4 order-md-5 order-lg-1">

              <article class="post post-classic post-classic-2">
                <div class="post-classic-figure"><img src="images/post-6-370x365.jpg" alt="" width="370" height="365"/>
                </div>
                <div class="post-classic-content">
                  <p class="post-classic-title"><a href="#">How to Easily Clean Your PC’s Motherboard and Other Components</a>
                  </p>
                </div>
                <time class="post-classic-time" datetime="2018-06-06">June 06, 2018</time>
              </article>
            </div> -->
          </div>

        </div>
      </section>

      <!-- Page Footer-->
      @include('layout.footer')
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
