// Isotope activation js codes

jQuery(document).ready(function($){
   
     // Activate isotope in container
 
    $(".portfolio_items").isotope({
        itemSelector: '.single_items',
        layoutMode: 'fitRows',
    });
    
    // Add isotope click function
    
    $('.portfolio_filter li').click(function(){
        $(".portfolio_filter li").removeClass("active");
        $(this).addClass("active");
 
        var selector = $(this).attr('data-filter');
        $(".portfolio_items").isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
            }
        });
        return false;
    });

    
});