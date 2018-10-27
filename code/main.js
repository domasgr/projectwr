$(document).ready(function(){
	//variables which is needed from multiple funcstions
	var scrollLink = $('.scroll');
	var titleOffset = $('header').offset().top-120;
	

	//navigation scrolling
	scrollLink.click(function(e){
		e.preventDefault();
		$('body,html').animate({
			scrollTop: $(this.hash).offset().top
		}, 1000);
	});


	// Active lane switching
	 $(window).scroll(function() {
	 	var scrollbarLocation = $(this).scrollTop();

	 	var homeOffset = $('#first').offset().top;
	 	var projectsOffset = $('#second').offset().top-60;
	 	var aboutOffset = $('#third').offset().top-60;
	 	var contactOffset = $('#fourth').offset().top-60;

	 		if( scrollbarLocation >= homeOffset){
	 			$('li a').removeClass('active');
	 			$('li a').eq(3).addClass('active');
	 		} 
	 		if( scrollbarLocation >= projectsOffset){
	 			$('li a').removeClass('active');
	 			$('li a').eq(2).addClass('active');
	 		}
	 		if( scrollbarLocation >= aboutOffset){
	 			$('li a').removeClass('active');
	 			$('li a').eq(1).addClass('active');
	 		}
	 		if( scrollbarLocation >= contactOffset){
	 			$('li a').removeClass('active');
	 			$('li a').eq(0).addClass('active');
	 		}
	});


	 // header toggle fading on exit/entry
	 $(window).scroll(function(){
	 var scrollbarLocation = $(this).scrollTop();
	 		
	 		if( scrollbarLocation > titleOffset){
	 			$('header').fadeOut(300);
	 		} else if( scrollbarLocation < titleOffset){
	 			$('header').fadeIn();
	 		}
  });
});




// COMING SOON FUNCTION FOR SMOOTH MOUSE WHEEL
// $(window).on('wheel', function(event){
// 	if(event.originalEvent.deltaY < 0){
// 		console.log("up");
// 	} else{
// 		event.preventDefault();
// 		$('body,html').animate({
// 			scrollTop: $('#second').offset().top
// 		}, 1000);
// 	}
// })




