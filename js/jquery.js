(function($) {
	
	
	$(".start-menu").slicknav();
		$(window).scroll(function(){ 
		var headfix = $(window).scrollTop();	
			if(headfix > 300) { 		
				$('.header-area').addClass('fixed');
			}	
			else{ 		
				$('.header-area').removeClass('fixed');
			}
		});

		$(".scole-icon a").click(function(){
			$('html').animate({'scrollTop' : 0},1000);
			return false;
		});

		$('.country .menu li h4 a').click (function(){ 
			return false;
		});

			$('.cuntry-one ul li').click(function(){	

				$(this).children('ul').slideToggle(1000);	
			});		




		

		



})(jQuery)
