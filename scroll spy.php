	// jQuery smooth scroll
        $('li.smooth-scroll a').bind('click', function(event) {
            var $anchor = $(this);
            var headerH = '40';
            $('html, body').stop().animate({
                scrollTop : $($anchor.attr('href')).offset().top - headerH + "px"
            }, 1200, 'easeInOutExpo');

            event.preventDefault();
        }); 
		
		
		
	// jQuery scroll psy
        $('body').scrollspy({ 
            target: '.navbar-collapse',
            offset: 95
        }); 