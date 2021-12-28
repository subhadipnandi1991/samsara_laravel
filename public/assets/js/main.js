$(document).ready(function() {

  function cutString(data) {      // this function is to cut long string upto 100 characters
    var addStr = '...';           // and adding dots at the end
    if (data.length > 100) {
      newdata = data.substr(0,100).concat(addStr);
      return newdata;
    } else {
      return data;
    }

  }

  var allBlogs_counter = 0;
  var blogsByCat_counter = 0;

  function fetchAllCategories() {   // It only fetches the categories from databasesand showing at the left of the blog page
    $.ajax({
      url: '/fetch-all-categories',
      method: 'get',
      dataType: 'json',
      success: function (response) {

        $('.category-list').append(
          '<li class="custom-list">\
            <a class="custom-anchor no-underline text-black category-list-item active" href="#" value="0">View All</a>\
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
    if (allBlogs_counter == 0) {      //  this is used to see which function called at last
      allBlogs_counter = 1;
      blogsByCat_counter = 0;
    }
    console.log("blogsByCat_counter = " + blogsByCat_counter);
    console.log("allBlogs_counter = " + allBlogs_counter);
    $.ajax({
      url: '/fetch-all-blogs-n-categories?page=' + id,
      method: 'get',
      dataType: 'json',
      success: function (response) {
        console.log('fetchAllBlogs called');
        $('.blog-area').html('');           // To clear blog area
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
        if (response.allBlogs.links.length > 3) {
          // console.log(response.allBlogs.links);
          // $('.blog-area').append('<div class="justify-center text-center mb-4 flex w-full">\
          //   <div class="pagination flex">\
          //   <div class="flex">');
          $.each(response.allBlogs.links, function(key,item) {        // pagination-link class is selected to change the effects of these links , Make sure this class is not deleted
            if(item.url != null) {
              console.log(item.active);
              $('.blog-area').append(
                '<div class="pagination-link cursor-pointer mx-1">\
                  <a class="no-underline text-black" href="'+ item.url +'">'+ item.label +'</a>\
                </div>');
            }
          });
          $('.pagination-link').wrapAll('<div class="justify-center mb-4 d-flex w-100"></div>');
        }
      }
    });
  }

  function fetchBlogsByCategory(id, p_no) {
    if (blogsByCat_counter == 0) {
      blogsByCat_counter = 1;
      allBlogs_counter = 0;
    }
    // console.log("blogsByCat_counter = " + blogsByCat_counter);
    // console.log("allBlogs_counter = " + allBlogs_counter);
    $.ajax({
      url: '/fetch-blogs-by-category/'+ id + '?page=' + p_no,
      type: 'get',
      dataType: 'json',
      success: function (response) {
        // console.log(response.blogsByCategory.data);
        console.log('fetchBlogsByCategory called');

        $('.blog-area').html('');
        $.each(response.blogsByCategory.data, function(key, item) {
          // console.log(response.blogsByCategory);
          if (item) {
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
          } else {
            $('.blog-area').append('<span>\
            No data of this category is available\
            </span>');
          }
        });
        if (response.blogsByCategory.links.length > 3) {
          // console.log(response.blogsByCategory.links.length);
          $.each(response.blogsByCategory.links, function(key, item) {
            if (item.url != null) {
              $('.blog-area').append(
                '<div class="pagination-link cursor-pointer mx-1">\
                  <a class="no-underline text-black" href="'+ item.url +'">'+ item.label +'</a>\
                </div>');
            }
          });

          $('.pagination-link').wrapAll('<div class="justify-center mb-4 d-flex w-100"></div>');
        }
      }
    });
  }

  fetchAllCategories(); // load all categories in blog page at loading
  fetchAllBlogs(1);      // load first page of blogs at loading

  $(document).on('click', '.pagination-link a', function(event) {  // This function is for pressing the pagination buttons
                                                              // and going to the particular page
    event.preventDefault();                                   // it prevents the default function of a tags
    // console.log(this);
    var p_no = $(this).attr('href').split('page=')[1];        // this take out the page no is being passed by pressing the pagination link
    // if $(this).hasClass('by-all') {
    //   console.log("yes! by-all");
    // } else if $(this).hasClass('by-category') {
    //   console.log("yes again! by-categorys");
    // }

    if (allBlogs_counter == 1) {
      fetchAllBlogs(p_no);                                      // this calls the function to see all blogs to that page
    } else if (blogsByCat_counter == 1) {
    var split_c_no = $(this).attr('href').split('/')[4];
    var c_no = split_c_no.split('?page')[0];
    console.log("-->" + c_no);
      fetchBlogsByCategory(c_no,p_no);
    }

  });

  $(document).load('.blog-category-list', function(){
    $('li.custom-list a').on('click', function () {     // this is where the products category active effect is happening afetr clicking
      $('li.custom-list a').each(function () {
          $(this).removeClass('active');
      })
      $(this).addClass('active');
    });
  });


  // function clickAction() {
  $(document).on('click', '.blog-category-link, .category-list-item', function() {
  var id = $(this).attr('value');     // by clicking on categories from category list or category on blog card it fetches the category id

    if (id == 0) {
      fetchAllBlogs(1);
    } else {
      fetchBlogsByCategory(id, 1);
    }
  });
  // }

  // clickAction();

  // var stickyTop = $('.no-bullet-list').offset().top;

    // $('li.has-megamenu').hover(function() {
    //   console.log("hovered");
    //   if ($('div.has-megamenu').hasClass('show')) {
    //     console.log("has show");
    //     $('div.dropdown-menu').removeClass('show')
    //     // $('div.dropdown-menu').addClass('show');
    //   }
    // });


  // $(window).on('scroll load', function() {
  //   var windowTop = $(window).scrollTop();
  //
  //   if (windowTop >= 56) {
  //     $('#secondary-menu').removeClass('d-none').addClass('fixed-top');
  //   } else {
  //     $('#secondary-menu').removeClass('fixed-top').addClass('d-none');
  //   }
  //
  //   if (stickyTop < windowTop) {
  //     $('.sticky-list').css('position', 'fixed');
  //     $('.sticky-list').css('top', '100px');
  //   } else {
  //     $('.sticky-list').css('position', 'relative');
  //   }
  //
  // });

  $('li.custom-list a').on('click', function () {     // this is where the products category active effect is happening afetr clicking
    console.log(this);
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

  // $(window).on('click', 'ul#tabContents > li', function() {
  //   console.log("tabContents clicked");
  // });

  /* Tab effect in safety page*/
  $('ul#tabContents > li').click(function () {
    $('.tabbedDiv').hide();
    $('ul#tabContents > li').removeClass(' active');
    var clickedDiv = this.id;
    console.log('div#'+clickedDiv);
    $('div#'+clickedDiv).show();
    $(this).addClass(' active');
  });

  /* Default settings during loading */
  $('.tabbedDiv').hide();
  $('ul#tabContents > li').removeClass(' active');
  $('li#aidashcams').addClass(" active");
  $('div#aidashcams').show();

/* carousel effect */

/* Default loading of slide*/
  var id = 1;
  $('.slides').hide();
  $('div#slide_'+id).show();
  var slide_num = $('.slides').length;
  // console.log("slide_num:"+slide_num);

  $('.carousel-buttons').click(function(event) {
    // console.log(this);
    if($(this).hasClass('next')) {
      if(id < slide_num) {
        id = id+1;
      } else {
        id = 1;
      }
    } else if ($(this).hasClass('previous')) {
      if(id > 1) {
        id = id-1;
      } else {
        id = slide_num;
      }
    }

    event.preventDefault();
    $('.slides').hide();
    $('div#slide_'+id).show();
  });

  /* offices carousel effect in about page */
  $('.offc-slides').hide();
  $('div#office-'+id).show();
  var slide_num_offc_car = $('.offc-slides').length;

  $('.offc-car-arrow').click(function(event) {
    // console.log(this);
    if($(this).hasClass('next--arrow')) {
      if(id < slide_num_offc_car) {
        id = id+1;
      } else {
        id = 1;
      }
    } else if ($(this).hasClass('prev--arrow')) {
      if(id > 1) {
        id = id-1;
      } else {
        id = slide_num_offc_car;
      }
    }

    event.preventDefault();
    $('.offc-slides').hide();
    $('div#office-'+id).show();
  });


/* timeline carousel in the about page */
  $('.tl-slides').hide();
  $('div#timeline-'+id).show();
  var slide_num_timeline = $('.tl-slides').length;

  $('.timeline-arrow').click(function(event) {
    // console.log(this);
    if($(this).hasClass('next--arrow')) {
      if(id < slide_num_timeline) {
        id = id+1;
      } else {
        id = 1;
      }
    } else if ($(this).hasClass('prev--arrow')) {
      if(id > 1) {
        id = id-1;
      } else {
        id = slide_num_timeline;
      }
    }

    event.preventDefault();
    $('.tl-slides').hide();
    $('div#timeline-'+id).show();
  });

  /* members carousel in the about page */
    $('.members-slide').hide();
    $('div#members-'+id).show();
    var slide_num_members = $('.members-slide').length;

    setInterval(function() {
      // console.log("id:"+id);
      if(id < slide_num_members) {
        id = id+1;
      } else {
        id = 1;
      }

      $('.members-slide').hide();
      $('div#members-'+id).show();
    }, 3000);


    $(window).on('scroll load', function() {
      var url = location.href;
      url_arr = url.split("/");
      console.log(url_arr[url_arr.length -1]);
      var windowTop = $(window).scrollTop();

      // if (windowTop >= 56) {
      //   $('#secondary-menu').removeClass('d-none').addClass('fixed-top');
      // } else {
      //   $('#secondary-menu').removeClass('fixed-top').addClass('d-none');
      // }
      //
      // if (stickyTop < windowTop) {
      //   $('.sticky-list').css('position', 'fixed');
      //   $('.sticky-list').css('top', '100px');
      // } else {
      //   $('.sticky-list').css('position', 'relative');
      // }

    });
});
