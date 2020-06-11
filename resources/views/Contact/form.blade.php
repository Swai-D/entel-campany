<section class="section section-sm section-last bg-default text-left">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-8">
        @if(session()->has('message'))
            <div class="alert alert" role = "alert">
              <p class="lead" style="color: #f33155">
                {{session()->get('message')}}
              </p>
            </div>
            @else
        <h4>Any questions? Contact us</h4>
        <form class="rd-form" method="post" action="/contact-us">
          <div class="row row-20 gutters-20">
            <div class="col-md-6">
              <div class="form-wrap">
                <input class="form-input" id="contact-your-name-4" type="text" name="name" data-constraints="@Required">
                <label class="form-label" for="contact-your-name-4">Your Name*</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-wrap">
                <input class="form-input" id="contact-email-4" type="email" name="email" data-constraints="@Email @Required">
                <label class="form-label" for="contact-email-4">Your E-mail*</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-wrap">
                <input class="form-input" id="contact-company-name-4" type="text" name="name" data-constraints="@Required">
                <label class="form-label" for="contact-company-name-4">Your Company Name*</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-wrap">
                <input class="form-input" id="contact-phone-4" type="text" name="phone" data-constraints="@Numeric">
                <label class="form-label" for="contact-phone-4">Your Phone*</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-wrap">
                <label class="form-label" for="contact-message-4">Your message</label>
                <textarea class="form-input textarea-lg" id="contact-message-4" name="message" data-constraints="@Required"></textarea>
              </div>
            </div>
          </div>
          <button class="button button-primary " type="submit">Send request</button>
          @csrf
        </form>
        @endif
      </div>
    </div>
  </div>
</section>
