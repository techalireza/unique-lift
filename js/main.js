jQuery(document).ready(function($){
	$('.web-counter-number').counterUp({
		
	});
	var menu = $('.web-header-section');
	$(window).scroll(function(){
		if($(this).scrollTop() > 0 && menu.hasClass('web-header-section')){
			menu.addClass('web-header-fixed');
		}
		else if($(this).scrollTop() <= 0 && menu.hasClass('web-header-fixed')){
			menu.removeClass('web-header-fixed');
		}
	});
});
$(document).on("click", '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox();
    });

$(document).on("click", 'ul li', function() {
      $(this).addClass('active').siblings().removeClass('active');
    });


