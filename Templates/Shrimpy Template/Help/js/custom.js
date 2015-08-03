jQuery.noConflict();

jQuery(document).ready(function($){
    
/*==========  Tabs   ==========*/

$("ul.tab-titles").tabs("> .tab-content");
$('.toggle-content').each(function () {
    if (!$(this).hasClass('default-open')) {
        $(this).hide();
    } else if ($(this).hasClass('default-open')) {
        $(this).parents('.toggle-item').find('.arrow').removeClass('icon-plus').addClass('icon-minus');
    }
});

var tabs_height = $('.tab-vertical ul.tab-titles').height();
$('.tab-vertical .tab-content').css('min-height', tabs_height + 1);


/*==========  Smooth Scrolling  ==========*/
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('#scrollup').fadeIn();
		} else {
			$('#scrollup').fadeOut();
		}
	});
	$("#scrollup, .tab-titles li").click(function (document) {
		$('html, body').animate({scrollTop:100}, 'slow');
		return false;
	});
}); // end jquery init
