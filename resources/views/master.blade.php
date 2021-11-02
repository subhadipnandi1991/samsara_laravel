<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Samsara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}"> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}
  </body>
  <style>

  /* @media only screen and (min-width: 768px) { */
    /* li.has-megamenu:hover .dropdown-menu {
      display: block;
    } */
  /* } */

  .menu-link-header {
    font-size: 20px;
    font-weight: bold;
  }

  .menu-border {
    border-right: 1px solid #e6e6e6;
  }

  .no-left-pad {
    padding-left: 0 !important;
  }

  .left-pad {
    padding-left: 2rem !important;
  }

  li.menu-list {
    list-style: none;
  }

  span.menu-image img {
    width: 260px;
    padding-top: 1rem;
  }

  span.menu-header {
    color: #979797;
    font-weight: 700;
    padding-left: 2rem;
  }

  li.custom-list a.active {
    font-weight: bold;
    text-decoration: underline;
    text-decoration-color: rgba(3,132,251,1);
  }
  .custom-list {
    padding-bottom: 5px;
  }
  .custom-anchor {
    line-height: 26px;
  }

  .no-underline {
    text-decoration: none;
  }

  .no-bullet-list {
    list-style: none;
  }

  .fs-48 {
    font-size: 48px;
  }

  .py-120 {
    padding: 120px 0;
  }

  .text-blue {
    color: rgba(3,132,251,1);
  }

  .small {
    font-size: .875em !important;
  }

  .w-400 {
    max-width: 400px;
  }

  .text-xl{
    font-size: 1.25rem;
  }

  .lg-container {
    max-width: 1080px;
  }

  .home-content {
    width: 100%;
    margin: 215px;
    padding-right: 22px;
    padding-left: 22px;
    position: absolute;
    z-index: 1;
  }

  .header-text h1 {
    font-size: 58px;
  }

  .bg-blue-lighter {
    background-color: rgba(240,246,254,1);
  }

  .card--simple-border {
      min-height: 150px;
      border-left: 1px solid rgba(0,38,62,.12);
      border-bottom: 0;
  }

  .-mx-gap {
    margin-left: -11px;
    margin-right: -11px;
  }

  .hero--video {
    /* height: 600px; */
  }

  .hero--video > div {
      /* position: absolute; */
      /* overflow: hidden; */
      /* top: 0; */
      /* left: 0; */
      /* width: 100%; */
      /* height: 100%; */
  }

  .hero--video video {
    width: 100%;
    max-width: none;
    min-height: 100%;
    position: relative;
    -o-object-fit: cover;
    object-fit: cover;
    top: 50%;
  }

  .frame-prop {
    width: 100%;
    height: 100%;
  }

  .w-8\/12 {
    width: 66.66%;
  }

  .video-frameless {
    padding-bottom: 44.6%;
    box-shadow: 1px 0 41px 2px rgba(0,38,62,.06);
  }

  .video-container {
    max-width: 1200px;
    margin: 0 auto;
  }

  .my-tag p {
    line-height: 26px;
    font-weight: 400;
    color: #333;
    margin-bottom: 26px;
  }

  .bg-blue-dark {
    background-color: #00263e;
  }

  .py-80 {
    padding: 80px 0;
  }

  .custom-logo img {
    width: 151px;
  }

  .p-large {
    font-size: 28px;
    line-height: 36px;
    font-weight: 400;
  }

  footer#custom-footer {
    font-family: Roboto,sans-serif;
    position: relative;
    padding: 80px 0;
  }

  footer#custom-footer .list-flat a {
    font-size: 13px;
    line-height: 22px;
    font-weight: 400;
  }

  footer#custom-footer .title a {
    font-size: 16px;
    font-weight: 600;
    line-height: 30px;
    margin-bottom: 1em;

  }

  footer#custom-footer .list-flat a,
  footer#custom-footer .title a {
    text-decoration: none;
    color: #fff;
  }

  footer#custom-footer ul {
    list-style-type: none;
    padding-left: 0;
  }

  footer#custom-footer li {
    margin-bottom: 12px !important;

  }

  footer#custom-footer .web-terms li {
    display: inline;
  }

  footer#custom-footer .lang-select {
    width: 216px;
    padding: 15px;
    border: 1px solid #b2bec5;
  }

  footer#custom-footer .lang-select img {
      height: 23px;
      width: 23px;
  }

  footer#custom-footer .select-region {
    color: #fff;
    background: url(https://www.samsara.com/app/images/white-dropdown-arrow.png);
    background-size: 38px;
    background-position: 100%;
    background-repeat: no-repeat;
    margin-left: 10px;
    padding-right: 0;
    line-height: 22px;
    width: 100%;
    font-size: 13px;
    font-weight: 400;
    opacity: .9;
    border: 0;
    appearance: none;
    cursor: pointer;
    padding: 0 12px 0 0;
    border-radius: 0;
  }

  footer#custom-footer .copyright {
    font-size: 16px;
    line-height: 30px;
    font-weight: 400;
    color: #fff;
    margin: 20px 0;
    text-align: left;
  }

  footer#custom-footer .copyright img{
    width: 22px;
    height: 22px;
    margin-left: 40px;
    margin-right: 0;
  }

  footer#custom-footer .under-footer {
    border-top: 1px solid #4c5e64;
    padding-top: 20px;
  }

  </style>

  <script type="text/javascript">

  $(document).ready(function() {
    var stickyTop = $('.no-bullet-list').offset().top;

      // $('li.has-megamenu').hover(function() {
      //   console.log("hovered");
      //   if ($('div.has-megamenu').hasClass('show')) {
      //     console.log("has show");
      //     $('div.dropdown-menu').removeClass('show')
      //     // $('div.dropdown-menu').addClass('show');
      //   }
      // });

    $(window).on('scroll load', function() {
      var windowTop = $(window).scrollTop();

      if (windowTop >= 56) {
        $('#secondary-menu').removeClass('d-none').addClass('fixed-top');
      } else {
        $('#secondary-menu').removeClass('fixed-top').addClass('d-none');
      }

      if (stickyTop < windowTop) {
        $('.no-bullet-list').css('position', 'fixed');
        $('.no-bullet-list').css('top', '100px');
      } else {
        $('.no-bullet-list').css('position', 'relative');
      }
    });

    $('li.custom-list a').on('click', function () {
      $('li.custom-list a').each(function () {
          $(this).removeClass('active');
      })
      $(this).addClass('active');
    });
  });

  </script>
</html>
