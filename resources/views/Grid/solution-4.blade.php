<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
@include('layout.header')
  <body>
    @include('layout.app')
      <!-- Breadcrumbs -->
      <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Construction</h3>
            <div class="breadcrumbs-custom-decor"></div>
          </div>
          <div class="box-transform" style="background-image: url(images/bg-blog.jpg);"></div>
        </div>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <li><a href="grid-blog.html">Solutions</a></li>
            <li class="active">Construction</li>
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
                <div class="post-classic-figure"><img src="images/site-1.jpg" alt="" width="370" height="210"/>
                </div>
                <div class="post-classic-content">
                  <p class="post-classic-title">Construction of City Lights
                  </p>
                </div>

              </article>
            </div>
            <div class="col-sm-6 col-lg-4 order-lg-1">
              <!-- Post Classic-->
              <article class="post post-classic post-classic-2">
                <div class="post-classic-figure"><img src="images/site-3.jpg" alt="" width="370" height="365"/>
                </div>
                <div class="post-classic-content">
                  <p class="post-classic-title">Transportation of non-food product
                  </p>
                </div>

              </article>
            </div>
            <div class="col-sm-6 col-lg-4 order-md-3 order-lg-1">
              <!-- Post Classic-->
              <article class="post post-classic">
                <div class="post-classic-figure"><img src="images/site-4.jpg" alt="" width="370" height="210"/>
                </div>
                <div class="post-classic-content">
                  <p class="post-classic-title">Installation of Telecommunication Equipments
                  </p>
                </div>

              </article>
            </div>
            <div class="col-sm-6 col-lg-4 order-md-2 order-lg-1">
              <!-- Post Classic-->
              <article class="post post-classic post-classic-2">
                <div class="post-classic-figure"><img src="images/site-2.jpg" alt="" width="370" height="365"/>
                </div>
                <div class="post-classic-content">
                  <p class="post-classic-title">Network cable installation
                  </p>
                </div>

              </article>
            </div>
            <div class="col-sm-6 col-lg-4 order-md-4 order-lg-1">
              <!-- Post Classic-->
              <article class="post post-classic">
                <div class="post-classic-figure"><img src="images/post-5-370x210.jpg" alt="" width="370" height="210"/>
                </div>
                <div class="post-classic-content">
                  <p class="post-classic-title">Restoring an HDD
                  </p>
                </div>

              </article>
            </div>
            <div class="col-sm-6 col-lg-4 order-md-5 order-lg-1">
              <!-- Post Classic-->
              <article class="post post-classic post-classic-2">
                <div class="post-classic-figure"><img src="images/post-6-370x365.jpg" alt="" width="370" height="365"/>
                </div>
                <div class="post-classic-content">
                  <p class="post-classic-title"> PC’s Motherboard and Other Components Repair
                  </p>
                </div>

              </article>
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
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
