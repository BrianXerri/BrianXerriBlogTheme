jQuery(document).ready(function($){


/**********************************************************************************
/* Top Header Menu *
**********************************************************************************/
jQuery('.top-header ul li').hover(function(){

	jQuery(this).find('ul').stop().slideToggle('fast');

});



jQuery('.top-header ul').find('ul').hover(function(){

	jQuery(this).prev('a').toggleClass('active');

});



/**********************************************************************************
/* Mobile Header Menu *
**********************************************************************************/
jQuery('.fa-bars').click(function(){

	jQuery('.mobile-header ul').slideToggle('fast');

	jQuery('.mobile-header ul ul').hide();

});


jQuery('.mobile-header ul li a').click(function(e){	

	jQuery(this).next('ul').slideToggle('fast');

});



/**********************************************************************************
/* Slider *
**********************************************************************************/
jQuery('.flexslider').flexslider({

        animation: "fade"
        
      });
 
   

/**********************************************************************************
/* Search Form *
**********************************************************************************/
jQuery('.fa-search').click(function(){

	jQuery('#searchform').submit();

});

/**********************************************************************************
/* Portfolio Gallery *
**********************************************************************************/

jQuery('.portfolioPreview').hover(function() {
	jQuery(this).find('.details').animate({ bottom: '0px'}, {queue:false,duration:300});
}, function() {
	jQuery(this).find('.details').animate({ bottom: '-260px'}, {queue:false,duration:300});
});

});