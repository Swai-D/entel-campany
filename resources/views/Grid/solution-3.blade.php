<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
@include('layout.header')
  <body>
    @include('layout.app')
      <!-- Breadcrumbs -->
      <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Logistic</h3>
            <div class="breadcrumbs-custom-decor"></div>
          </div>
          <div class="box-transform" style="background-image: url(images/bg-blog.jpg);"></div>
        </div>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li>Home</li>
            <li>Solutions</li>
            <li class="active">Logistic</li>
          </ul>
        </div>
      </section>
      <!-- Grid Blog-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-40 row-lg-60 justify-content-center">
            <div class="col-sm-12 col-lg-9 order-lg-9">
              <!-- Post Classic-->
              <article class="post post-classic">
                <div class="post-classic-figure"><img src="images/logistics.jpg" alt="" width="370" height="210"/>
                </div>
                <div class="post-classic-content">
                  <p class="post-classic-title">We Facilitate Trasportation of non-food product from producer to final consumers across the country.
                  </p>
                </div>

              </article>
            </div>
            <!-- <div class="col-sm-6 col-lg-4 order-lg-1">

              <article class="post post-classic post-classic-2">
                <div class="post-classic-figure"><img src="images/post-2-370x365.jpg" alt="" width="370" height="365"/>
                </div>
                <div class="post-classic-content">
                  <p class="post-classic-title"><a href="#">How Secure is Your Network? Top 10 Tips from Our Experts</a>
                  </p>
                </div>
                <time class="post-classic-time" datetime="2018-04-25">April 25, 2018</time>
              </article>
            </div> -->
            <!-- <div class="col-sm-6 col-lg-4 order-md-3 order-lg-1">

              <article class="post post-classic">
                <div class="post-classic-figure"><img src="images/post-3-370x210.jpg" alt="" width="370" height="210"/>
                </div>
                <div class="post-classic-content">
                  <p class="post-classic-title"><a href="#">Buying a New Laptop vs Repairing an Old One: pros and Cons </a>
                  </p>
                </div>
                <time class="post-classic-time" datetime="2018-04-05">April 05, 2018</time>
              </article>
            </div> -->
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
