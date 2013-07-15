$(document).ready( function() {
	var timer;	//timer for splash screen
	
	//navigation swap
	$('#navigation a').on('click', function() {
		if( !$(this).hasClass('btn-main') ) {
			$('#navigation a')
			.toggleClass('btn-secondary')
			.toggleClass('btn-main');
			
			var tar = $(this).attr('href');
			$('.holder').fadeOut(500, function() {
				$(tar).fadeIn(500);
			});
		}
		return false;
	});
	$('#set2').hide();
	$('#header').css('top', '-100px');
	$('#footer').css('bottom', '-100px');
	$('#wrapper').hide();

	
	//calling jPreLoader
	$('body').jpreLoader({
		splashID: "#jSplas",
		loaderVPos: '70%',
		autoClose: true,
		closeBtnText: "Let's Begin!",
		splashFunction: function() {  
			//passing Splash Screen script to jPreLoader
			$('#jSplas').children('section').not('.selected').hide();
			$('#jSplas').hide().fadeIn(500);
			
			timer = setInterval(function() {
				splashRotator();
			}, 1000);
		}
	}, function() {	//callback function
		clearInterval(timer);
		$('#footer')
		.animate({"bottom":0}, 500);
		$('#header')
		.animate({"top":0}, 800, function() {
			$('#wrapper').fadeIn(1000);
		});
	});
	
	//create splash screen animation
	function splashRotator(){
		var cur = $('#jSplas').children('.selected');
		var next = $(cur).next();
		
		if($(next).length != 0) {
			$(next).addClass('selected');
		} else {
			$('#jSplas').children('section:first-child').addClass('selected');
			next = $('#jSplas').children('section:first-child');
		}
			
		$(cur).removeClass('selected').fadeOut(500, function() {
			$(next).fadeIn(500);
		});
	}
});