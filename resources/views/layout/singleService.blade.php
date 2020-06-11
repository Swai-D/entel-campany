<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
  <title></title>
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
            <h3 class="breadcrumbs-custom-title">Min Service</h3>
            <div class="breadcrumbs-custom-decor"></div>
          </div>
          <div class="box-transform" style="background-image: url(images/bg-services.jpg);"></div>
        </div>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <li><a href="services.html">Services</a></li>
            <li class="active">@yield('title')</li>
          </ul>
        </div>
      </section>
      <!-- Services-->
      <section class="section section-sm section-first bg-default text-left">
        <div class="container">
          <div class="row row-60">
            <div class="col-md-7 col-xl-8">
              <div class="single-service"><img src="images/@yield('image_path')" alt="" width="770" height="426"/>
                <h4>@yield('caption')</h4>

                @yield('paragraph_1')
                <div class="clients-classic-wrap">
                  <h5>Our core Values</h5>
                  <div class="row no-gutters">
                    <div class="col-sm-6 wow fadeInLeft">
                      <div class="clients-classic"><a class="clients-classic-figure" href="#">Company Rebuilding</a></div>
                    </div>
                    <div class="col-sm-6 wow fadeInRight">
                      <div class="clients-classic"><a class="clients-classic-figure" href="#"><img src="images/clients-2-200x90.png" alt="" width="200" height="90"/></a></div>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="col-sm-6 wow fadeInLeft">
                      <div class="clients-classic"><a class="clients-classic-figure" href="#"><img src="images/clients-3-200x90.png" alt="" width="200" height="90"/></a></div>
                    </div>
                    <div class="col-sm-6 wow fadeInRight">
                      <div class="clients-classic"><a class="clients-classic-figure" href="#"><img src="images/clients-4-200x90.png" alt="" width="200" height="90"/></a></div>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="col-sm-6 wow fadeInLeft">
                      <div class="clients-classic"><a class="clients-classic-figure" href="#"><img src="images/clients-5-200x90.png" alt="" width="200" height="90"/></a></div>
                    </div>
                    <div class="col-sm-6 wow fadeInRight">
                      <div class="clients-classic"><a class="clients-classic-figure" href="#"><img src="images/clients-6-200x90.png" alt="" width="200" height="90"/></a></div>
                    </div>
                  </div>
                </div>
                @yield('paragraph_2')
                <div class="row row-50 flex-xl-row-reverse">

                  <div class="col-xl-5">
                    <article class="team-classic"><a class="team-classic-figure" href="#"><img src="images/team-17-270x182.jpg" alt="" width="270" height="182"/></a>
                      <div class="team-classic-title">Feel free to contact us, we are ready to help you!</div>
                      <div class="team-classic-name"><a href="#">Alice Parker</a>, <span>Manager</span></div>
                    </article>
                  </div>
                  <div class="col-xl-7">
                    <!-- Bootstrap collapse-->
                    <div class="card-group-custom card-group-corporate" id="accordion3" role="tablist" aria-multiselectable="false">
                      <!-- Bootstrap card-->
                      <article class="card card-custom card-corporate">
                        <div class="card-header" id="accordion3Heading1" role="tab">
                          <div class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion3" href="#accordion3Collapse1" aria-controls="accordion3Collapse1" aria-expanded="true">@yield('content-1-header')
                              <div class="card-arrow"></div></a>
                          </div>
                        </div>
                        <div class="collapse show" id="accordion3Collapse1" role="tabpanel" aria-labelledby="accordion3Heading1">
                          <div class="card-body">
                            <p>@yield('content-1-explained')</p>
                          </div>
                        </div>

                      </article>
                      <!-- Bootstrap card-->
                      <article class="card card-custom card-corporate">
                        <div class="card-header" id="accordion3Heading2" role="tab">
                          <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#accordion3Collapse2" aria-controls="accordion3Collapse2">@yield('content-2-header')
                              <div class="card-arrow"></div></a>
                          </div>
                        </div>
                        <div class="collapse" id="accordion3Collapse2" role="tabpanel" aria-labelledby="accordion3Heading2">
                          <div class="card-body">
                            <p>@yield('content-2-explained')</p>
                          </div>
                        </div>
                      </article>
                      <!-- Bootstrap card-->
                      <article class="card card-custom card-corporate">
                        <div class="card-header" id="accordion3Heading3" role="tab">
                          <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#accordion3Collapse3" aria-controls="accordion3Collapse3">@yield('content-2-header')
                              <div class="card-arrow"></div></a>
                          </div>
                        </div>
                        <div class="collapse" id="accordion3Collapse3" role="tabpanel" aria-labelledby="accordion3Heading3">
                          <div class="card-body">
                            <p>@yield('content-3-explained')</p>
                          </div>
                        </div>
                      </article>
                      <!-- Bootstrap card-->
                      <article class="card card-custom card-corporate">
                        <div class="card-header" id="accordion3Heading4" role="tab">
                          <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#accordion3Collapse4" aria-controls="accordion3Collapse4">@yield('content-4-header')
                              <div class="card-arrow"></div></a>
                          </div>
                        </div>
                        <div class="collapse" id="accordion3Collapse4" role="tabpanel" aria-labelledby="accordion3Heading4">
                          <div class="card-body">
                            <p>@yield('content-4-explained')</p>
                          </div>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 col-xl-4">
              <div class="aside aside-services">
                <div class="row row-60">
                  <div class="aside-item col-12">
                    <h5 class="aside-services-title">Solutions for your business</h5>
                    <ul class="list-category">
                      <li class="list-category-item"><a class="active" href="#">All services</a></li>
                      <li class="list-category-item"><a href="#">Company Rebuilding</a></li>
                      <li class="list-category-item"><a href="#">IT Strategy &amp; Application</a></li>
                      <li class="list-category-item"><a href="#">ICT infrustructure &amp; Platforms</a></li>
                      <li class="list-category-item"><a href="#">Network infrustructure &amp; support</a></li>
                      <li class="list-category-item"><a href="#">Cloud Services</a></li>
                      <li class="list-category-item"><a href="#">Maintenance Services</a></li>
                    </ul>
                  </div>
                  <div class="aside-item col-sm-6 col-md-12">
                    <h5 class="aside-services-title">Our contacts</h5>
                    <!-- Box contacts-->
                    <div class="box-contacts">
                      <div class="box-contacts-item">
                        <div class="box-contacts-title">Free consultation</div>
                        <div class="unit unit-spacing-xs flex-column flex-md-row">
                          <div class="unit-left"><span class="icon icon-24 mdi mdi-phone"></span></div>
                          <div class="unit-body"><a class="phone" href="tel:#">+622 266-9772</a></div>
                        </div>
                      </div>
                      <div class="box-contacts-item">
                        <div class="box-contacts-title">Office</div>
                        <div class="unit unit-spacing-xs flex-column flex-md-row">
                          <div class="unit-left"><span class="icon icon-28 mdi mdi-map-marker"></span></div>
                          <div class="unit-body"><a class="address" href="#">Kawe Road, Dar-es-salaam</a></div>
                        </div>
                      </div>
                      <div class="box-contacts-item">
                        <div class="box-contacts-title">E-mail</div>
                        <div class="unit unit-spacing-xs flex-column flex-md-row">
                          <div class="unit-left"><span class="icon mdi mdi-email"></span></div>
                          <div class="unit-body"><a class="mail" href="mailto:#">info@entel.co.tz</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="aside-item col-sm-6 col-md-12">
                    <h5 class="aside-services-title">Our brochure</h5><a class="button button-lg button-icon button-icon-left button-primary button-winona" href="contacts.html"><span class="icon mdi mdi-download"></span><span>Download</span></a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact us-->
    @include('Contact.form')
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
