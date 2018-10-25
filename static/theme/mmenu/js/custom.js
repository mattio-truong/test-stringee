
$(document).ready(function () {
	var navItem = $('#navTickets .nav-ticket-item')
	var navLink = $('#navTickets .nav-ticket-item a.nav-link')
	var navLinkActive = $('#navTickets .nav-ticket-item a.nav-link.active');
	
//	navLinkActive.parent('.nav-item').addClass('nav-item-active');
	navLink.on('click', function (e) {
//		$('.site-navbar .navbar-container').css({'border-bottom':'none'});
		
		navLink.not(this).parent('.nav-item').removeClass('nav-item-active');
		$(this).parent('.nav-item').addClass('nav-item-active');
	})
	
	
	navItem.hover(function(){
//		if($(this).hasClass('active')){
			navItem.not(this).removeClass('nav-item-hover');
			$(this).addClass('nav-item-hover');
//		}
	})
	navItem.mouseout(function(){
		$(this).removeClass('nav-item-hover');
	})
	
	$('#nav-reply-ticket a').on('click', function(){
		var btn = $(this).attr('aria-controls');
		if(btn == 'internal-note'){
			$('#content-reply').addClass('bg-internal-note');
		}else{
			$('#content-reply').removeClass('bg-internal-note');
		}
	})
	
})