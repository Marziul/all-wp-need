Notes:

Div add id and classes

https://divisoup.com/how-to-highlight-active-links-on-scroll-and-click-for-one-page-divi-websites/


jQuery(document).ready(function( $ ){$
  

$('.elementor-nav-menu li:first-child a, .et_slide_in_menu_container .et_mobile_menu li:first-child a').addClass('ds-menu-active')
                                     $(window).scroll(function () {
                                       var scrollPos = $(window).scrollTop();
                                       $('.ds-section').each(function (i) {
                                         var topPos = $(this).offset().top;
                                         if ((topPos - scrollPos) <=  150) {
                                           $('.ds-menu-active').removeClass('ds-menu-active')
                                           $('.elementor-nav-menu a:not(li.centered-inline-logo-wrap a), .et_slide_in_menu_container .et_mobile_menu li a').eq(i).addClass('ds-menu-active')
                                         }
                                       })
                                     });

});
