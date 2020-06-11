<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
  <title>Contact us</title>
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
    <div class="preloader">
      <div class="wrapper-triangle">
        <div class="pen">
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      @include('layout.app')
      <!-- Breadcrumbs -->
      <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Contacts</h3>
            <div class="breadcrumbs-custom-decor"></div>
          </div>
          <div class="box-transform" style="background-image: url(images/bg-services.jpg);"></div>
        </div>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">Contacts</li>
          </ul>
        </div>
      </section>
      <!-- Contacts-->
      <section class="section section-lg bg-default text-md-left">
        <div class="container">
          @if(session()->has('message'))
              <div class="alert alert" role = "alert">
                <p class="lead" style="color: #f33155">
                  {{session()->get('message')}}
                </p>
              </div>
              @else
              <div class="row row-60 justify-content-center">
                <div class="col-lg-8">
                  <h4 class="text-spacing-25 text-transform-none">Get in Touch</h4>
                  <form class="rd-form" data-form-output="form-output-global" data-form-type="contact" method="post" action="/contact-us">
                    <div class="row row-20 gutters-20">
                      <div class="col-md-6">
                        <div class="form-wrap">
                          <input class="form-input" id="contact-your-name-5" type="text" name="name" data-constraints="@Required" value="{{old('name')}}">
                          <label class="form-label" for="contact-your-name-5">Your Name*</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-wrap">
                          <input class="form-input" id="contact-email-5" type="email" name="email" data-constraints="@Email @Required" value="{{old('email')}}">
                          <label class="form-label" for="contact-email-5">Your E-mail*</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-wrap">
                          <!--Select 2-->
                          <select class="form-input" data-minimum-results-for-search="Infinity" data-constraints="@Required" name="service" id="regula-generated-484901" tabindex="-1">
                            <option value="Select a Service">Select a Service</option>
                            <option value="Maintenance">Maintenance</option>
                            <option value="Consultan">Consultan</option>
                            <option value="Delivery">Delivery</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-wrap">
                          <input class="form-input" id="contact-phone-5" type="text" name="phone" data-constraints="@Numeric" value="{{old('phone')}}">
                          <label class="form-label" for="contact-phone-5">Your Phone*</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-wrap">
                          <label class="form-label" for="contact-message-5">Message</label>
                          <textarea class="form-input textarea-lg" id="contact-message-5" name="message" data-constraints="@Required"></textarea>
                        </div>
                      </div>
                    </div>
                    <button class="button button-secondary button-winona" type="submit">Contact us</button>
                    @csrf
                  </form>
                </div>
                <div class="col-lg-4">
                  <div class="aside-contacts">
                    <div class="row row-30">
                      <div class="col-sm-6 col-lg-12 aside-contacts-item">
                        <p class="aside-contacts-title">Get social</p>
                        <ul class="list-inline contacts-social-list list-inline-sm">
                          <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                          <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                          <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                          <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                        </ul>
                      </div>
                      <div class="col-sm-6 col-lg-12 aside-contacts-item">
                        <p class="aside-contacts-title">Phone</p>
                        <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                          <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                          <div class="unit-body"><a class="phone" href="tel:#">+255 000-0000</a></div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-12 aside-contacts-item">
                        <p class="aside-contacts-title">E-mail</p>
                        <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                          <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                          <div class="unit-body"><a class="mail" href="mailto:#">info@entel.co.tz</a></div>
                        </div>
                        <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                          <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                          <div class="unit-body"><a class="mail" href="mailto:#">sales@entel.co.tz</a></div>
                        </div>
                        <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                          <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                          <div class="unit-body"><a class="mail" href="mailto:#">tech@entel.co.tz</a></div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-12 aside-contacts-item">
                        <p class="aside-contacts-title">Address</p>
                        <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                          <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                          <div class="unit-body"><a class="address" href="#">Kawe Road., <br class="d-md-none">Dar-es-Salaam,</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

          @endif

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
