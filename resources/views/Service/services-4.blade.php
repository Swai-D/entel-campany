<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
  <title>Asset Tracking & Management</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
    <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css" id="main-styles-link">
  <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.0.45/css/materialdesignicons.min.css">
  <!--[if lt IE 10]>
  <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
  <script src="js/html5shiv.min.js"></script>
  <![endif]-->
</head>

  <body>
    @include('layout.app')
      <!-- Breadcrumbs -->
      <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Asset Tracking & Managemen</h3>
            <div class="breadcrumbs-custom-decor"></div>
          </div>
          <div class="box-transform" style="background-image: url(images/bg-forms.jpg);"></div>
        </div>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="#">Services</a></li>
            <li class="active">Asset Tracking & Management</li>
          </ul>
        </div>
      </section>
      <!-- Services 2-->
      <section class="section section-lg bg-default">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-9 col-lg-9 col-xl-9">
              <!-- Services Classic-->
              <article class=""><a class="services-classic-figure" href="#"><img src="images/tracking.jpg" alt="" width="370" height="274"/></a>
                <div class="services-classic-caption">
                  <div class="unit align-items-lg-left">
                    <div class="unit-left"><span class="services-classic-icon linearicons-manage icon-52"></span></div>
                    <div class="">
                      <h5 class="services-classic-title"><a href="#">Asset Tracking & Management</a></h5>
                      <p class="lead justify-content-left">We help your track your asset remotely anywhere in the country</p>
                    </div>
                  </div>
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
