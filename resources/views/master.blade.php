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
  .author-info {
    margin-top: -50px;
  }

  .author-image img{
    width: 72px;
    height: 72px;
  }

  .blog-card {
    height: 480px;
  }

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

    function cutString(data) {
      var addStr = '...';
      if (data.length > 100) {
        newdata = data.substr(0,100).concat(addStr);
        return newdata;
      } else {
        return data;
      }

    }
    //
    // desc = "Building a New Industrial Workforce: How AI and Digital Tools are Helping Combat the Labor Shortage";
    // console.log(cutString(desc));

    function fetchAllCategories() {
      $.ajax({
        url: '/fetch-all-categories',
        method: 'get',
        dataType: 'json',
        success: function (response) {
          $('.category-list').append(
            '<li class="custom-list">\
              <a class="custom-anchor no-underline text-black category-list-item" href="#" value="0">View All</a>\
            </li>');
          $.each(response.allCategories, function(key, item) {
            $('.category-list').append(
              '<li class="custom-list">\
                <a class="custom-anchor no-underline text-black category-list-item" href="#" value="'+ item.id +'">'+ item["blog-category"] +'</a>\
              </li>');
          });
        }
      });
    }


    function fetchAllBlogs(id) {
      $.ajax({
        url: '/fetch-all-blogs-n-categories?page=' + id,
        method: 'get',
        dataType: 'json',
        success: function (response) {
          console.log(response.allBlogs.links);

          $('.blog-area').html(''); // To clear blog area
          $.each(response.allBlogs.data, function(key, item) {
            $('.blog-area').append(
              '<div class="col-md-6 col-sm-12 single-blog-area">\
                <div class="card m-4 blog-card">\
                  <img class="card-img-top" src="'+ item['display-image'] +'" alt="Card image cap">\
                  <div class="card-body m-4">\
                    <h5 class="card-title">'+ item['title'] +'</h5>\
                    <a class="text-uppercase no-underline small font-bold blog-category-link" href="#" value="'+ item['blog-category-id'] +'">'+item['blog-category']+'</a>\
                    <p class="card-text my-4">\
                      '+ cutString(item['description']) +'\
                    </p>\
                    <a href="/blog/'+item.id+'" class="text-uppercase no-underline small font-bold read-more-blog">Read More</a>\
                  </div>\
                </div>\
              </div>');
          });
          // $('.blog-area').append('<div class="justify-center text-center mb-4 flex w-full">\
          //   <div class="pagination flex">\
          //   <div class="flex">');
          $.each(response.allBlogs.links, function(key,item) {
            $('.blog-area').append(
              '<div class="pagination cursor-pointer mx-1">\
                <a href="'+ item.url +'">'+ item.label +'</a>\
              </div>');
          });
          // $('.blog-area').append('\
          // </div>\
          // </div>\
          // </div>');
        }
      });
    }

    function fetchBlogsByCategory(id) {
      $.ajax({
        url: '/fetch-blogs-by-category/' + id,
        type: 'get',
        dataType: 'json',
        success: function (response) {
          console.log(response);
          $('.blog-area').html('');
          $.each(response.blogsByCategory, function(key, item) {
            $('.blog-area').append(
              '<div class="col-md-6 col-sm-12 single-blog-area">\
                <div class="card m-4 blog-card">\
                  <img class="card-img-top" src="'+ item['display-image'] +'" alt="Card image cap">\
                  <div class="card-body m-4">\
                  <h5 class="card-title">'+ item['title'] +'</h5>\
                  <a class="text-uppercase no-underline small font-bold blog-category-link" href="#" value="'+ item['blog-category-id'] +'">'+item['blog-category']+'</a>\
                  <p class="card-text my-4">\
                    '+ cutString(item['description']) +'\
                  </p>\
                  <a href="/blog/'+item.id+'" class="text-uppercase no-underline small font-bold read-more-blog">Read More</a>\
                  </div>\
                </div>\
              </div>');
          });
        }
      });
    }

    fetchAllCategories(); // load all categories in blog page at loading
    fetchAllBlogs(1);      // load all blogs in blog page at loading

    $(document).on('click', '.pagination a', function(event) {
      event.preventDefault();
      console.log(this);
      var p_no = $(this).attr('href').split('page=')[1];
      fetchAllBlogs(p_no);
    });


    // function clickAction() {
    $(document).on('click', '.blog-category-link, .category-list-item', function() {
    var id = $(this).attr('value');

      if (id == 0) {
        fetchAllBlogs(1);
      } else {
        fetchBlogsByCategory(id);
      }
    });
    // }

    // clickAction();

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
        $('.sticky-list').css('position', 'fixed');
        $('.sticky-list').css('top', '100px');
      } else {
        $('.sticky-list').css('position', 'relative');
      }

    });

    $('li.custom-list a').on('click', function () {
      $('li.custom-list a').each(function () {
          $(this).removeClass('active');
      })
      $(this).addClass('active');
    });

    // $('.read-more-blog').on('click', function () {
    //   $link = window.location.hash;
    //   $link = $link.substr(1);
    //   $("div#main-blog-page").addClass('d-none');
    //   $("div#"+$link).removeClass('d-none').addClass('d-block');
    // });

  });

  </script>
</html>
