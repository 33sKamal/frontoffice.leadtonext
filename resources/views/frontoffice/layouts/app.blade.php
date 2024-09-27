<!DOCTYPE html>
<html data-wf-domain="www.leadtonext.com" data-wf-page="65ca200e36038ec5a0cb33f6" data-wf-site="63ce8fdfb773bb355dff79ca" lang="en">

<head>
  <meta charset="utf-8" />
  <title>leadtonext</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link rel="icon" type="image/x-icon" href="/assets/media/favicon/favicon.ico">

  <link href="/front-office/CSS/main.css" rel="stylesheet" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

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
 
  @vite('resources/js/app.js')
  @yield('js')

</body>

</html>