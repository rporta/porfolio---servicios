$(function() {
	/*scroll animación*/
	$('.nav-btn').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
		&& location.hostname == this.hostname) {
			var $target = $(this.hash);
			$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
		  	if ($target.length) {
				var targetOffset = $target.offset().top;
				$('html,body').animate({scrollTop: targetOffset}, 1000);
		   		return false;
		  	}
		}
  	});
	/*fin scroll animación*/
	$('#btn_gal_1').click(function(){
		$('#gal_2').slideUp(500);
		$('#gal_1').delay(500).slideDown(500);
	});
	$('#btn_gal_2').click(function(){
		$('#gal_1').slideUp(500);
		$('#gal_2').delay(500).slideDown(500);
	});
	$('.img').hover(
		function(){
			$(this).find('.imagen').animate({opacity:0.3},300);
			$(this).find('.lupa').show('scale', {},300);
		},
		function(){
			$(this).find('.imagen').animate({opacity:1},300);
			$(this).find('.lupa').hide('scale', {},300);
		}
	);
	/*scroll mi perfil*/
	var mi_perfil = $('#mi_perfil').position().top;
	var portfolio = $('#portfolio').position().top;
	var servicios = $('#servicios').position().top;
	var go1 = true;
	var go2 = true;
	/*mi perfil*/
	x = 0;
	/*contador*/
    function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
    }
	$(window).scroll(function() {
		$("#text_scroll").text( x+= 1);
		if ($(this).scrollTop() >= mi_perfil && go1) {			
			$(".progress-bar").show('slide',{direction:'left'},980);
			$('.tiempo').each(count);
			$('body').removeClass('color2 color3').addClass('color1');
			go1 = false;
		} 
		else if ($(this).scrollTop() < mi_perfil && !go1) {
			$(".progress-bar").hide('slide',{direction:'left'},980);
			$('.tiempo').text(0);
			go1 = true;
		}		
		else if ($(this).scrollTop() >= servicios && go2) {
			$(".ser-img").removeClass('rotate_d').addClass('rotate_360');	
			$('.scale').removeClass('scale_1').addClass('scale_2');			
			go2 = false;
		} 
		else if ($(this).scrollTop() < servicios && !go2) {
			$(".ser-img").removeClass('rotate_360').addClass('rotate_d');
			$('.scale').removeClass('scale_2').addClass('scale_1');	
			go2 = true;
		}
	});
	/*nav click*/
	$('.btn-1').click(function() {
		$(this).siblings('.animacion-nav').show('slide',{direction:'left'},500);
		$('.btn-2').css('color','#FFF').siblings('.animacion-nav').hide('slide',{direction:'left'},500);
		$('.btn-3').css('color','#FFF').siblings('.animacion-nav').hide('slide',{direction:'left'},500);
		$('.btn-4').css('color','#FFF').siblings('.animacion-nav').hide('slide',{direction:'left'},500);
		$('.btn-5').css('color','#FFF').siblings('.animacion-nav').hide('slide',{direction:'left'},500);
  	});
	$('.btn-2').click(function() {
		$(this).siblings('.animacion-nav').show('slide',{direction:'left'},500);
		$('.btn-1').css('color','#FFF').siblings('.animacion-nav').hide('slide',{direction:'left'},500);
		$('.btn-3').css('color','#FFF').siblings('.animacion-nav').hide('slide',{direction:'left'},500);
		$('.btn-4').css('color','#FFF').siblings('.animacion-nav').hide('slide',{direction:'left'},500);
		$('.btn-5').css('color','#FFF').siblings('.animacion-nav').hide('slide',{direction:'left'},500);
  	});
	$('.btn-3').click(function() {
		$(this).siblings('.animacion-nav').show('slide',{direction:'left'},500);
		$('.btn-1').css('color','#FFF').siblings('.animacion-nav').hide('slide',{direction:'left'},500);
		$('.btn-2').css('color','#FFF').siblings('.animacion-nav').hide('slide',{direction:'left'},500);
		$('.btn-4').css('color','#FFF').siblings('.animacion-nav').hide('slide',{direction:'left'},500);
		$('.btn-5').css('color','#FFF').siblings('.animacion-nav').hide('slide',{direction:'left'},500);
	});
	$('.btn-4').click(function() {
		$(this).siblings('.animacion-nav').show('slide',{direction:'left'},500);
		$('.btn-1').css('color','#FFF').siblings('.animacion-nav').hide('slide',{direction:'left'},500);
		$('.btn-2').css('color','#FFF').siblings('.animacion-nav').hide('slide',{direction:'left'},500);
		$('.btn-3').css('color','#FFF').siblings('.animacion-nav').hide('slide',{direction:'left'},500);
		$('.btn-5').css('color','#FFF').siblings('.animacion-nav').hide('slide',{direction:'left'},500);
  	});
	$('.btn-5').click(function() {
		$(this).siblings('.animacion-nav').show('slide',{direction:'left'},500);
		$('.btn-1').css('color','#FFF').siblings('.animacion-nav').hide('slide',{direction:'left'},500);
		$('.btn-2').css('color','#FFF').siblings('.animacion-nav').hide('slide',{direction:'left'},500);
		$('.btn-3').css('color','#FFF').siblings('.animacion-nav').hide('slide',{direction:'left'},500);
		$('.btn-4').css('color','#FFF').siblings('.animacion-nav').hide('slide',{direction:'left'},500);
  	});
	/*fullscreen*/
	function launchIntoFullscreen(element) {
		if(element.requestFullscreen) {
			element.requestFullscreen();
		} else if(element.mozRequestFullScreen) {
			element.mozRequestFullScreen();
		} else if(element.webkitRequestFullscreen) {
			element.webkitRequestFullscreen();
		} else if(element.msRequestFullscreen) {
			element.msRequestFullscreen();
		}
	}
	function exitFullscreen() {
		if(document.exitFullscreen) {
			document.exitFullscreen();
		} else if(document.mozCancelFullScreen) {
			document.mozCancelFullScreen();
		} else if(document.webkitExitFullscreen) {
			document.webkitExitFullscreen();
		}
	}
	/*fullscreen*/
	$('.litebox').click(function(){
		launchIntoFullscreen(document.documentElement);
	});
	$('body').delegate('.litebox-close','click',function() {
		exitFullscreen();
	});
	/*aplicar cambios al detectar xs sm md lg*/
	(function($, document, window, viewport){
		var max_div_ser = $('.max').height();
		$(document).ready(function() {
			if( viewport.is('xs') ) {
				$('.ser_').css('height','auto');	
			}
			else if( viewport.is('sm') ) {
				var max_div_ser = $('.max').height();
				$('.ser_').css('height',(max_div_ser+30)+'px');
	
			}
			else if( viewport.is('md') ) {
				var max_div_ser = $('.max').height();
				$('.ser_').css('height',(max_div_ser+30)+'px');
	
			}
			else if( viewport.is('lg') ) {
				var max_div_ser = $('.max').height();
				$('.ser_').css('height',(max_div_ser+30)+'px');
			}
		});
		$(window).bind('resize', function() {
			if( viewport.is('xs') ) {
				$('.ser_').css('height','auto');
	
			}
			else if( viewport.is('sm') ) {
				var max_div_ser = $('.max').height();
				$('.ser_').css('height',(max_div_ser+30)+'px');
	
			}
			else if( viewport.is('md') ) {
				var max_div_ser = $('.max').height();
				$('.ser_').css('height',(max_div_ser+30)+'px');
	
			}
			else if( viewport.is('lg') ) {
				var max_div_ser = $('.max').height();
				$('.ser_').css('height',(max_div_ser+30)+'px');
			}
		});	 
	})(jQuery, document, window, ResponsiveBootstrapToolkit);
});
 
