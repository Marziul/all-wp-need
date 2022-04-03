        // Testimonial with Fade
        $('.single_testi_client').click(function(){
            
            $('.single_testi_client.active').removeClass('active');
            $(this).addClass('active');
            
            //get the Change
            var getTab = $(this).attr('rel');
            $('.testi_text.active').fadeOut('100', function(){
                
                $(this).removeClass('active');
                
                $('#'+getTab).fadeIn('100', function(){
                    $(this).addClass('active');
                });
                
            });