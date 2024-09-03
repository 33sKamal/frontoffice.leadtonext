<!DOCTYPE html>
<html data-wf-domain="www.leadtonext.com" data-wf-page="65ca200e36038ec5a0cb33f6" data-wf-site="63ce8fdfb773bb355dff79ca" lang="en">

<head>
  <meta charset="utf-8" />
  <title>leadtonext</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link rel="icon" type="image/x-icon" href="/assets/media/favicon/favicon.ico">

  <link href="/front-office/CSS/main.css" rel="stylesheet" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  @yield('css')
</head>

<body>


  <div class="global">
    <div class="html w-embed"></div>
    <div id="cookie-banner" class="cookie-message" style="display: none">
      <div class="cookie-info-wrapper">
        <div class="p-body">
          This website uses cookies. <a href="/cookie-policy">See how.</a>
        </div>
        <div id="consent-cookies" class="close-cookie__wrapper"></div>
      </div>
    </div>
  </div>

  @component('frontoffice.layouts.header')
  @endcomponent


  <main class="main__wrapper">

    <div style="opacity: 0; display: none" class="modal-wrapper">
      <div id="w-node-_30640d4a-0d76-b9b7-521a-9aa7475d1f15-a0cb33f6" style="
            -webkit-transform: translate3d(0, 20px, 0) scale3d(1, 1, 1)
              rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0)
              rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0)
              rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0)
              rotateY(0) rotateZ(0) skew(0, 0);
            opacity: 0;
          " class="modal-container">
        <div class="card-body-modal">
          <div class="modal__heading-close-wrapper">
            <div class="modal__heading">
              <h4 class="h2 is--bgtext-success text-center">Contact us</h4>
            </div>
            <a href="#" class="modal__close-btn w-inline-block">
              <div data-w-id="30640d4a-0d76-b9b7-521a-9aa7475d1f1b" class="icon-solid">
                ×︁
              </div>
            </a>
          </div>
          <div class="contact-form_main-wrapper w-form">
            <form id="wf-form-Message" name="wf-form-Message" data-name="Message" method="get" class="contact-form_wrap" data-wf-page-id="65ca200e36038ec5a0cb33f6" data-wf-element-id="6b3bcac7-80f2-ae14-4d9d-dd7e0c436b4e">
              <div class="contactus-p">
                <p class="h6 is--bgtext-success text-center">
                  Our friendly team will love to hear from you!
                </p>
              </div>
              <div class="inputs__wrapper">
                <div class="input_wrap right-m">
                  <label for="name" class="p-body is--bgtext-success">Name</label><input class="input w-input" maxlength="256" name="name" data-name="Name" placeholder="" type="text" id="name" required="" />
                </div>
                <div class="input_wrap left-m">
                  <label for="email" class="p-body is--bgtext-success">Email Address</label><input class="input w-input" maxlength="256" name="email" data-name="Email" placeholder="" type="email" id="email" required="" />
                </div>
              </div>
              <label for="Message" class="p-body is--bgtext-success">Message</label><textarea placeholder="Your message goes here" maxlength="5000" id="Message" name="Message" data-name="Message" required="" class="input message w-input"></textarea>
              <div class="main-button-wrapper submit">
                <input type="submit" data-wait="Please wait..." isabled="" class="submit__button w-button" value="Send" /><a data-w-id="e96a401e-c36b-d37f-45a9-0f24cede8f07" href="#" target="_blank" class="b-button__wrap w-inline-block">
                  <div class="b-text">
                    <div data-w-id="e96a401e-c36b-d37f-45a9-0f24cede8f09" class="b-b-text-up">
                      Send
                    </div>
                    <div data-w-id="e96a401e-c36b-d37f-45a9-0f24cede8f0b" class="b-b-text-static">
                      Send
                    </div>
                  </div>
                  <div data-w-id="e96a401e-c36b-d37f-45a9-0f24cede8f0d" class="b-b-bg"></div>
                </a>
              </div>
            </form>
            <div class="success-message w-form-done">
              <div class="h4 is--bgtext-success">
                Thank you! <br />Your message has been received!
              </div>
            </div>
            <div class="error-message w-form-fail">
              <div class="h6 is--bgtext-danger">
                Oops! Something went wrong while submitting the form.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div aria-hidden="true" tabindex="-1" class="modal__close-area"></div>
    </div>


    @yield('content')

    @component('frontoffice.layouts.footer')
    @endcomponent

  </main>

  
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63ce8fdfb773bb355dff79ca" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="/front-office/JS/webflow.0770ec808.js" type="text/javascript"></script>
  <script src="/front-office/JS/gsap.min.js"></script>
  <script src="/front-office/JS/ScrollTrigger.min.js"></script>
  <script src="/front-office/JS/SplitText.min.js"></script>
  <script src="/front-office/JS/MotionPathPlugin.min.js"></script>
  <script src="/front-office/JS/main.js"></script>
  @yield('js')

</body>

</html>