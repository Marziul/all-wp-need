 $("li.menu-item-has-children").prepend("<span class='my_arrow'>example</span>");
 

    $('li.menu-item-has-children .my_arrow').click(function(){
      var parentLI = $(this).parent().toggleClass('active-arrow');
      if( parentLI.hasClass('active') ){
        parentLI.siblings('.active').toggleClass('active-arrow');
      }
    });